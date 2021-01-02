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
        // concat: {
        //     options: {
        //         separator: ';',
        //     },
        //     dist: {
        //         src: ['js/jquery.js', 'js/bootstrap.min.js', 'js/plugins.js', 'js/aos.js', 'js/jquery.form.js', 'js/jquery.validate.min.js', 'js/custom.js'],
        //         dest: 'dist/built.js',
        //     },
        // },
        uglify: {
            dist: {
                files: {
                    'dist/combined.min.js': ['js/jquery.js', 'js/bootstrap.min.js', 'js/plugins.js', 'js/aos.js', 'js/jquery.form.js', 'js/jquery.validate.min.js', 'js/custom.js'],
                }
            }
        },
    });

    grunt.loadNpmTasks('grunt-contrib-htmlmin');
    // grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.registerTask('default', ['htmlmin', 'uglify']);
}