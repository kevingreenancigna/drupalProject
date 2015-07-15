// the config file for Gulp tasks
// the majority of settings for inidividual tasks resides here
// there are a couple of tasks where settings are declared right
// inside their resepctive task.js file for one reason or another
// if you're adding a new task, create a new task.js file and set
// the appropriate module export settings appropriately

var dest = './data/drupal7/sites/all/themes/';
var drupalThemeName = 'cignaGlobal';
var drupalThemePath = dest + drupalThemeName;
var src = './src';
var drupalTemplates = dest + drupalThemeName + '/templates';

module.exports = {
  browserSync: {
    proxy: "cignadrupal.dev",
    files: [
      "./data/drupal7/sites/all/themes/cignaGlobal/templates/**/*.php",
      "./data/drupal7/sites/all/themes/cignaGlobal/css/**/*.css"
    ]
  },
  fonts: {
    src: './bower_components/components-font-awesome/fonts/**/*.{ttf,woff,eof,svg}',
    dest: drupalThemePath + '/fonts'
  },
  images: {
    src: src + '/images/**.{png,jpg,jpeg,gif}',
    dest: drupalThemePath + '/images',
    settings: {
      optimizationLevel: 5,
      progressive: true,
      interlaced: true
    }
  },
  sass: {
    src: src + '/scss/**/*.scss',
    dest: dest + drupalThemeName + '/css/',
    settings: {
      imagePath: '../images' // Used by the image-url helper
    }
  },
  markup: {
    src: './templates/**/*.*',
    dest: drupalTemplates
  },
  production: {
    cssSrc: dest + '/*.css',
    jsSrc: dest + '/*.js',
    dest: dest,
    cssSettings: {
      keepSpecialComments: 0
    }
  }
};
