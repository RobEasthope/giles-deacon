(function(){
	"use strict";

	var App = function() {
		this.init();
	};

	var p = App.prototype = gd.BaseClass.extend(gd.BaseClass);
	p.BaseClass_init = p.init;

	/*
	 * Public properties
	 */
	p.layout = undefined;
	p.feature = undefined;

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
		this.layout = new gd.Layout();
		this.data = new gd.Data();
	};

	gd.App = App;
}(window));

/*
 * Init app
 */
var app;

$(function() {
	app = new gd.App();
});