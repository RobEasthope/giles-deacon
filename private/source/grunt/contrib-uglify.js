module.exports = function(grunt) {
	'use strict';
	
	grunt.config('uglify', {
		dist: {
			options: {
				report: 'min',
			},
			files: {
				//Minify Modernizr
				'<%= cfg.path_static %>/js/<%= pkg.name %>-modernizr.js': [
					'<%= cfg.path_source %>/repos/modernizr/modernizr.js'
				],

				// Minify grunt build passed from concat task
				'<%= cfg.path_static %>/js/<%= pkg.name %>.js': [
					
					'<%= cfg.path_source %>/temp/<%= pkg.name %>-build.js'
				],
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-uglify');
}