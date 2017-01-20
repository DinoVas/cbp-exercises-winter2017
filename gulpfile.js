var gulp = require('gulp');
var browserSync = require('browser-sync').create();

gulp.task('default', function(){
    browserSync.init({
        server: {
            baseDir: './'
        },
        files: ['**/**.css', '*.html']
    });
});


	/*	browserSync.init({
			proxy:{
				target:"hhttp://www.cbp-exercses.local",
			}
		})
		open: 'external'
		host:'http://www.cbp-exercses.local'
		port:3000,*

		 */