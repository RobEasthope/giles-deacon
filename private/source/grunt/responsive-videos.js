module.exports = function(grunt) {
	'use strict';
		
	grunt.config('responsive_videos', {
		compile: {
			options: {
				sizes: [{
					width: 320,
					poster: true
				}],
				encodes:[{
					webm: [
						{'-vcodec': 'libvpx'},
						{'-acodec': 'libvorbis'},
						{'-crf': '12'},
						{'-b:v': '1.5M',},
						{'-q:a': '100'}
					]
				}]
			},
			files: [{
				expand: true,
				src: ['<%= cfg.path_source %>/video/**.{mov,mp4}'],
				// cwd: '<%= cfg.path_source %>/video/**.{mov,mp4}',
				dest: '<%= cfg.path_static %>/video/'
			}]
		}
	});

	grunt.loadNpmTasks('grunt-responsive-videos');
}