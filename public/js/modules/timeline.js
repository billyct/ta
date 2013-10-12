define(function(require, exports, module) {

	var $ = require('jquery');
    var _ = require('underscore');
    var alert = require('js/plugins/apprise/apprise-1.5.min');
    var uploader = require('js/modules/uploader.js');
    var api = require('js/modules/api');
    var moment = require('js/plugins/moment');
    require('js/plugins/moment_langs')();
    moment.lang('zh-cn');

    var toolbar = function(el, url, obejct_data, icon_class1, icon_class2) {
        el.click(function() {
            var self = $(this);
            var icon_i = self.find('i#icon-i');
            var badge = self.find('span.badge');
            var count = -1;
            if ( badge.length > 0 ) {
                count = parseInt(badge.text());
            }
            var undo_or_do = self.attr('data');

            var data_post = {
                access_token: api.access_token 
            };
            data_post[obejct_data['field']] = self.attr(obejct_data['attr'])

            
            $.post(url, data_post, function(data){
                if (data.code == api.success) {
                    icon_i.toggleClass(icon_class1);
                    icon_i.toggleClass(icon_class2);
                    if (undo_or_do == 'undo') {
                        if (count>0) {
                            badge.text(count-1);
                        };
                        self.attr('data', 'do');
                    }else {
                        if (count < 0) {
                            count = 0;
                            self.append('<span class="badge"></span>');
                            badge = self.find('span.badge');
                        };
                        badge.text(count+1);
                        self.attr('data', 'undo');
                    }
                } else {
                    alert.apprise(data.msg, {'animate': true, 'textOk': '确定'});
                }
            },'json');

            return false;
        });
    };

    exports.toolbar = toolbar;


    exports.init = function(){


        toolbar($('a#favorite'), api.timeline_favorite, {field:'timeline_id', attr:'timeline-id'}, 'icon-heart-2', 'icon-heart');
        toolbar($('a#join'), api.timeline_join, {field:'timeline_id', attr:'timeline-id'}, 'icon-bookmark-2', 'icon-bookmark');


        // $('.toolbar a').hover(function() {
        //     var self = $(this);
        //     self.find('i#icon-i').toggle();
        //     self.find('i#word-i').toggle();     
        // });

        $('.timeline .toolbar').on('click', 'i#comments', function() {
            console.log('too');
        });

	};

    exports.single = function() {

        $('#form-comment').on('click', '#btn-leavemsg', function() {

            var self = $(this);
            var form_comment = self.parents('#form-comment');
            var content = form_comment.find('#textarea-content').val();
            var timeline_id = self.attr('timeline-id');

            var image = $('#image-comment-uploader #image-comment-uploaded-thumbs img').attr('image-id');

            $.post(api.comment_create, {
                content: content,
                timeline_id: timeline_id,
                access_token: api.access_token,
                image: image
            }, function(data){
                if (data.code == api.success) {
                    var comment = data.data.comment;
                    //将数字修改为时间
                    var m = moment(comment.create_at*1000);
                    comment.create_at = m.fromNow();
                    //使用underscore来进行模板
                    var template = _.template($('#comment-template').html(), data.data.comment);
                    $('#comment-list').prepend(template);

                    form_comment.find('#textarea-content').val('');
                    $('#image-comment-uploader').hide();
                    $('#image-comment-uploaded-thumbs .row').empty();
                };
            },'json');


            return false;
        });

        /** 图片上传模块 */
        if ($('#image-comment-fineuploader')[0]) {
            var file_upload = uploader.images_uploader(
                api.imagetemp_upload,
                '#image-comment-fineuploader',
                'comment',
                false
            );
        }

        $('#form-comment').on('click', '#btn-comment-picture', function(e) {
            e.stopPropagation();
            var self = $(this);
            var left = self.offset().left;
            var top = self.offset().top;
            console.log(left);
            console.log(top);
            $('#image-comment-uploader').css({top: top-110});
            $('#image-comment-uploader').toggle();
            return false;
        });
    }

});