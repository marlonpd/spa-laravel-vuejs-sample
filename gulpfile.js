var gulp = require('gulp');
var pug = require('gulp-pug');
var sass = require('gulp-sass');
var minifyCSS = require('gulp-csso');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('css', function(){
    return gulp.src('resources/sass/*.scss')
      .pipe(sass())
      .pipe(minifyCSS())
      .pipe(gulp.dest('public/css'))
});
  
gulp.task('js', function(){
    return gulp.src('resources/js/*.js')
      .pipe(sourcemaps.init())
      .pipe(concat('app.min.js'))
      .pipe(sourcemaps.write())
      .pipe(gulp.dest('public/js'))
});
  

gulp.task('default', gulp.series('css', 'js'));