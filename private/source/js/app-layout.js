(function(){
	"use strict";

	var Layout = function() {
		this.init();
	};

	var p = Layout.prototype = gd.BaseClass.extend(gd.BaseClass);
	p.BaseClass_init = p.init;

	/*
	 * Public properties
	 */
	p.feature = null;

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
		this._initDynamicFooter();
		this._initFoundation();
		this._initFullScreenJumbotron();
		this._initGoogleAnalytics();
		this._initVideo();
		this._initMobileHeightFix();
	};

	p.updateDynamicFooter = function() {		
		// Set wrap negative margin-bottom
		$(".wrap").css("margin-bottom",function(){
			return ( $(".footer").height() * -1);
		});
	
		// Set wrap margin-bottom
		$(".main-section").css("margin-bottom",function(){
			return ( $(".footer").height() );
		});

		//Set .inner-wrap height for small pages
		if ($(".inner-wrap").height() >= $(".document").height() - ( $(".footer").height() + $(".tab-bar").height()) ) {
			// Enlarge jumbotron to fill screen
			$(".inner-wrap").css("height",function(){
				return ($(window).height() - ( $(".footer").height() ) - $(".tab-bar").height()  );
			});
		}
	};

	p.updateFullScreenJumbotron = function() {
		if ($(window).height() >= $(".jumbotron").height() + ( $(".footer").height() + $(".tab-bar").height()) ) {
			// Enlarge jumbotron to fill screen
			$(".jumbotron").css("height",function(){
				return ($(window).height() - ( $(".footer").height() ) - $(".tab-bar").height()  );
			});
		}
	};
	
	p._initDynamicFooter = function() {
		$(window).on('resize', function() {
			app.layout.updateDynamicFooter();
		});

		this.updateDynamicFooter();
	};

	p._initVideo = function() {
		$("#play-toggle").bind("click", function(){
			var myPlayer = videojs('my_video');
			
			videojs("my_video").ready(function(){
				var myPlayer = this;
			
			if(myPlayer.paused) {
				myPlayer.play();
				$(".flex-video").css( "display", "block" );
				$(".banner-title").css( "display", "none" );
				$(".banner-button").css( "display", "none" );
			} else {
				myPlayer.pause();
			}

			this.on("ended", function(){
				console.log("Video ended B");
				$(".flex-video").css( "display", "none" );
				$(".banner-title").css( "display", "block" );
				$(".banner-button").text( "Replay full show" );
				$(".banner-button").css( "display", "inline-block" );
			});
		});


		});
	};

	p._initMobileHeightFix = function() {
		$('a.left-off-canvas-toggle').click(function() {
		  $(".inner-wrap").css("height",function(){
		  	return ($(document).height());
		  });
		});
	};

	p._initFoundation = function() {
		$(document).foundation();
	};

	p._initFullScreenJumbotron = function() {
		$(window).on('resize', function() {
			app.layout.updateFullScreenJumbotron();
		});

		this.updateFullScreenJumbotron();
	};

	p._initGoogleAnalytics = function() {
		// Google analytics tracking code
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-11098815-13']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' === document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	};

	gd.Layout = Layout;
}(window));