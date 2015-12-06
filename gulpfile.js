var gulp = require('gulp'),
    concat = require('gulp-concat'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps   = require('gulp-sourcemaps'),
    minifyCss = require('gulp-minify-css'),
    imagemin = require('gulp-imagemin'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify');

gulp.task('css', function() {
  return gulp.src([
      './css/font-awesome.min.css',
      './css/lightGallery.css',
      './css/lightSlider.css',
      './css/bootstrap.min.css',
      './css/main.css'
    ])
    .pipe(sourcemaps.init())
    .pipe(minifyCss())
    .pipe(autoprefixer('last 2 versions', 'safari 5', 'ie6', 'ie7', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(concat('main.min.css'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./css'));
});

// minify new images
gulp.task('imagemin', function() {
  return gulp.src('./images/**/*')
    // .pipe(changed(imgDst))
    .pipe(imagemin({
      optimizationLevel: 3,
      progressive: true,
      interlaced: true
    }))
    .pipe(gulp.dest('./images'));
});

// configure the jshint task
gulp.task('jshint', function() {
  return gulp.src([
      './scripts/eddimikovitsch.js',
      '!./scripts/main.min.js'
    ])
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'));
});

gulp.task('build-js', ['jshint'], function() {
  return gulp.src([
      './scripts/jquery-2.1.1.min.js',
      './scripts/jquery.lightSlider.min.js',
      './scripts/lightGallery.min.js',
      './scripts/eddimikovitsch.js'
    ])
    .pipe(sourcemaps.init())
    .pipe(concat('main.min.js'))
    .pipe(uglify())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./scripts'));
});

// configure which files to watch and what tasks to use on file changes
gulp.task('watch', function() {
  gulp.watch([
    './css/**/*.*',
    '!./css/**/main.min.css',
    '!./css/**/main.min.css.map'
    ], ['css']);

  gulp.watch([
      './scripts/**/*.js',
      '!./scripts/**/main.min.js'
    ],['build-js']);
});

gulp.task('default', ['css', 'build-js', 'imagemin'], function() {
  console.log('All Done.');
});
