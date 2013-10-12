define(function(require, exports, module) {

    var $ = require('jquery');
    var qq = require('fileuploader');
    var api = require('js/modules/api');
    var _ = require('underscore');

    exports.images_uploader = function(action_link, file_element_id, type, multiple){

        if ( arguments.length == 3 ){
            multiple = true;
        }
        

        $('#image-'+type+'-uploaded-thumbs').on('click', 'button#btn-image-delete', function(){
            var self = $(this);
            $.post(api.imagetemp_delete, {
                access_token : $('#access_token').val(),
                image_id : self.attr('image-id')
            }, function(data) {
                if (data.code == 1) {
                    self.parents('div.span1').remove();
                    $(file_element_id).show();
                }
            },'json');
            
            return false;
        });

        return new qq.FineUploader({
            element: $(file_element_id)[0],
            multiple : multiple,
            validation: {
                allowedExtensions: ['jpeg', 'jpg', 'png'],
                sizeLimit: 5120000,
            },
            request: {
                endpoint: action_link,
                inputName: 'ta-files',
                params: {access_token:api.access_token}
            },
            text: {
                uploadButton: '<div><i class="icon-upload icon-white"></i>上传图片</div>',
                cancelButton: '取消',
                retryButton: '重试',
                deleteButton: '删除',
                failUpload: '上传失败,可能需要重新登陆',
                dragZone: '拖动图片到此来上传',
                dropProcessing: '正在处理拖拽的图片',
                formatProgress: "{percent}% / {total_size}",
                waitingForResponse: "正在处理..."
            },
            callbacks: {
                onComplete: function(id, name, response) {

                    if (response.success) {
                        $('.qq-upload-success').hide();

                        //使用underscore来进行模板
                        var template = _.template($('#image-uploader-template').html(), response);
                        $('#image-'+type+'-uploaded-thumbs .row').prepend(template);

                        // $('#image-'+type+'-uploaded-thumbs .row').append('<div class="span1">'+
                        //     '<img class="image-uploaded-thumb" image-id="'+response.image.id+'" src="'+response.image.path+'" alt="' + name + '"/>'+
                        //     '<div class="toolbar"><button id="btn-image-delete" image-id="'+response.image.id+'"><i class="icon-cancel-2"></i></button></div></div>'
                        //     );
                    }

                    if (response.success && !multiple) {
                        $(file_element_id).hide();
                    };
                    // console.log(id);
                    // console.log(name);
                    // console.log(response);
                }
            },
            messages: {
                typeError : '{file} 文件的后缀名不是: {extensions}',
                sizeError : '{file} 文件太大了，最大限制: {sizeLimit}.',
                minSizeError : '{file} 文件太小了，最小限制: {minSizeLimit}',
                emptyError : '{file} 文件是空的，请重新选择',
                noFilesError : '没有文件需要上传',
                onLeave : '文件正在上传中，如果离开页面那么上传将被取消'
            }
        });
    }
});