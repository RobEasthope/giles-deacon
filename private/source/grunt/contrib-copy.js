module.exports = function(grunt) {
	'use strict';

	grunt.config('copy', {
		// Grunt Copy: Copy specific repos files to public dir
		setup: {
			files: [
				{
					
					/* Stassets */
					expand: true,
					src: '<%= cfg.path_source %>../app/config/packages/shinobicorp/laravel-stassets/stassets-default.php',
					dest: '<%= cfg.path_source %>../app/config/packages/shinobicorp/laravel-stassets/stassets.php',
				},{

					/* Font Awesome */
					expand: true,
					src: '<%= cfg.path_source %>/repos/font-awesome/fonts/*',
					dest: '<%= cfg.path_static %>/font/font-awesome/',
					filter: 'isFile',
					flatten: true
				},{
					/* Video.js */
					expand: true,
					src: '<%= cfg.path_source %>/repos/videojs-youtube/**',
					dest: '<%= cfg.path_static %>/repos/videojs-youtube',
					filter: 'isFile'
				}
			]
		},
		deploy: {
			files: [{
				src: 'private/app/config/packages/shinobicorp/laravel-stassets/stassets-default.php',
				dest: 'private/app/config/packages/shinobicorp/laravel-stassets/stassets.php',
			}]
		}
	})

	grunt.loadNpmTasks('grunt-contrib-copy');
}