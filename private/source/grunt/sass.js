module.exports = function(grunt) {
	'use strict';

	grunt.config('sass', {
		options: {
			includePaths: [
				'<%= cfg.path_source %>/repos/foundation/scss',
				'<%= cfg.path_source %>/scss',
			]
		},
		development: {
			options: {
				outputStyle: 'compressed'
			},
			files: {
				'<%= cfg.path_static %>/css/<%= pkg.name %>.css': '<%= cfg.path_source %>/scss/<%= pkg.name %>-development.scss'
			}
		},

		deploy: {
			options: {
				outputStyle: 'compressed'
			},
			files: {
				'<%= cfg.path_static %>/css/<%= pkg.name %>.css': '<%= cfg.path_source %>/scss/<%= pkg.name %>-production.scss'
			}
		}
	});

	grunt.loadNpmTasks('grunt-sass');
}