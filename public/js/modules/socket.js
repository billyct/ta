define(function(require, exports, module) {


	var msg = io.connect('http://127.0.0.1:1337/msg');
	var api = require('js/modules/api');
	var _ = require('underscore');
	var $ = require('jquery');

	exports.init = function() {
		
		msg.emit('join', {'access_token': api.access_token});

		msg.on('error', function(data) {
			console.log(data);
		});
		msg.on('received-to', function(msg){
			var m = moment(msg.create_at*1000);
            msg.create_at = m.fromNow();
            var template = _.template($('#msg-left-template').html(), msg);
            $('#messages-single').find('#message-list').prepend(template);
            notify(msg);
            
		});
	}

	exports.msg_send = function(data, fn) {
		msg.emit('send', data);
		msg.on('received-from', function(data){
			fn(data);
		});
	}
});