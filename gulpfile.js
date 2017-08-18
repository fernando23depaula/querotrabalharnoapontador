var gulp = require('gulp');
var sass = require('gulp-sass');
sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();
var concat = require('gulp-concat');
var changed = require('gulp-changed');
var imagemin = require('gulp-imagemin');

var config = {  
  sass_url:'./sass/**/*.scss',
  imagens : './images/**/*',
  css_url : './www/css',
  imagens_prod : './www/img'
};

gulp.task('default',['sass','watch','imagemin']);

gulp.task('browserSync', function() {  
  browserSync.init({
    server: {
      baseDir: './',
    },
    port: 8080,
    startPath: './www/index.php',
  });
});


gulp.task('imagemin', function() {
   imgSrc = config.imagens+'*.+(png|jpg|gif)',
   imgDst = config.imagens_prod;
   
   gulp.src(imgSrc)
   .pipe(imagemin())
   .pipe(gulp.dest(imgDst));
});


gulp.task('sass', function(){  
  return gulp.src(config.sass_url)
    .pipe(sourcemaps.init())
    .pipe(sass({
      outputStyle: 'compressed'
    }).on('error', sass.logError)) // Using gulp-sass
    .pipe(concat('style.min.css'))
    .pipe(sourcemaps.write('./'))
    
    .pipe(gulp.dest(config.css_url))
    .pipe(browserSync.reload({
      stream: true
    }));
});

gulp.task('watch', ['browserSync'], function() {  
    gulp.watch(config.sass_url, ['sass']).on('change', browserSync.reload);
    gulp.watch(config.imagens,['imagemin']);
    gulp.watch("./www/*.html").on('change', browserSync.reload);
});