var gulp = require('gulp');
var config       = require('../config').images;
var imageop = require('gulp-image-optimization');

gulp.task('images', function(cb) {
    gulp.src(config.src).pipe(imageop(config.settings))
    .pipe(gulp.dest(config.dest)).on('end', cb).on('error', cb);
});