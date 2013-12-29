'use strict';
module.exports = function(grunt) {

  grunt.initConfig({
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: [
        'Gruntfile.js',
        'assets/js/*.js',
        'assets/js/plugins/*.js',
        '!assets/js/scripts.min.js'
      ]
    },
    less: {
      main: {
        options: {
          // cleancss: true,
          paths: ["assets/less", "bower_components/bootstrap/less"]
        },
        files: {
          "assets/css/main.min.css": "assets/less/main.less"
        }
      }
    },
    uglify: {
      dist: {
        files: {
          'assets/js/scripts.min.js': [
            'bower_components/bootstrap/js/transition.js',
            'bower_components/bootstrap/js/alert.js',
            'bower_components/bootstrap/js/button.js',
            // 'bower_components/bootstrap/js/carousel.js',
            'bower_components/bootstrap/js/collapse.js',
            // 'bower_components/bootstrap/js/dropdown.js',
            // 'bower_components/bootstrap/js/modal.js',
            // 'bower_components/bootstrap/js/tooltip.js',
            // 'bower_components/bootstrap/js/popover.js',
            // 'bower_components/bootstrap/js/scrollspy.js',
            // 'bower_components/bootstrap/js/tab.js',
            // 'bower_components/bootstrap/js/affix.js',
            'assets/js/plugins/*.js',
            'assets/js/_*.js'
          ]
        }
      }
    },
    watch: {
      less: {
        files: [
          'assets/less/*.less',
          'bower_components/**/*.less'
        ],
        tasks: ['less', 'version']
      },
      js: {
        files: [
          '<%= jshint.all %>'
        ],
        tasks: ['jshint', 'uglify', 'version']
      },
      livereload: {
        // Browser live reloading
        // https://github.com/gruntjs/grunt-contrib-watch#live-reloading
        options: {
          spawn: true,
          interrupt: true
          // livereload: false
        },
        files: [
          'assets/css/main.min.css',
          'assets/js/scripts.min.js',
          'templates/*.php',
          '*.php'
        ]
      }
    },
    clean: {
      dist: [
        'assets/css/main.min.css',
        'assets/js/scripts.min.js'
      ]
    }
  });

  // Load tasks
  grunt.loadTasks('tasks');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Register tasks
  grunt.registerTask('default', [
    'clean',
    'less',
    'uglify',
    'version'
  ]);

};
