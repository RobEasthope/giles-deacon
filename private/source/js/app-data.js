(function(){
	"use strict";

	var Data = function() {
		this.init();
	};

	var p = Data.prototype = gd.BaseClass.extend(gd.BaseClass);
	p.BaseClass_init = p.init;

	/*
	 * Public properties
	 */
	p.feature = null;

	p.resizeTimeout;

	Data.SCREEN_TO_CONTENT = [
		{width: 992, items: 40},
		{width: 768, items: 30},
		{width: 480, items: 20},
		{width: 0, items: 10}
	];

	p.numContentPerLoad;

	/* 
	 * Public methods
	 */
	p.init = function() {
		// Super
		this.BaseClass_init();

		// Init
		this.ready();
	};


	p.ready = function() {

		this._initContentToLoad();

	};

	p.updateContentToLoad = function() {	
		
		var pageWidth = $(window).width();

		for (var i = 0; i < Data.SCREEN_TO_CONTENT.length; i++) {
        	if(pageWidth > Data.SCREEN_TO_CONTENT[i].width) {
        		this.numContentPerLoad = Data.SCREEN_TO_CONTENT[i].items;
        		break;
    		}
    	}
	};

	p._initContentToLoad = function() {

		$(window).on('resize', function() {

			clearTimeout(this.resizeTimeout);
			this.resizeTimeout = setTimeout(app.data.updateContentToLoad, 500);

		});
	};

	gd.Data = Data;
}(window));