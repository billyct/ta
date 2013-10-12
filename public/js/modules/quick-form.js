define(function(require, exports, module) {

	var $ = require('jquery');
    var uploader = require('js/modules/uploader.js');
    var api = require('js/modules/api');
    var moment = require('js/plugins/moment');

    exports.init = function(){

	    /** 图片上传模块 */
	    if ($('#image-timeline-fineuploader')[0]) {
	        var file_upload = uploader.images_uploader(
	            api.imagetemp_upload,
	            '#image-timeline-fineuploader',
	            'timeline'
	        );
	    }
	    
	    /** 单击快速发布事件弹出timeline发布框 */
	    $('#link-quick-publish').click(function(e){
	        e.stopPropagation();
	        var self = $(this);
	        var left = self.offset().left;
	        var top = self.offset().top;

	        $('#quick-form').css({top: top+25, left: (left-335)/document.body.clientWidth*100+"%"});
	        $('#quick-form').toggle();
	    });


	    /** 单击发布图片事件跳出图片上传框*/
	    $('#btn-timeline-picture').click(function(){
	        $('#image-timeline-uploader').toggle();
	        return false;
	    });

	    /** 单击非快速发布框时候隐藏发布框*/
	    $(document).click(function(e) {
	        var clickedNode = e.target;
	        if ($(clickedNode).parents('#quick-form').length <= 0 && $('#quick-form').is(':visible')) { 
	            $('#quick-form').hide();
	        }
	    });

	    /** 取消截止日期的按钮和发布图片按钮跳转事件*/
	    $('#btn-date, #btn-timeline-picture').click(function(){
	        return false;
	    });

	    $('#textarea-content').keydown(function() {
	    	if ($(this).text() != "") $('#btn-publish').attr('disabled', 'disabled');
	    	$('#btn-publish').removeAttr('disabled');
	    });

	    /** 发布timeline按钮事件*/
	    $('#btn-publish').click(function() {
	    	var self = $(this);
	    	self.attr('disabled', 'disabled');
	    	var content = $('#textarea-content').val();
	    	var deadline = $('#input-deadline').val();
			deadline = moment(deadline, "YYYY年MM月DD日");
			deadline = deadline.unix()+24*60*60-1;

	    	var images = new Array();

	    	$.each($('#image-timeline-uploader #image-timeline-uploaded-thumbs img'), function(i,n) {
	    		images.push($(n).attr('image-id'));
	    	});

	    	$.post(api.timeline_publish, {
	    		content : content,
	    		deadline : deadline,
	    		images : images,
	    		access_token : api.access_token
	    	}, function(data){

	    		if (data.code == api.success) {
	    			
	    			$('#textarea-content').val('');
	    			$('#image-timeline-uploaded-thumbs .row').empty();
	    		};
	    	},'json');

	    	return false;

	    });
	}

});