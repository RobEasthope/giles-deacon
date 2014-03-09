module.exports = function(grunt) {
	'use strict';

	grunt.config('s3', {
		options: {
			key: '<%= aws.key %>',
			secret: '<%= aws.secret %>',
			bucket: '<%= aws.bucket %>',
			region: '<%= aws.region %>',
			maxOperations: 10,
			access: 'public-read',
		},
		sync: {
			sync: [
				{
					// CSS
					options: { verify: true, gzip: true },
					src: '<%= cfg.path_static %>/css/<%= pkg.name %>-*.css',
					dest: 'static/css/', verify: true, gzip: true
				},{
					// Js
					options: { verify: true, gzip: true },
					src: '<%= cfg.path_static %>/js/<%= pkg.name %>-*.js',
					dest:'static/js/'
				},{
					// Images
					options: { verify: true, gzip: true },
					src: '<%= cfg.path_static %>/img/*',
					dest:'static/img/', verify: true, gzip: true
				},{
					// Font Awesome
					options: { verify: true, gzip: true },
					src: '<%= cfg.path_static %>/font/font-awesome/*',
					dest:'static/font/font-awesome', verify: true, gzip: true
				},{
					// Font Quanta
					options: { verify: true, gzip: true },
					src: '<%= cfg.path_static %>/font/quanta/*',
					dest:'static/font/quanta', verify: true, gzip: true
				},
			]
		},
	});

	grunt.loadNpmTasks('grunt-s3');
}