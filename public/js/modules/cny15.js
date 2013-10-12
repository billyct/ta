define(function(require, exports, module) {

	var $ = require('jquery');
    var uploader = require('js/modules/uploader.js');
    var api = require('js/modules/api');
    var moment = require('js/plugins/moment');
    var timeline = require('js/modules/timeline');
    var _ = require('underscore');
    require('js/metro/dialog')($);

    exports.init = function() {
        timeline.toolbar($('a#gig-favorite'), api.gig_favorite, {field:'gig_id', attr:'gig-id'}, 'icon-heart-2', 'icon-heart' );
    };

    exports.new = function() {
    	/** 图片上传模块 */
        if ($('#image-cny15-fineuploader')[0]) {
            var file_upload = uploader.images_uploader(
                api.imagetemp_upload,
                '#image-cny15-fineuploader',
                'cny15'
            );
        }

        $('#form-cny15').on('click','#btn-save', function() {
            var self = $(this);
            var form = self.parents('#form-cny15');
            var price = form.find('#price').val();
            var title = form.find('#title').val();
            var description = form.find('#description').val();
            var instructions = form.find('#instructions').val();
            var day_to_complete = form.find('#day_to_complete').val();
            var tags = form.find('#tags').val();
            var images = new Array();

            $.each($('#image-cny15-uploader #image-cny15-uploaded-thumbs img'), function(i,n) {
                images.push($(n).attr('image-id'));
            });

            var cny15_data = {
                price : price,
                title : title,
                description : description,
                instructions : instructions,
                tags : tags,
                images : images,
                day_to_complete: day_to_complete,
                access_token : api.access_token,
                gig_id : self.attr('gig-id')
            };

            $.post(api.gig_save, cny15_data, function(data){
                if (data.code == api.success) {
                    window.location.href = '/cny15/manage';
                };
            }, 'json');

            
            return false;
        });
    }

    exports.manage = function() {
        $('a#activate').click(function() {
            var self = $(this);
            var status = self.parents('.gig').find('#activate-status');
            $.post(api.gig_activate, {
                gig_id : self.attr('gig-id'),
                access_token : api.access_token
            }, function(data){
                if (data.code == api.success) {
                    if (self.attr('data') == 'do') {
                        self.text('下架');
                        self.attr('data', 'undo');
                        status.text('在售中');
                        status.addClass('success');
                    }else {
                        self.text('上架');
                        self.attr('data', 'do');
                        status.text('已下架');
                        status.removeClass('success');
                    }
                };
            },'json');
        });

        $('#cny15-manage a#link-gig-delete').click(function() {
            var self = $(this);
            $.post(api.gig_delete, {
                gig_id : self.attr('gig-id'),
                access_token : api.access_token
            }, function(data) {
                if (data.code == api.success) {
                    self.parents('#cny15-manage').remove();
                };
            },'json');

            return false;
        })

        $('#cny15-edit button#btn-image-added-delete').click(function(){
            var self = $(this);
            $.post(api.gig_deleteimage, {
                gig_id : self.attr('gig-id'),
                image_id : self.attr('image-id'),
                access_token : api.access_token
            }, function(data){
                if (data.code == api.success) {
                    self.parents('#image-added').remove();
                };   
            },'json');
            return false;
        });

        $('#cny15-manage a#add-extra').click(function(){
            var self = $(this);
            $.Dialog({
                'title'       : '添加额外服务',
                'content'     : $('#extra-form-template').html(),
                'draggable'   : true,
                'overlay'     : true,
                'closeButton' : true,
                'position'    : {
                    // 'zone' : 'right',
                    'offsetX' : 450,
                    'offsetY' : 100
                },
                'buttonsAlign': 'right',
                'buttons'     : {
                    '添加'     : {
                        'action': function(){
                            var dialogBox = $('#dialogBox');
                            var title = dialogBox.find('#extra-title').val();
                            var price = dialogBox.find('#extra-price').val();
                            var time = dialogBox.find('#extra-time').val();

                            var data_post = {
                                title : title,
                                price : price,
                                time : time,
                                gig_id : self.attr('gig-id'),
                                access_token : api.access_token
                            };

                            $.post(api.extra_create, data_post, function(data){
                                if (data.code == api.success) {
                                    var template = _.template($('#extra-template').html(), data.data.extra);
                                    self.parents('#cny15-manage').find('#extra-list').prepend(template);
                                };
                            }, 'json');

                            
                        }
                    },
                    '取消'     : {
                        'action': function(){

                        }
                    }
                }
            });

            return false;

        });
    };

    exports.single = function(){

        //购买数量
        for (var i = 2; i <= 8; i++) {
            $('#gig-sum').append('<option value="'+i+'">'+i+'</option>')
        };
        $('#link-show-sum').click(function() {
            $('#gig-sum').toggle();
        });
        

        $('#btn-create-order').click(function() {
            var self = $(this);
            var gig_id = self.attr('gig-id');
            var sum = $('#gig-sum').val();

            $.post(api.order_create, {
                'gig_id' : gig_id,
                'access_token' : api.access_token,
                'sum' : sum,
            }, function(data){
                if (data.code == api.success) {
                    window.location.href = "/cny15/manage/my_buy_order/"+data.data.order_id;
                };
            },'json');


            return false;
        });

        $('input#select-extra').change(function() {
            if ($('input#select-extra:checked').length > 0) {
                var price = 0;
                $('input#select-extra:checked').each(function(){
                    price += parseInt($(this).attr('price'));
                });
                var extra_button = $('#extra-button');
                price += parseInt(extra_button.attr('gig-price'));
                extra_button.show();
                extra_button.find('#btn-create-order-all span').text(price);
                return false;
            };
            $('#extra-button').hide();
        });

        $('button#btn-create-order-all').click(function() {
            var self = $(this);
            var gig_id = self.attr('gig-id');
            var sum = $('#gig-sum').val();
            var extras = new Array;

            $('input#select-extra:checked').each(function(){
                extras.push($(this).val());
            });

            var data_post = {
                'gig_id' : gig_id,
                'access_token' : api.access_token,
                'sum' : 1,
                'extras' : extras
            };

            $.post(api.order_create, data_post, function(data){
                if (data.code == api.success) {
                    window.location.href = "/cny15/manage/my_buy_order/"+data.data.order_id;
                };
            },'json');

            return false;
        });

    };

    exports.profile = function() {

    };



});