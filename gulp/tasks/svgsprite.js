'use strict';

var gulp     = require('gulp'),
settings     = require('../config').sprite,
svgSprite    = require('gulp-svg-sprite'),
config                  = {
    log                 : "debug",
    svg                 : {
        xmlDeclaration  : false,
        doctypeDeclaration : false
    },
    mode                : {
        css            	: {
        	dest				: './cignaNewGlobal',
            bust        : false,
            sprite 			: '../svg/sprite.css.svg',
            render      : {
                scss    : {
                	dest	: 'scss/_sprite.scss'
                }
              }
        }
    },
    example             : true
};

gulp.task( 'svgsprite', function () {
  return gulp.src('**/*.svg', {cwd: './src/svgs'})
    .pipe(svgSprite(config))
    .pipe(gulp.dest('data/drupal7/sites/all/themes/cignaNewGlobal'));
});