module.exports = function(grunt) {
	'use strict';

	grunt.config('webfont',{

	});

	grunt.loadNpmTasks('grunt-webfont');
}
		// Compile webfonts
		// ################

		// Compile webfonts task
		// webfont: {
		// 	holding_icons: {
		// 		src: 'static/img/holding-page/*.svg',
		// 		dest: 'static/fonts/holding-page-icons/',
		// 		destCss: 'static/css/_src/holding-page/',
		// 		options: {
		// 				stylesheet: 'scss',
		// 				relativeFontPath: '../fonts/holding-page-icons/',
		// 				font: 'holding_icons',
		// 				htmldemo: false,
		// 				syntax: 'bootstrap',
		// 				styles: 'font,icon,extra'
		// 		}
		// 	}
		// },