@extends('base')

@section('body')
	<section class="row">
		<!-- <div class="video-banner-wrap"> -->
			<div class="video-banner">
				<div class="banner-content-wrap">
					<div class="flex-video">
						<video id="my_video" src="" class="video-js vjs-default-skin" controls preload="auto" data-setup='{ "techOrder": ["youtube"], "src": "http://www.youtube.com/watch?v=O5aXJRNk26w", "ytcontrols": true }'>
					</div>
					<h2 class="banner-title">Our bespoke service</h2>
					<span id="play-toggle" class="banner-button">Watch full show</span>
				</div>
			</div>
		<!-- </div> -->
	</section>
		
	<section class="row gallery">
		<div class="sub-header-wrap">
			<h2 class="sub-header">Classic Giles Dresses</h2>
		</div>

		<div class="row">
			<div class="gallery minimum-margins">
				<ul class="small-block-grid-2	medium-block-grid-4	large-block-grid-5 xlarge-block-grid-6 xxlarge-block-grid-7 gallery-block-grid">
				  <li>
					<a href="#" class="thumbnail">
							<img src="assets/img/dummy-content/carousel/giles_show_holding_image_1.jpg">
						</a>
					</li>
					<li>
						<a href="#" class="thumbnail">
							<img src="assets/img/dummy-content/carousel/giles_show_holding_image_2.jpg">
						</a>
					</li>
					<li>
						<a href="#" class="thumbnail">
							<img src="assets/img/dummy-content/carousel/giles_show_holding_image_3.jpg">
						</a>
					</li>
					<li>
						<a href="#" class="thumbnail">
							<img src="assets/img/dummy-content/carousel/giles_show_holding_image_4.jpg">
						</a>
					</li>
					<li>
						<a href="#" class="thumbnail">
							<img src="assets/img/dummy-content/carousel/giles_show_holding_image_5.jpg">
						</a>
					</li>
					<li>
						<a href="#" class="thumbnail">
							<img src="assets/img/dummy-content/carousel/giles_show_holding_image_6.jpg">
						</a>
					</li>
					<li>
						<a href="#" class="thumbnail">
							<img src="assets/img/dummy-content/carousel/giles_show_holding_image_7.jpg">
						</a>
					</li>
					<li>
						<a href="#" class="thumbnail">
							<img src="assets/img/dummy-content/carousel/giles_show_holding_image_8.jpg">
						</a>
					</li>
					<li>
						<a href="#" class="thumbnail">
							<img src="assets/img/dummy-content/carousel/giles_show_holding_image_9.jpg">
						</a>
					</li>
					<li>
						<a href="#" class="thumbnail">
							<img src="assets/img/dummy-content/carousel/giles_show_holding_image_10.jpg">
						</a>
					</li>
					<li>
						<a href="#" class="thumbnail">
							<img src="assets/img/dummy-content/carousel/giles_show_holding_image_11.jpg">
						</a>
					</li>
					<li>
						<a href="#" class="thumbnail">
							<img src="assets/img/dummy-content/carousel/giles_show_holding_image_12.jpg">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
		
	<section class="couture-booking-wrap">
		<a href="#" class="couture-booking-btn">Book an appointment</a>
	</section>

	
@stop