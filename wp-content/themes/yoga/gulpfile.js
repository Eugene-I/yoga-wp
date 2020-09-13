var gulp 		= require('gulp'),
	sass 		= require('gulp-sass'),
	browserSync = require('browser-sync'),
	sourcemaps	= require('gulp-sourcemaps'),
	run 		= require('run-sequence'),
	plumber 	= require('gulp-plumber'),
	autoprefixer = require('gulp-autoprefixer'),
	csscomb 	= require('gulp-csscomb'),
	gcmq 		= require('gulp-group-css-media-queries'),

	PATH = {
		src: './assets/',
		dist: './'
	}


gulp.task('sass', function(){
	gulp.src(PATH.src + '/scss/**/*.scss')
		.pipe(plumber())
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(PATH.dist))
});

gulp.task('sassPretty', function(){
	gulp.src(PATH.src + '/scss/**/*.scss')
		.pipe(plumber())
		.pipe(sass().on('error', sass.logError))
		// .pipe(gcmq('.csscomb.json'))
		.pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: true
		}))
		.pipe(csscomb())
		.pipe(gulp.dest(PATH.dist))
});

gulp.task('build', function(){
	run(
		'sass');
});

gulp.task('done', function(){
	run(
		'sassPretty');
});

gulp.task('default', ['build'], function() {
	gulp.watch(PATH.src + '/scss/**/*.scss', ['sass']);
});