define(function(require, exports, module) {
	var $ = require('jquery');
	var api = require('js/modules/api');
	var _ = require('underscore');

	var socket_msg = require('js/modules/socket');

	exports.init = function() {
		$('#message-text-area').click(function() {
			$(this).html("");
			$('#message-input-area').slideDown('fast');
			$('#message-input-area #textbox').focus();
			$('#btn-send-message').show();
		});
		$('#message-input-area #textbox').keydown(function() {
			if ($(this).text() != "") $('#btn-send-message').css('background', '#3b9000');
			else $('#btn-send-message').css('background', '#9eca80');
		});
		$('#close').click(function() {
			$("#message-text-area").html("发私信");
			$('#message-input-area #textbox').html("");
			$('#message-input-area').slideUp('fast');
			$('#btn-send-message').hide();
		});


		$('#btn-send-message').click(function() {
			var message = $('#message-input-area #textbox').html();
			var self = $(this);
			var data_post = {
				msg : message,
				to : self.attr('to-user'),
				access_token : api.access_token
			};

			socket_msg.msg_send(data_post, function(data) {
				if (data.code == api.success) {
					var msg = data.data.msg;
					var m = moment(msg.create_at*1000);
                    msg.create_at = m.fromNow();
                    var template = _.template($('#msg-right-template').html(), msg);
                    self.parents('#messages-single').find('#message-list').prepend(template);
                };
			});

			// $.post(api.message_send, {
			// 	msg : message,
			// 	to : self.attr('to-user'),
			// 	access_token : api.access_token
			// }, function(data){
			// 	if (data.code == api.success) {
			// 		var msg = data.data.msg;
			// 		var m = moment(msg.create_at*1000);
   //                  msg.create_at = m.fromNow();
   //                  var template = _.template($('#msg-right-template').html(), msg);
   //                  self.parents('#messages-single').find('#message-list').prepend(template);
   //              };
			// }, 'json');


			return false;
		});
	}
});