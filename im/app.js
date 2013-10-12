var http = require('http');
var config = require('./config').config;
var io = require('socket.io').listen(config.port);
var api = require('./api');


io.sockets.on('connection', function(socket) {

});





var msg = io.of('/msg').on('connection', function(socket) {
	socket.on('join', function(data) {
		api.me(data, function(data) {
			if (data.code == 0) {
				socket.emit('error', data);
				return;
			};
			socket.join(data.id);
		});
    });

    socket.on('send', function(data){
    	api.msg_send(data, function(data) {
    		if (data.code == 0) {
    			socket.emit('error', data);
				return;
    		};
    		var msg = data.data.msg;

    		socket.emit('received-from', data);
    		io.of('/msg').in(msg.to.id).emit('received-to', msg);
    	});
    });

});



var remind = io.of('/remind').on('connection', function(socket) {

})

console.log('have fun');