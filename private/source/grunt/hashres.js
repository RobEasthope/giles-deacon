module.exports = function(grunt) {
	'use strict';

	grunt.config('hashres', {
		options: {
			encoding: 'utf-8',
			fileNameFormat: '${name}-${hash}.${ext}',
			renameFiles: true
		},
		deploy: {
			src: ['<%= cfg.path_static %>/css/<%= pkg.name %>.css','<%= cfg.path_static %>/js/<%= pkg.name %>.js'],
			dest: ['<%= cfg.path_source %>/../app/config/packages/shinobicorp/laravel-stassets/stassets.php'],
		},
	});

	grunt.loadNpmTasks('grunt-hashres');
}