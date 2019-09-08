var gulp = require('gulp');
var sass = require('gulp-sass');

// Initialize sass task
gulp.task('sass', function() {
    return gulp.src('app/scss/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('app/css'))        
        .pipe(browserSync.reload({
            stream: true
        }))
});

gulp.task('default', ['sass'], function() {
    gulp.watch('app/scss/**/*.scss', ['sass']);
    gulp.watch('app/*.html', browserSync.reload);
    gulp.watch('app/js/**/*.js', browserSync.reload);
})