@extends('base')

@section('body')

	<div class="row">
		<div class="standard-margins">
			<div class="video-banner">
				<div class="banner-content-wrap">
					<div class="flex-video">
						<video id="my_video" src="" class="video-js vjs-default-skin" controls preload="auto" width="640" height="360" data-setup='{ "techOrder": ["youtube"], "src": "http://www.youtube.com/watch?v=O5aXJRNk26w", "ytcontrols": true }'>
					</div>
					<h2 class="banner-title">A/W 2014</h2>
					<span class="banner-button">Watch full show</span>
				</div>
			</div>
		</div>
		<div class=" sub-header-wrap">
			<h5 class="sub-header">Photos</h5>
		</div>
		<div class="standard-margins gallery">
			<ul class="small-block-grid-2	medium-block-grid-4	large-block-grid-5 xlarge-block-grid-6 xxlarge-block-grid-7 gallery-block-grid">
				<li>
					<a href="/lightbox" class="thumbnail">
						<img src="assets/img/dummy-content/carousel/giles_show_holding_image_1.jpg">
					</a>
				</li>
				<li>
					<a href="/lightbox" class="thumbnail">
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
@stop