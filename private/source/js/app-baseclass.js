this.gd = this.gd||{};

(function(){
	"use strict";

	var BaseClass = function() {
		this.init();
	};

	var p = BaseClass.prototype;

	/*
	 * Public properties
	 */

	/*
	 * Protected properties
	 */
	p._this = undefined;
	p._id = undefined;
	p._name = undefined;

	/*
	 * Static methods
	 */
	BaseClass.extend = function(object) {
		if (typeof Object.create === 'function') {
			return Object.create(object.prototype);
		} else {
			Object.create = function (object) {
				function F() {}
				F.prototype = object;
				return new F();
			};
		}
	};

	/*
	 * Public methods
	 */
	p.init = function() {
		this._id = ~~(Math.random() * 100000000);
		this._name = '';
		this._this = this;
	};

	p.getId = function() {
		return this._id;
	};

	p.getName = function() {
		return this._name;
	};

	p.setName = function(value) {
		this._name = value;
	};

	/*
	 * Protected methods
	 */

	gd.BaseClass = BaseClass;
}());