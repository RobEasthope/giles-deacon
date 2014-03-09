module.exports = function(grunt) {
	'use strict';

	grunt.config('watch', {
		css: {
			files: [
				// Source repos
				'<%= cfg.path_source %>/scss/*',
				'<%= cfg.path_source %>/scss/holding-page/*',
				'<%= cfg.path_source %>/scss/quanta/*',
			],
			tasks: [
				'css',
			],
			options: {
				// livereload: true,
			},
		},

		js: {
			files: [
				'<%= cfg.path_source %>/js/*.js',
			],
			tasks: [
				'js'
			],
			options: {
				// livereload: true,
			},
		}
	});

	grunt.loadNpmTasks('grunt-contrib-watch');
}
