module.exports = function(grunt) {
	'use strict';

	var globalConfig = {
		path_source: 'private/source',
		path_static: 'web/static',
	};

	grunt.initConfig({
		aws: grunt.file.readJSON('../_keys/aws-giles-deacon.json'),
		pkg: grunt.file.readJSON('package.json'),
		cfg: globalConfig,
	});

	// Load Grunt tasks
	grunt.loadTasks(globalConfig.path_source + '/grunt');


	// Default grunt compile
	grunt.registerTask('default', [
		'setup',
		'js',
		'css',
		'cleanup',
		
		// 'notify:standard' // -- not working from vagrant, consider dropping
	]);

	grunt.registerTask('js', [
		'clean:js',
		'concat:js_app',
		'jshint',
		'concat:js_libraries',
		'concat:js_merge',
		'uglify',
	]);

	grunt.registerTask('css', [
		'clean:css',
		'sass:development',
	]);

	// Copy bower components to /static dir
	grunt.registerTask('setup', [
		'clean:setup',
		'copy:setup',
		// 'notify:setup' // -- not working from vagrant, consider dropping
	]);

	grunt.registerTask('cleanup', [
		'clean:temp'
	]);

	// Update bower components
	grunt.registerTask('video', [
		'responsive_videos:compile'
	]);

	// Create and update font icons
	grunt.registerTask('svg_icons', [
		'clean:svg_icons',
		'webfont:svg_icons',
		// 'notify:bower' // -- not working from vagrant, consider dropping
	]);

	grunt.registerTask('sync', [
		's3:sync',
	]);

	// Pre-deployment task (runs everything and hashes CSS & JS)
	grunt.registerTask('deploy', [
		'setup',
		'js',
		'sass:production',
		'hashres', // -- Not ready/tested yet
		's3:sync', // -- Not ready/tested yet
		'cleanup',
		// 'notify:deploy' // -- not working from vagrant, consider dropping
	]);

	// Pulls in Grunt-notify variables
	// grunt.task.run('notify_hooks'); // -- not working from vagrant, consider dropping
};