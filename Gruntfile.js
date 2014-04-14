module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    connect: {
      server: {
        options: {
          port: 9001,
        }
      }
    },

    sass: {
      options: {
        includePaths: ['bower_components/foundation/scss']
      },
      dist: {
        options: {
          outputStyle: 'nested'
        },
        files: {
          'css/app.css': 'scss/app.scss'
        }        
      }
    },

    autoprefixer: {
        single_file: {
          options: {
            browsers: ['last 2 version', 'ie 8', 'ie 7']
          },
          src: 'css/app.css',
          dest: 'css/app.css'
        },
      },

    concat: {   
      app: {
        src: [
            'bower_components/jquery/dist/jquery.js', 
            'bower_components/foundation/js/foundation.min.js',
            'js/app.js'
        ],
        dest: 'js/build/app.js',
      }
    },

    uglify: {
       app: {
          files: {
            'js/build/app.min.js': ['js/build/app.js']
          }
        }
    },

    watch: {
      grunt: { files: ['Gruntfile.js'] },

      sass: {
        files: 'scss/**/*.scss',
        tasks: ['sass', 'autoprefixer']
      },

      concat: {
        files: 'js/*.js',
        tasks: ['concat']
      },
      
      options: {
          livereload: true,
        }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('build', ['connect','sass', 'autoprefixer', 'concat', 'uglify']);
  grunt.registerTask('default', ['build','watch']);
}