<?php

require '../vendor/autoload.php';

/**
*配置
*/
$app = new \Slim\Slim(array(
    'templates.path' => '../templates',
    'log.level' => 4,
    'log.enabled' => true,
    'log.writer' => new \Slim\Extras\Log\DateTimeFileWriter(array(
        'path' => '../logs',
        'name_format' => 'y-m-d'
    )),
    'cookies.lifetime' => '30 days', //parsed with `strtotime` internally
    'cookies.secret_key' => 'access_token',
    'cookies.cipher' => MCRYPT_RIJNDAEL_256,
    'cookies.cipher_mode' => MCRYPT_MODE_CBC
));


\Slim\Extras\Views\Twig::$twigOptions = array(
    'charset' => 'utf-8',
    'cache' => realpath('../templates/cache'),
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true
);

$app->view(new \Slim\Extras\Views\Twig());

session_cache_limiter(false);
session_start();
/** 配置结束 */

/** 配置ta api*/
$client_id = '1652999032';
$client_secret = '901c3aa0164b252722f6a196fc7464d9';
$redirect_url = 'http://ta.localhost/callback';
$ta_oauth = new \TA\OAuth($client_id, $client_secret, $redirect_url);

$ta_client = new \TA\Client($client_id, $client_secret);
$user = null;
$access_token = null;
//判断cookie中的access_token是否有效，无效便去除它，
if ($app->getEncryptedCookie('access_token')) {
    $access_token = $app->getEncryptedCookie('access_token');
    $ta_client = new \TA\Client($client_id, $client_secret, $access_token);
    $resultback = $ta_client->getMe();
    if (isset($resultback['code']) && $resultback['code'] == $ta_oauth::FAILED) {
        $app->deleteCookie('access_token');
    } else {
        $user = $resultback;
    }
}
$authorizeURL = $ta_oauth->getAuthorizeURL();
$app->view()->setData('current_user', $user);
$app->view()->setData('access_token', $access_token);
$app->view()->setData('base_url', 'http://ta.localhost');
$app->view()->setData('url', $authorizeURL);
$app->view()->setData('last_url', $app->request()->getReferrer());
/** 配置结束 */

// 首页
$app->get('/', function () use ($app, $ta_oauth, $user, $ta_client) {
    
    $timelines = null;
    if ( $user != null ) {
        $timelines = $ta_client->paginator($count=20, $page=1);
    }else {
        $timelines = $ta_client->public_paginator($count=20, $page=1);
    }

    foreach ($timelines as $key => $timeline) {
        $timelines[$key]['create_at_nice'] = \TA\Time::nicetime($timeline['create_at']);
        $timelines[$key]['deadline_nice'] = \TA\Time::nicetime($timeline['deadline'], true);
    }
    
    $app->render('timeline/timelines.html', array('timelines' => $timelines));
    
});

// 获取API的redirect_url之后的处理
$app->get('/callback', function() use ($app, $ta_oauth) {
    $code = $app->request()->get('code');
    if ($code != null) {
        $keys = array( 'code' => $code );
        $resultback = $ta_oauth->getAccessToken('code', $keys);
        $app->setEncryptedCookie('access_token', $resultback['access_token']);
        $app->render('callback.html');
    }
	
	
});

$app->get('/signout', function() use ($app, $ta_oauth, $ta_client) {
    $resultback = $ta_client->endSession();
    if (isset($resultback['code']) && $resultback['code'] == $ta_oauth::SUCCESS) {
        $app->deleteCookie('access_token');
        $app->redirect('/');
    }
});

/*for timeline*/
$app->get('/timeline', function() use ($app, $ta_oauth, $user, $ta_client) {
    $timelines = null;
    if ( $user != null ) {
        $timelines = $ta_client->paginator($count=20, $page=1);
    }else {
        $timelines = $ta_client->public_paginator($count=20, $page=1);
    }

    foreach ($timelines as $key => $timeline) {
        $timelines[$key]['create_at_nice'] = \TA\Time::nicetime($timeline['create_at']);
        $timelines[$key]['deadline_nice'] = \TA\Time::nicetime($timeline['deadline'], true);
    }
    
    $app->render('timeline/timelines.html', array('timelines' => $timelines));
});


