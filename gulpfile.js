var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var notify = require('gulp-notify');
var plumber = require('gulp-plumber');
var php = require('gulp-connect-php');
// var haml = require('gulp-ruby-haml');
var browserSync = require('browser-sync');
var del = require('del');
// var cache = require('gulp-cached');

gulp.task('php', function() {
	php.server({base: './', port: 8010, keepalive: true});
});
gulp.task('styles',function() {
	// Compiles CSS
	return gulp.src('./src/css/**/*.scss')
		// .pipe(plumber())
		.pipe(sourcemaps.init())
		.pipe(sass.sync({outputStyle: 'expanded', }).on('error', handleErrors))
		.pipe(autoprefixer())
		.pipe(sourcemaps.write())
		.pipe(gulp.dest('css/'))
		.pipe(browserSync.reload({stream:true}));
});

gulp.task('images',function(){
	return gulp.src('./src/img/**')
		.pipe(gulp.dest('./img/'));
});
gulp.task('js',function(){
	return gulp.src('./src/js/**')
		.pipe(gulp.dest('./js/'));
});
gulp.task('html',function(){
	return gulp.src(['./src/*.html', './src/*.php'])
		.pipe(gulp.dest('./'));
});

function handleErrors(e) {
	var args = Array.prototype.slice.call(arguments);
	// console.log(e);
	// console.log(args);

	notify.onError({
		title: 'Compile Error',
		message: '<%= error.message %>'
	}).apply(this, args);
	this.emit('end'); // Keep gulp from hanging on this task
}

// gulp.task('fonts', function() {
// 	return gulp.src(require('main-bower-files')('**/*.{eot,svg,ttf,woff,woff2}', () => {})
// 		.concat('app/fonts/**/*'))
// 		.pipe($.if(dev, gulp.dest('.tmp/fonts'), gulp.dest('dist/fonts')));
// });


gulp.task('clean', del.bind(null, ['css', 'img', 'js', './*.html', './*.php']));
/*
	Browser Sync
*/
gulp.task('browser-sync', ['php'], function() {
	browserSync.init({
		// we need to disable clicks and forms for when we test multiple rooms
		proxy: '127.0.0.1:8010',
		// server: {
		// 	baseDir: './', // ./build/
		// },
		open: false,
		// notify: false,
		// proxy : "localhost:4567",
		ghostMode: false
	});
});
gulp.task('default', ['styles', 'images', 'html', 'js', 'browser-sync'], function(){
	gulp.watch("src/css/*.scss", ['styles']);
	gulp.watch("src/img/*", ['images']);
	gulp.watch("src/js/*", ['js']);
	gulp.watch("src/*.html", ['html']);
	gulp.watch("src/*.php", ['html']);
	gulp.watch("./*.php").on('change', browserSync.reload);
	gulp.watch("./js/*.js").on('change', browserSync.reload);
	gulp.watch("./img/**").on('change', browserSync.reload);
	gulp.watch("./*.html").on('change', browserSync.reload);
});




