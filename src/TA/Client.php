<?php
namespace TA;

class Client {
	
	private $oauth;
	
	private $host = 'http://api.localhost/api';

	/**
	 * 构造函数
	 *
	 * @access public
	 * @param mixed $akey 微博开放平台应用APP KEY
	 * @param mixed $skey 微博开放平台应用APP SECRET
	 * @param mixed $access_token OAuth认证返回的token
	 * @param mixed $refresh_token OAuth认证返回的token secret
	 * @return void
	 */
	public function __construct( $client_id, $client_secret, $access_token = null, $refresh_token = NULL)
	{
		$this->oauth = new OAuth( $client_id, $client_secret, null, $access_token, $refresh_token );
	}
	
	public function getMe() {
		return $this->oauth->get($this->host.'/user/me');
	}

	public function user_show($user_id) {
		return $this->oauth->get($this->host.'/user/show', array('user_id' => $user_id));
	}
	
	public function endSession() {
		return $this->oauth->get($this->host.'/user/endSession');
	}

	public function public_paginator($count=20, $page=1) {
		return $this->oauth->get($this->host.'/public/timelines',array('count'=>$count, 'page'=>$page));
	}

	public function public_timeline($timeline_id) {
		return $this->oauth->get($this->host.'/public/timeline', array('timeline_id'=>$timeline_id));
	}


	public function public_comments($timeline_id) {
		return $this->oauth->get($this->host.'/public/comments', array('timeline_id'=>$timeline_id));
	}

	public function public_gig($gig_id) {
		return $this->oauth->get($this->host.'/public/gig', array('gig_id'=>$gig_id));
	}

	public function public_gigs($count=20, $page=1) {
		return $this->oauth->get($this->host.'/public/gigs',array('count'=>$count, 'page'=>$page));
	}

	// public function public_user($user_id) {
	// 	return $this->oauth->get($this->host.'/public/user', array('user_id', $user_id));
	// }

	public function paginator($count=20, $page=1) {
		return $this->oauth->get($this->host.'/timeline/paginator',array('count'=>$count, 'page'=>$page));
	}

	public function show($timeline_id) {
		return $this->oauth->get($this->host.'/timeline/show', array('timeline_id'=>$timeline_id));
	}

	public function favorited($timeline_id) {
		return $this->oauth->get($this->host.'/timeline/favorited', array('timeline_id'=>$timeline_id));
	}

	public function joined($timeline_id) {
		return $this->oauth->get($this->host.'/timeline/joined', array('timeline_id'=>$timeline_id));
	}


	/**gig api*/
	public function gig_me($count=20, $page=1) {
		return $this->oauth->get($this->host.'/gig/me', array('count'=>$count, 'page'=>$page));
	}

	public function gig_paginator($count=20, $page=1) {
		return $this->oauth->get($this->host.'/gig/paginator', array('count'=>$count, 'page'=>$page));
	}

	public function gig_show($gig_id) {
		return $this->oauth->get($this->host.'/gig/show', array('gig_id'=>$gig_id));
	}

	/** order api*/
	// public function my_orders() {
	// 	return $this->oauth->get($this->host.'/order/my');
	// }

	public function my_buy_order($order_id = null) {
		return $this->oauth->get($this->host.'/order/myBuys', array('order_id'=>$order_id));
	}

	public function my_sell_order($order_id = null) {
		return $this->oauth->get($this->host.'/order/mySells', array('order_id'=>$order_id));
	}

	public function income() {
		return $this->oauth->get($this->host.'/order/income');
	}

	/**
	*私信
	*/

	public function msg_all() {
		return $this->oauth->get($this->host.'/msg/all');
	}

	public function msg_detail($to) {
		return $this->oauth->get($this->host.'/msg/detail', array('to' => $to));
	}

	/**
	*获取用户的游吟
	*/
	public function timelines_me() {
		return $this->oauth->get($this->host.'/timeline/me');
	}
	
	public function images_me() {
		return $this->oauth->get($this->host.'/image/me');
	}

	public function timelines_user($user_id) {
		return $this->oauth->get($this->host.'/timeline/user', array('user_id' => $user_id));
	}

	public function images_user($user_id) {
		return $this->oauth->get($this->host.'/image/user', array('user_id' => $user_id));
	}

	public function gigs_user($user_id, $count=20, $page=1) {
		return $this->oauth->get($this->host.'/gig/user', array('user_id' => $user_id,'count'=>$count, 'page'=>$page));
	}
	

	/**
	*collection
	*/
	public function timeline_favorites() {
		return $this->oauth->get($this->host.'/timeline/favorites');
	}
	public function gig_favorites($count=20, $page=1) {
		return $this->oauth->get($this->host.'/gig/favorites', array('count'=>$count, 'page'=>$page));
	}
	
}