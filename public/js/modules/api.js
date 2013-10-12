define(function(require, exports, module) {

    var $ = require('jquery');

    exports.access_token = $('#access_token').val();

    exports.success = 1;
    exports.failed = 0;

    var host = 'http://api.localhost/api/';

    exports.end_session = host+'user/endSession';

    // post
    exports.imagetemp_delete = host+'imagetemp/delete';

    // post
    exports.imagetemp_upload = host+'imagetemp/upload';

    //post image_id acess_token
    exports.image_delete = host+'image/delete';

    //post
    exports.timeline_publish = host+'timeline/publish';

    //get
    exports.timelines_public = host+'public/timelines';

    //post
    exports.comment_create = host+'comment/create';

    //post
    exports.timeline_favorite = host+'timeline/favorite';

    //post
    exports.timeline_unfavorite = host+'timeline/unfavorite';

    //post
    exports.timeline_join = host+'timeline/join';

    //post
    exports.timeline_unjoin = host+'timeline/unjoin';

    //post
    exports.gig_save = host+'gig/save';

    //post gig_id access_token
    exports.gig_activate = host+'gig/activate';

    //post gig_id image_id access_token
    exports.gig_deleteimage = host+'gig/deleteimage';

    //post gig_id
    exports.gig_delete = host+'gig/delete';

    //post
    exports.gig_favorite = host+'gig/favorite';

    //post gig_id title price time(nullable) access_token
    exports.extra_create = host+'extra/create';


    //post gig_id sum extra
    exports.order_create = host+'order/create';


    /*私信*/
    //post msg to
    exports.message_send = host+'msg/send';


    


});