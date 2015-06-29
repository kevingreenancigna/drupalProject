module.exports = function (grunt) {

    // Load grunt tasks automatically
    require('load-grunt-tasks')(grunt);

    // Time how long tasks take. Can help when optimizing build times
    require('time-grunt')(grunt);

    // Define the configuration for all the tasks
    grunt.initConfig({
		
		// Watch for changes to scss, php and js files. Run compass task and reload page when changes occur 
		watch: {
            src: {
                files: ['**/*.scss', '**/*.php', 'js/*.js'],
                tasks: ['compass:dev']
            },
           	options: {
                livereload: true,
            },
        },
        compass: {
				dev: {
					options: {
						sassDir: 'custom-sass',
						cssDir: 'css',
						javascriptsDir: 'js',
						noLineComments: false,
						outputStyle: 'compressed'
				}
            }
        },

        // The actual grunt server settings - only used to run the mocha and qunit tests
        connect: {
            test: {
                options: {
                    open: false,
                    port: 9001,
					// Change this to '0.0.0.0' to access the server from outside
               		hostname: 'localhost',
                    middleware: function(connect) {
                        return [
                            connect.static('.tmp'),
                            connect.static('test'),
                            connect().use('/bower_components', connect.static('./bower_components'))
                        ];
                    }
                }
            }
        },

        // Mocha testing framework configuration options
        mocha: {
            all: {
                options: {
                    run: true,
                    urls: ['http://<%= connect.test.options.hostname %>:<%= connect.test.options.port %>/index.html']
                }
            }
        },
		
		// Qunit testing framework configuration options
        qunit: {
            all: {
                options: {
                    run: true,
                    urls: ['http://<%= connect.test.options.hostname %>:<%= connect.test.options.port %>/qunit-tests.html']
                }
            }
        },

        // Copies js files into testing directory
        copy: {
            spec: {
                expand: true,
                dot: true,
                cwd: 'js',
                dest: 'test/spec/',
                src: '{,*/}*.js'
            }
        },
    });
	
	grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('test', function (target) {
        if (target !== 'watch') {
            grunt.task.run([
                'copy:spec'
            ]);
        }

        grunt.task.run([
            'connect:test',
            'mocha',
            'qunit'
        ]);
    });
};
