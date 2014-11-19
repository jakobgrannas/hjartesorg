var gulp = require('gulp'),
	rimraf = require('gulp-rimraf'),
	order = require('gulp-order'),
	sass = require('gulp-sass'),
	concat = require('gulp-concat'),
	rename = require('gulp-rename'),
	imagemin = require('gulp-imagemin'),
	minifyCSS = require('gulp-minify-css'),
	uglify = require('gulp-uglify'),
	browserSync = require('browser-sync'),
	reload = browserSync.reload,
    bourbon = require('node-bourbon'),
    gutil = require('gulp-util'),
    autoprefixer = require('gulp-autoprefixer'),
	mainBowerFiles = require('main-bower-files'),
	basePath = './assets',
	paths = {
		scripts:  {
			src: basePath + '/js/*.js',
			dest: basePath + '/dist/js'
		},
		sass: {
			src: basePath + '/sass/**/*.scss',
			dest: basePath + '/dist/css'
		},
		images: {
			src: basePath + '/images/**/*',
			dest: basePath + '/dist/images'
		},
		fonts: {
			src: basePath + '/fonts/**/*',
			dest: basePath + '/dist/fonts'
		},
		bower: {
			src: './bower_components',
			dest: basePath + '/dist/vendor'
		}
	};

gulp.task('browser-sync', function() {
	browserSync({
		server: {
			baseDir: "./"
		}
	});
});

gulp.task('bower-files', function() {
	return gulp.src(mainBowerFiles({
			paths: {
				bowerDirectory: paths.bower.src
			}
		}))
		.pipe(gulp.dest(paths.bower.dest));
});

gulp.task('scripts', function() {
	return gulp.src(paths.scripts.src)
		.pipe(order([
			'!main.js',
			'*.js',
			'main.js'
		]))
		.pipe(concat('scripts.js'))
		.pipe(gulp.dest(paths.scripts.dest))
		.pipe(uglify())
		.pipe(rename({ suffix: '.min' }))
		.pipe(gulp.dest(paths.scripts.dest));
});

gulp.task('sass', function() {
    var atomicPaths = ['utils', 'atoms', 'molecules', 'organisms', 'templates'],
        includePaths = atomicPaths.concat(bourbon.includePaths);

	return gulp.src(paths.sass.src)
		.pipe(sass({
			imagePath: '../images',
			includePaths: includePaths,
			sourceComments: 'map',
			sourceMap: 'sass',
			errLogToConsole: true
		}))
		.pipe(gulp.dest(paths.sass.dest))
        //.pipe(autoprefixer('last 2 version', '> 1%', 'safari 5', 'ie 9', 'opera 12.1', 'ios 6', 'android 4', { cascade: true }))
		.pipe(minifyCSS())
		.pipe(rename({ suffix: '.min' }))
		.pipe(gulp.dest(paths.sass.dest))
		.pipe(reload({stream:true}));
});

gulp.task('images', function() {
	return gulp.src(paths.images.src)
		.pipe(imagemin())
		.pipe(gulp.dest(paths.images.dest));
});

gulp.task('fonts', function() {
	return gulp.src(paths.fonts.src)
		.pipe(gulp.dest(paths.fonts.dest));
});

gulp.task('clean', function() {
	return gulp.src([paths.sass.dest, paths.scripts.dest], {read: false})
		.pipe(rimraf());
});

var changeEvent = function(evt, src) {
    gutil.log('File', gutil.colors.cyan(evt.path.replace(new RegExp('/.*(?=/' + src + ')/'), '')), 'was', gutil.colors.magenta(evt.type));
};

gulp.task('watch', function() {
	gulp.watch(paths.scripts.src, ['scripts']);
	//gulp.watch(paths.images, ['images']);
	gulp.watch(paths.sass.src, ['sass']).on('change', function(evt) {
        changeEvent(evt, 'sass/');
    });
});

gulp.task('default', ['clean'], function() { // browser-sync
	gulp.start('bower-files', 'scripts', 'images', 'fonts', 'sass', 'watch');
});
