
"use strict";

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var rev = require('gulp-rev-append');   //cashing
var plumber = require('gulp-plumber');
var uglify = require('gulp-uglify');
var minifyCss = require('gulp-minify-css');
var uncss = require('gulp-uncss');
var php = require('gulp-connect-php');
var browserSync = require('browser-sync');

gulp.task('php', function() {
    php.server({ base: 'build', port: 8010, keepalive: true});
});
gulp.task('browser-sync',['php', 'styles', 'scripts'], function() {
    browserSync.init({
        proxy: '127.0.0.1:8010',
        port: 8080,
        open: true,
        notify: false
    });
});


gulp.task('uncss', function () {
    return gulp.src('./build/css/main.css')
        .pipe(uncss({
            html: ['./build/index.php']
        }))
        .pipe(minifyCss({compatibility: 'ie8'}))
        .pipe(gulp.dest('./build/css/'));
});

gulp.task('styles', function () {
  gulp.src('./src/sass/main.scss')
    .pipe(sourcemaps.init())
      .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(plumber())
    .pipe(gulp.dest('./build/css/'));

});

gulp.task('scripts', function() {
  return gulp.src(['./src/js/*.js'])
    .pipe(plumber())
    .pipe(uglify())
    .pipe(gulp.dest('./build/js/'));

});

gulp.task('rev', function() {
  gulp.src('./build/index.html')
    .pipe(rev())
    .pipe(gulp.dest('./build/'));
});


gulp.task('watch', function() {
  gulp.watch('./src/sass/**/*.*', ['styles']);
  gulp.watch(['./src/js/functions.js'], ['scripts']);
  gulp.watch("./build/*.php");
});

// gulp.task('builder', ['styles', 'scripts', 'uncss', 'rev']);

gulp.task('default', ['browser-sync',  'watch']);
