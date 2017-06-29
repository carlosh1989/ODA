var gulp = require('gulp');
var phpJade = require('gulp-jade-for-php');
gulp.task('jade-php', function() {
  gulp.src('../**/*.jade')
    .pipe(phpJade())
    .pipe(gulp.dest('../'));
});