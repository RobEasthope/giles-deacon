module.exports = function(grunt) {
	'use strict';

	grunt.config('concat', {

		options: {
			stripBanners: true,
			seperator: ';'
		},

		js_libraries: {
			src: [
				// Jquery
				'<%= cfg.path_source %>/repos/jquery/jquery.js',

				// Foundation
				'<%= cfg.path_source %>/repos/foundation/js/foundation/foundation.js',
				'<%= cfg.path_source %>/repos/foundation/js/foundation/foundation.abide.js',
				'<%= cfg.path_source %>/repos/foundation/js/foundation/foundation.accordian.js',
				'<%= cfg.path_source %>/repos/foundation/js/foundation/foundation.alert.js',
				'<%= cfg.path_source %>/repos/foundation/js/foundation/foundation.clearing.js',
				'<%= cfg.path_source %>/repos/foundation/js/foundation/foundation.dropdown.js',
				'<%= cfg.path_source %>/repos/foundation/js/foundation/foundation.interchange.js',
				'<%= cfg.path_source %>/repos/foundation/js/foundation/foundation.joyride.js',
				'<%= cfg.path_source %>/repos/foundation/js/foundation/foundation.magellan.js',
				'<%= cfg.path_source %>/repos/foundation/js/foundation/foundation.offcanvas.js',
				'<%= cfg.path_source %>/repos/foundation/js/foundation/foundation.orbit.js',
				'<%= cfg.path_source %>/repos/foundation/js/foundation/foundation.reveal.js',
				'<%= cfg.path_source %>/repos/foundation/js/foundation/foundation.tab.js',
				'<%= cfg.path_source %>/repos/foundation/js/foundation/foundation.tooltip.js',
				'<%= cfg.path_source %>/repos/foundation/js/foundation/foundation.topbar.js',

				// Parsley.js
				// '<%= cfg.path_source %>/repos//parsleyjs/parsley.js',

				// Holding page form validation
				// 'static/js/_src/holding-form-validation.js'

				// Owl Carousel
				// '<%= cfg.path_source %>/repos//owlcarousel/owl-carousel/owl.carousel.js', /* Are we still using this? */

				// Wookmark-Jquery dependencies
				// '<%= cfg.path_source %>/repos//eventEmitter/EventEmitter.js',
				// '<%= cfg.path_source %>/repos//eventie/eventie.js',
				// '<%= cfg.path_source %>/repos//doc-ready/doc-ready.js',
				// '<%= cfg.path_source %>/repos//get-style-property/get-style-property.js',
				// '<%= cfg.path_source %>/repos//get-size/get-size.js',
				// '<%= cfg.path_source %>/repos//jquery-bridget/jquery.bridget.js',
				// '<%= cfg.path_source %>/repos//matches-selector/matches-selector.js',
				// '<%= cfg.path_source %>/repos//outlayer/item.js',
				// '<%= cfg.path_source %>/repos//outlayer/outlayer.js',
				// '<%= cfg.path_source %>/repos//wookmark-jquery/libs/jquery.imagesloaded.js',
				// '<%= cfg.path_source %>/repos//wookmark-jquery/jquery.wookmark.js',
				
				// Holder.js (for prototype images)
				'<%= cfg.path_source %>/repos/holderjs/holder.js',

				// Push menu
				// '<%= cfg.path_source %>/repos//MultiLevelPushMenu/js/classie.js',
				// '<%= cfg.path_source %>/repos//MultiLevelPushMenu/js/mlpushmenu.js',

				// Video
				'<%= cfg.path_source %>/repos/videojs/js',
				'<%= cfg.path_source %>/repos/videojs-youtube/lib/video.js',
				'<%= cfg.path_source %>/repos/videojs-youtube/vjs.youtube.js',
				'<%= cfg.path_source %>/repos/videojs-youtube/src/media.youtube.js'

			],
			dest: '<%= cfg.path_source %>/temp/<%= pkg.name %>-build-libraries.js'
		},

		js_app: {
			src: [
				// App
				'<%= cfg.path_source %>/js/app-baseclass.js',
				'<%= cfg.path_source %>/js/app-layout.js',
				'<%= cfg.path_source %>/js/app-data.js',
				'<%= cfg.path_source %>/js/app.js',
			],
			dest: '<%= cfg.path_source %>/temp/<%= pkg.name %>-build-app.js',
		},

		js_merge: {
			src: [
				// App sandbox
				'<%= cfg.path_source %>/temp/<%= pkg.name %>-build-libraries.js',
				'<%= cfg.path_source %>/temp/<%= pkg.name %>-build-app.js'
			],
			dest: '<%= cfg.path_source %>/temp/<%= pkg.name %>-build.js'
		}

	});

	grunt.loadNpmTasks('grunt-contrib-concat');
}