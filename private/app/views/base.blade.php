<!DOCTYPE html>
<html>

<head class=" js csstransforms3d">
	<title>Giles Deacon</title>
	<meta charset="utf-8" />

	<!-- Best practice viewport code -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

	<!-- Prevent zooming until Apple fix iOS7 Safari bug -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	{{-- Favicon --}}
	<link rel="shortcut icon" href="{{ Stasset::get('static/img/giles-favicon.png') }}" />
	
	{{-- Typekit --}}
	<script type="text/javascript" src="//use.typekit.net/xyi3lga.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>	
	
@if (App::environment() == 'development')

	{{-- grunt-contrib-watch: Live Reload --}}
	<script src="{{ URL::to('/'); }}:35729/livereload.js"></script>

	{{-- Modernizr --}}
	<link src="/static/js/giles-deacon-modernizr.js"></script>

	{{-- CSS --}}
	<link rel="stylesheet" href="/static/css/giles-deacon.css" />

@else

	{{-- Modernizr --}}
	<script src="{{ Stasset::get('static/js/giles-deacon-modernizr.js'); }}"></script>

	{{-- CSS --}}
	<link rel="stylesheet" href="{{ Stasset::get('static/css/'.Stasset::getCSS()) }}" />
	
@endif

</head>

<body>
	<div class="container">
		<div class="off-canvas-wrap">
			<div class="inner-wrap">

				{{-- Tob bar and large nav --}}
				<nav class="tab-bar">
					<div class="row">

						<div class="left-small">
							<a class="left-off-canvas-toggle menu-icon" ><img src="{{ Stasset::get('static/img/giles-glasses-large-india-ink.svg'); }}"></a>
						</div>

						<nav class="middle tab-bar-section desktop-nav">
							<a href="/"><img class="giles-logo" src="{{ Stasset::get('static/img/giles-logo-black.svg'); }}"></a>
							@include('nav-primary')
						</nav>

					</div>
				</nav>

				{{-- Off canvas menu --}}
				<aside class="left-off-canvas-menu">
					<ul class="off-canvas-list mobile-nav">
						<li class="exit-off-canvas">
							<label class="close-mobile-nav"><i class="fa fa-times-circle"></i>CLOSE</label>
						</li>
						@include('nav-primary')
					</ul>
				</aside>

				<div class="wrap">
					{{-- Content --}}
					<section class="main-section">
						<main class="dynamic-margins">
							@yield('body')
						</main>

						<a class="exit-off-canvas"></a>
						<div class="break"></div>
					</section>
				</div>

				{{-- Footer --}}
				<footer class="footer dynamic-margins">
					{{-- Call footer navigation --}}
					<nav class="row xsmall-12 footer-nav small-centered">
						@include('nav-footer')
					</nav>
				</footer>
				
			</div>
		</div>
	</div>

	{{-- JS call --}}
	@if (App::environment() == 'development')
		<script src="/static/js/giles-deacon.js"></script>
	@else
		<script src="{{ Stasset::get('static/js/'.Stasset::getCSS()) }}"></script>
	@endif

</body>
</html>