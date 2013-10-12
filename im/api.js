
var host = 'http://api.localhost/api/';
var api = {
	me : host+'user/me',
	msg_send : host+'msg/send'
};


exports.me = function(data, fn) {
	get(api.me, data, fn);
}

exports.msg_send = function(data, fn) {
	post(api.msg_send, data, fn);
}


function post(url,data,fn) {
	data=data||{};
	var content=require('querystring').stringify(data);
	var parse_u=require('url').parse(url,true);
	var isHttp=parse_u.protocol=='http:';
	var options={
	    host:parse_u.hostname,
	    port:parse_u.port||(isHttp?80:443),
	    path:parse_u.path,
	    method:'POST',
	    headers:{
	    	'Content-Type':'application/x-www-form-urlencoded',
	        'Content-Length':content.length
	    }
	};
	var req = require(isHttp?'http':'https').request(options,function(res){
	    var _data='';
	    res.on('data', function(chunk){
	        _data += chunk;
	    });
	    res.on('end', function(){
	    	_data = JSON.parse(_data);
	        fn!=undefined && fn(_data);
	    });
	});
	req.write(content);
	req.end();
}

function get(url, data, fn) {
	data = data || {};
	var content=require('querystring').stringify(data);
	var parse_u=require('url').parse(url,true);
	var isHttp=parse_u.protocol=='http:';
	var options={
	    host:parse_u.hostname,
	    port:parse_u.port||(isHttp?80:443),
	    path:parse_u.path+'?'+content
	};
	var req = require(isHttp?'http':'https').get(options, function(res){
		var _data='';
	    res.on('data', function(chunk){
	        _data += chunk;
	    });
	    res.on('end', function(){
	    	_data = JSON.parse(_data);
	        fn!=undefined && fn(_data);
	    });
	});
	req.end();
}