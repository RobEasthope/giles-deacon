module.exports = function(grunt) {
	'use strict';

	grunt.config('notify_hooks', {
		// Grunt Notify options
		options: {
			enabled: true,
			// max_jshint_notifications: 5, // maximum number of notifications from jshint output
			title: "GILES" // defaults to the name in package.json, or uses project's directory name, you can change to the name of your project
		}
	});

	grunt.config('notify', {
		// Package setup
		setup: {
			options: {
				title: 'GILES: Package setup',
				message: 'Package setup complete',
			}
		},

		// Full grunt compile
		standard: {
			options: {
				title: 'GILES: Grunt',
				message: 'Standard Grunt compile complete',
			}
		},

		// JS completion
		watchjs_src: {
			options: {
				title: 'GILES: Grunt Watch',
				message: 'JS compile complete',
			}
		},

		// CSS completion
		watchcss_src: {
			options: {
				title: 'GILES: Grunt Watch',
				message: 'CSS compile complete',
			}
		},

		// Grunt deploy
		deploy: {
			options: {
				title: 'GILES: Grunt deployment task ',
				message: 'Pre-deployment task complete. God speed',
			}
		},
	});

	grunt.loadNpmTasks('grunt-notify');
}