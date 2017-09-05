var gulp = require('gulp');
var sync = require('browser-sync').create();

var sass = require('gulp-sass');

gulp.task('sass', function() {
    return gulp.src("css/sass/app.scss")
        .pipe(sass())
        .pipe(gulp.dest("css/"))
        .pipe(sync.stream());

});

gulp.task('serve', function() {
    sync.init({
        proxy: "http://localhost/EBD/BACKOFFICE/public"
    });
    gulp.watch("*.php").on('change', sync.reload);
    gulp.watch("../resources/views/*.php").on('change', sync.reload);
    gulp.watch("css/*.css").on('change', sync.reload);
    gulp.watch("js/*.js").on('change', sync.reload);
    gulp.watch("js/angular/*.js").on('change', sync.reload);
    gulp.watch("css/sass/*.scss", ['sass']);

});

gulp.task('default', ['serve']);


