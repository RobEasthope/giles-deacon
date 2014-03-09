module.exports = function(grunt) {
	'use strict';

	grunt.config('clean', {
		
		// Clean up grunt-copy files
		setup: [
			'<%= cfg.path_static %>/font/font-awesome',
		],

		// Clean up primary JS
		js: [
			'<%= cfg.path_source %>/temp/<%= pkg.name %>*.js',
			'<%= cfg.path_static %>/js/<%= pkg.name %>*.js'
		],

		// Clean up primary CSS
		css: [
			'<%= cfg.path_static %>/css/<%= pkg.name %>*.css',
		],

		temp: [
			'<%= cfg.path_source %>/temp/*',
		],

		sync: [
			'<%= cfg.path_source %>/css/<%= pkg.name %>.css',
			'<%= cfg.path_source %>/js/<%= pkg.name %>.js',
		],
		
		// Clean up icons
		svg_icons: [
			'<%= cfg.path_static %>/fonts/icons',
			'<%= cfg.path_source %>/scss/icons.scss'
		]
	});

	grunt.loadNpmTasks('grunt-contrib-clean');
}