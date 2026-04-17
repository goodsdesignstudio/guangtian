var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync');
var babel = require("gulp-babel");
var plumber = require('gulp-plumber');




function sync(cb) {
  browserSync.init({
    proxy: "localhost/guangtian",
    port: 5000,
  });

  gulp.watch('sass/*.scss', style);
  gulp.watch('src/**/*.js', gulp.series(reload, js));

  browserSync.watch(['**/*.html', '**/*.php', '**/language/*.php', '**/cms/**', 'views/**']).on('change', browserSync.reload);

  cb()
}


function reload(cb) {
  browserSync.reload();
  cb();
}


function js(cb) {
  return gulp.src('src/*.js')
    .pipe(plumber())
    .pipe(babel())
    .pipe(gulp.dest('dist'))
    .pipe(browserSync.reload({stream:true}));

  cb()
}


function style(cb) {
  return gulp.src('sass/*.scss')
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass({
        includePaths: ['node_modules/foundation-sites/scss'],
        outputStyle: 'compressed'
    }).on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: [
        'last 2 versions', 'ie >= 9', 'and_chr >= 2.3'
      ],
      cascade: false
    }))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('stylesheets'))
    .pipe(browserSync.reload({stream:true}));

  cb()
}


exports.js = js
exports.style = style

exports.default = gulp.series(style, js, sync);