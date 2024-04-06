const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const browserSync = require('browser-sync').create();

function styles() {
    return gulp.src('scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('.'))
        .pipe(browserSync.stream());
}

function watch() {
    browserSync.init({
        proxy: "http://atmedical.test/"
    });

    gulp.watch('scss/**/*.scss', styles);
    gulp.watch('./**/*.css').on('change', browserSync.reload);
    gulp.watch('js/*.js').on('change', browserSync.reload);
    gulp.watch('./**/*.php').on('change', browserSync.reload);
}

exports.watch = watch;