$app->get('/timeline/:timeline_id', function($timeline_id) use ($app, $user, $ta_oauth, $ta_client) {
    if ( $user != null) {
        $timeline = $ta_client->show($timeline_id);
    } else {
        $timeline = $ta_client->public_timeline($timeline_id);
    }
    
    $timeline['create_at_nice'] = \TA\Time::nicetime($timeline['create_at']);
    $timeline['deadline_nice'] = \TA\Time::nicetime($timeline['deadline'], 1);
    $comments = $ta_client->public_comments($timeline_id);
    foreach ($comments as $key => $comment) {
        $comments[$key]['create_at_nice'] = \TA\Time::nicetime($comment['create_at']);
    }

    $app->render('timeline/timeline.html', array('timeline' => $timeline, 'comments' => $comments));
});
/*end for timeline*/

/*for cny15*/

$checkUser = function () use ($app, $user){

    return function() use ($app, $user)
    {
        if ( $user == null) {
            $app->deleteCookie('access_token');
            $app->redirect('/');
        }
    };

};

$app->get('/cny15', function() use ($app, $ta_client, $user) {
    $gigs = null;
    if ( $user != null ) {
        $gigs = $ta_client->gig_paginator($count=20, $page=1);
    } else {
        $gigs = $ta_client->public_gigs($count=20, $page=1);
    }
    foreach ($gigs as $key => $gig) {
        $gigs[$key]['create_at_nice'] = \TA\Time::nicetime($gig['create_at']);
    }

    $app->render('cny15/cny15s.html', array('gigs'=>$gigs));
});

$app->get('/cny15/manage', $checkUser(), function() use ($app, $ta_client) {

    $gigs = $ta_client->gig_me($count=20, $page=1);
    foreach ($gigs as $key => $gig) {
        $gigs[$key]['create_at_nice'] = \TA\Time::nicetime($gig['create_at'], 2);
    }
    $app->render('cny15/manage.html', array('gigs'=>$gigs));
});

$app->get('/cny15/manage/new', $checkUser(), function() use ($app, $ta_client) {


    $app->render('cny15/new.html');
});

$app->get('/cny15/manage/edit/:gig_id', $checkUser(), function($gig_id) use ($app, $ta_client) {
    $gig = $ta_client->gig_show($gig_id);
    $app->render('cny15/edit.html', array('gig' => $gig));
});

$app->get('/cny15/:gig_id', function($gig_id) use ($app, $ta_client, $user) {
    $gig = null;
    if ($user != null) {
        $gig = $ta_client->gig_show($gig_id);
    }else {
        $gig = $ta_client->public_gig($gig_id);
    }
    $gig['create_at_nice'] = \TA\Time::nicetime($gig['create_at']);
    $app->render('cny15/cny15.html', array('gig' => $gig));
});


/** order buy*/
$app->get('/cny15/manage/my_buy_order', $checkUser(), function() use ($app, $ta_client) {
    $orders = $ta_client->my_buy_order();
    foreach ($orders as $key => $order) {
        $orders[$key]['create_at_nice'] = \TA\Time::nicetime($order['create_at'], 1);
    }
    $app->render('cny15/my-orders.html', array('orders' => $orders));
});

$app->get('/cny15/manage/my_buy_order/:order_id', $checkUser(), function($order_id) use ($app, $ta_client) {
    $req = $app->request();
    $last_url =  $req->getReferrer();
    $order = $ta_client->my_buy_order($order_id);
    $order['create_at_nice'] = \TA\Time::nicetime($order['create_at'], 1);
    $app->render('cny15/my-order.html', array('order' => $order, 'last_url' => $last_url));
});
/* end for order buy*/

$app->get('/cny15/manage/my_sell_order', $checkUser(), function() use ($app, $ta_client) {
    $orders = $ta_client->my_sell_order();
    foreach ($orders as $key => $order) {
        $orders[$key]['create_at_nice'] = \TA\Time::nicetime($order['create_at'], 1);
    }
    $app->render('cny15/my-sell-orders.html', array('orders' => $orders));
});

