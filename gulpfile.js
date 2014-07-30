var gulp = require('gulp'),
	rimraf = require('gulp-rimraf'),
	order = require('gulp-order'),
	sass = require('gulp-sass'),
	concat = require('gulp-concat'),
	rename = require('gulp-rename'),
	imagemin = require('gulp-imagemin'),
	minifyCSS = require('gulp-minify-css'),
	uglify = require('gulp-uglify'),
    bourbon = require('node-bourbon'),
    gutil = require('gulp-util'),
    autoprefixer = require('gulp-autoprefixer'),
	paths = {
		scripts: './js/*.js',
		sass: {
			src: './sass/**/*.scss',
			dest: './dist/css/'
		},
		images: './images/**/*',
		fonts: './fonts/**/*'
	};

gulp.task('scripts', function() {
	return gulp.src(paths.scripts)
		.pipe(order([
			'*.js',
			'main.js'
		]))
		.pipe(concat('scripts.js'))
		.pipe(gulp.dest('./dist/js/'))
		.pipe(uglify())
		.pipe(rename(function(path) {
			path.extname = '.min.js';
		}))
		.pipe(gulp.dest('./dist/js/'));
});

gulp.task('sass', function() {
	return gulp.src(paths.sass.src)
		.pipe(sass({
			imagePath: '../images',
			includePaths:  bourbon.with('utils', 'atoms', 'molecules', 'organisms', 'templates')
		}))
		.pipe(gulp.dest(paths.sass.dest))
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
		.pipe(minifyCSS())
		.pipe(rename({ suffix: 'min' }))
		.pipe(gulp.dest(paths.sass.dest));
});

gulp.task('images', function() {
	return gulp.src(paths.images)
		.pipe(imagemin())
		.pipe(gulp.dest('./dist/images/'));
});

gulp.task('fonts', function() {
	return gulp.src(paths.fonts)
		.pipe(gulp.dest('./dist/fonts/'));
});

gulp.task('clean', function() {
	return gulp.src(['dist/css', 'dist/js'], {read: false})
		.pipe(rimraf());
});

var changeEvent = function(evt, src) {
    gutil.log('File', gutil.colors.cyan(evt.path.replace(new RegExp('/.*(?=/' + src + ')/'), '')), 'was', gutil.colors.magenta(evt.type));
};

gulp.task('watch', function() {
	//gulp.watch(paths.scripts, ['scripts']);
	//gulp.watch(paths.images, ['images']);
	gulp.watch(paths.sass.src, ['sass']).on('change', function(evt) {
        changeEvent(evt, 'sass/');
    });
});

gulp.task('default', ['clean'], function() {
	gulp.start('scripts', 'images', 'fonts', 'sass');
});
