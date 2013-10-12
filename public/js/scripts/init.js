seajs.config({
	base: 'http://ta.localhost/',
	alias: {
    	jquery       : 'js/libs/jquery/1.9.1/jquery',
    	backbone     : 'js/libs/backbone/0.9.2/backbone',
    	underscore   : 'js/libs/underscore/1.3.3/underscore',
        json         : 'js/libs/json/1.0.2/json',
        mustache     : 'js/libs/mustache/0.5.0/mustache',
        cufon        : 'js/libs/cufon/cufon',
        dot          : 'js/libs/dot/0.2.0/doT.min.js',
        fileuploader : 'js/plugins/fileupload/3.3.1/jquery.fineuploader-3.3.1.min.js',
    },
    charset: 'utf-8',
    timeout: 20000,
    debug: 0
});

seajs.use('js/scripts/app');