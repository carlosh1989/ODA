var gulp = require('gulp');
var connect = require('gulp-connect-php');

var cors = function (req, res, next) {
  res.setHeader('Access-Control-Allow-Origin', '*');
  res.setHeader('Access-Control-Allow-Headers', 'headers_you_want_to_accept');
  next();
};

gulp.task('server:test', function () {
  connect.server({
    root: 'assets',
    livereload: true,
    port: 9000,
    middleware: function () {
      return [cors];
    }
  });
});