$app->get('/cny15/manage/my_sell_order/:order_id', $checkUser(), function($order_id) use ($app, $ta_client) {
    $req = $app->request();
    $last_url =  $req->getReferrer();
    $order = $ta_client->my_sell_order($order_id);
    $order['create_at_nice'] = \TA\Time::nicetime($order['create_at'], 2);
    $app->render('cny15/my-sell-order.html', array('order' => $order, 'last_url' => $last_url));
});

$app->get('/cny15/manage/income', $checkUser(), function() use ($app, $ta_client) {
    $orders = $ta_client->income();
    foreach ($orders as $key => $order) {
        $orders[$key]['create_at_nice'] = \TA\Time::nicetime($order['create_at'], 2);
    }
    $app->render('cny15/income.html', array('orders' => $orders));
});


/*end for cny15*/


/**
*私信
*/
$app->get('/message', $checkUser(), function() use ($app, $ta_client) {
    $messages = $ta_client->msg_all();

    foreach ($messages as $key => $message) {
        $messages[$key]['create_at_nice'] = \TA\Time::nicetime($message['create_at']);
    }

    $app->render('message/messages.html', array('messages' => $messages));
});

$app->get('/message/:user_id', $checkUser(), function($user_id) use ($app, $ta_client) {
    $user = $ta_client->user_show($user_id);
    $messages = $ta_client->msg_detail($user_id);
    foreach ($messages as $key => $message) {
        $messages[$key]['create_at_nice'] = \TA\Time::nicetime($message['create_at']);
    }
    $app->render('message/message.html', array('user' => $user, 'messages' => $messages));
});

/**
*用户主页，收藏
*/

$app->get('/profile', $checkUser(), function() use ($app, $ta_client, $user) {
    $timelines = $ta_client->timelines_me();
    foreach ($timelines as $key => $timeline) {
        $timelines[$key]['create_at_nice'] = \TA\Time::nicetime($timeline['create_at']);
        $timelines[$key]['deadline_nice'] = \TA\Time::nicetime($timeline['deadline'], true);
    }

    $gigs = $ta_client->gig_me($count=20, $page=1);
    foreach ($gigs as $key => $gig) {
        $gigs[$key]['create_at_nice'] = \TA\Time::nicetime($gig['create_at'], 2);
    }

    $images = $ta_client->images_me();
    $app->render('user/profile.html', array(
                        'user' => $user, 
                        'timelines' => $timelines,
                        'gigs' => $gigs,
                        'images' => $images,
                        ));
});

$app->get('/profile/:user_id', $checkUser(), function($user_id) use ($app, $ta_client) {
    $user = $ta_client->user_show($user_id);
    $timelines = $ta_client->timelines_user($user_id);
    foreach ($timelines as $key => $timeline) {
        $timelines[$key]['create_at_nice'] = \TA\Time::nicetime($timeline['create_at']);
        $timelines[$key]['deadline_nice'] = \TA\Time::nicetime($timeline['deadline'], true);
    }

    $gigs = $ta_client->gigs_user($user_id, $count=20, $page=1);
    foreach ($gigs as $key => $gig) {
        $gigs[$key]['create_at_nice'] = \TA\Time::nicetime($gig['create_at'], 2);
    }

    $images = $ta_client->images_user($user_id);
    $app->render('user/profile.html', array(
                        'user' => $user, 
                        'timelines' => $timelines,
                        'gigs' => $gigs,
                        'images' => $images,
                        ));
});

$app->get('/collection', $checkUser(), function() use ($app, $ta_client, $user) {
    $timelines = $ta_client->timeline_favorites();
    $gigs = $ta_client->gig_favorites();
    $app->render('user/collection.html', array(
                        'user' => $user, 
                        'timelines' => $timelines,
                        'gigs' => $gigs,
                        ));
});

$app->get('/accounts', function() use ($app, $ta_oauth, $ta_client) {


    $app->render('user/accounts.html');
});

$app->run();