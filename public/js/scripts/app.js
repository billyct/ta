define(function(require, exports, module) {


    var $ = require('jquery');
    var api = require('js/modules/api');

    require('js/metro/accordion')($);
    require('js/metro/buttonset')($);
    require('js/metro/calendar')($);
    require('js/metro/carousel')($);

    require('js/metro/dialog')($);
    require('js/metro/dropdown')($);
    require('js/metro/input-control')($);
    require('js/metro/pagecontrol')($);
    require('js/metro/rating')($);
    require('js/metro/slider')($);
    //require('js/metro/start-menu')($);
    require('js/metro/tile-drag')($);
    require('js/metro/tile-slider')($);

    require('js/plugins/jquery.stick')();

    var socket = require('js/modules/socket');
    socket.init();


    var account = require('js/modules/account.js');
    account.auth();



    var quick = require('js/modules/quick-form.js');
    quick.init();

    var timeline = require('js/modules/timeline.js');
    timeline.init();
    timeline.single();

    var cny15 = require('js/modules/cny15');
    cny15.init();
    cny15.single();
    cny15.new();
    cny15.manage();

    var message = require('js/modules/message');
    message.init();

    // var moment = require('js/plugins/moment');
    // require('js/plugins/moment_langs')();

    // moment.lang('zh-cn');
    // var m = moment("2013年3月29日", "YYYY年MM月DD日");
    // console.log(m);
    // console.log(m.fromNow());
    // console.log(m.unix());


    // $.get(api.timelines_public, {
    //     page: 1,
    //     count:20
    // }, function(data) {
    //     console.log(data);
    // },'json');



});