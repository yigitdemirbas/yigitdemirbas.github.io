module.exports = function (grunt) {
    grunt.initConfig({
        htmlmin: {                                     // Task
            dist: {                                      // Target
                options: {                                 // Target options
                    removeComments: true,
                    collapseWhitespace: true
                },
                files: {                                   // Dictionary of files
                    'index.html': 'index-unmin.html',     // 'destination': 'source'
                }
            },
        },
        uglify: {
            dist: {
                files: {
                    'dist/combined.min.js': ['js/jquery.js', 'js/bootstrap.min.js', 'js/plugins.js', 'js/aos.js', 'js/jquery.form.js', 'js/jquery.validate.min.js', 'js/custom.js'],
                }
            }
        },
        cssmin : {
            target : {
                src : ['css/animate.min.css', 'css/aos.css', 'css/bootstrap.min.css', 'css/style.css', 'ionicons/css/ionicons.min.css'],
                dest : 'dist/style.min.css'
            },
        },
    });

    grunt.loadNpmTasks('grunt-contrib-htmlmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.registerTask('default', ['htmlmin', 'uglify', 'cssmin']);
}