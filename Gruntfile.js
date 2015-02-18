module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        clean: {
            build: {
                src: [ '_build' ]
            }
        },
        copy: {
            build: {
                src: [
                    '**',
                    '!**/tests/**',
                    '!**/node_modules/**',
                    '!**/sass/**',
                    '!**/src/**',
                    '!**/tools/**',
                    '!**/.sass-cache/**',
                    '!**/assets/**',
                    '!**/js/lib/**',
                    '!config.rb',
                    '!Gruntfile.js',
                    '!package.json',
                    '!phpunit.xml.dist',
                    '!files',
                    '!wp-tests-config.php',
                    '!_NOTES.txt'
                ],
                dot: [
                    '.htaccess'
                ],
                dest: '_build',
                expand: true
            }
        },
        // Concat JS
        concat: {
            dist: {
                src: [
                    'js/lib/no-conflict/no-conflict.js',
                    'js/lib/skip-navigation/skip-navigation.js'
                ],
                dest: 'js/lib/main.js',
            },
            ie: {
                src: [
                    'js/lib/html5shiv/html5shiv.js',
                    'js/lib/respond/respond.js',
                ],
                dest: 'js/lib/ie.js',
            }
        },
        jshint: {
            jshint: {
                beforeconcat: ['lib/skip-navigation/skip-navigation.js'],
                afterconcat: ['lib/main.js']
            }
        },
        // Uglify
        uglify: {
            options: {
                mangle: false,
                compress: true,
            },
            build: {
                files: {
                    'js/main.min.js': ['js/lib/main.js']
                }
            },
            ie: {
                files: {
                    'js/ie.min.js': ['js/lib/ie.js']
                }
            }
        },
        // Sass/Compass
        compass: {
            dist: {
                options: {
                    config: 'config.rb',
                }
            }
        },
        // CSSMin
        /*
        cssmin: {
            compress: {
                files: {
                    'style.css' : ['style.css'],
                }
            }
        },
        */
        // Watch
        watch: {
            options: {
                livereload: true,
            },
            scripts: {
                files: ['js/**/*.js'],
                tasks: ['jshint', 'concat', 'uglify'],
                options: {
                    spawn: false,
                },
            },
            css: {
              files: ['sass/**/*.scss'],
              tasks: ['compass', /*'cssmin',*/],
            }
        }
    });

    // clean
    grunt.loadNpmTasks('grunt-contrib-clean');
    // copy
    grunt.loadNpmTasks('grunt-contrib-copy');
    // Concat
    grunt.loadNpmTasks('grunt-contrib-concat');
    // Uglify
    grunt.loadNpmTasks('grunt-contrib-uglify');
    // Watch
    grunt.loadNpmTasks('grunt-contrib-watch');
    // Sass
    grunt.loadNpmTasks('grunt-contrib-sass');
    // Compass
    grunt.loadNpmTasks('grunt-contrib-compass');
    // CSSmin
    /*grunt.loadNpmTasks('grunt-contrib-cssmin');*/
    // JShint
    grunt.loadNpmTasks('grunt-contrib-jshint');

    // Register Plugins
    grunt.registerTask('default', ['concat', 'uglify', 'watch', 'compass', /*'cssmin',*/ 'jshint']);

    grunt.registerTask('build', ['clean', 'copy']);

};