module.exports = function(grunt) {
	'use strict';

	grunt.config('jshint', {
		options: {
			jshintrc: '.jshintrc'
		},
		all: [
			// 'Gruntfile.js',
			'<%= cfg.path_source %>/temp/<%= pkg.name %>-build.js'
		]
	}),

	grunt.loadNpmTasks('grunt-contrib-jshint');
}