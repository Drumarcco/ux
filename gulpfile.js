var gulp = require('gulp'),
    browserSync = require('browser-sync'),
    reload = browserSync.reload,
    sass = require('gulp-sass');

gulp.task('serve', function() {
    browserSync.init({
        proxy: '192.168.33.10/wordpress'
    });

    gulp.watch('./sass/**/*.scss', ['sass']);
    gulp.watch('./*.php').on('change', browserSync.reload);
});

gulp.task('sass', function() {
    return gulp.src('./sass/*.scss')
        .pipe(sass())
        .pipe(gulp.dest("./"))
        .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);