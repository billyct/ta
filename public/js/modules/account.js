define(function(require, exports, module) {

	var $ = require('jquery');
    var uploader = require('js/modules/uploader.js');
    var api = require('js/modules/api');
    var moment = require('js/plugins/moment');

    exports.auth = function() {
    	$('a#auth').click(function() {
    		var self = $(this);
    		window.open(self.attr('href'),"newwindow", "height=400, width=650, top=200,left=200,toolbar=no, menubar=no, scrollbars=yes, resizable=yes, location=no");
    		return false;
    	});

        // $('a#end-auth').click(function() {
        //     $.get(api.end_session, {
        //         access_token : api.access_token
        //     }, function(data){
        //         if (data.code == api.success) {
        //             window.location.reload();
        //         };
        //     },'json');

        //     return false;
        // });
    }


});