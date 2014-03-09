@extends('base')

@section('body')
<div class="row">
	<div class="standard-margins">
		<div class="banner about-giles-banner">
			<h5 class="about-giles-link">
				<a href="{{ URL::to('/studio/about-giles'); }}">ABOUT GILES</a>
			</h5>
		</div>
		<ul id="tiles" class="content-feed studio-feed">
			@foreach($data as $val)
				<li class="studio-item">
					<a href="article">
						<h3 class="studio-blog-title">{{ $val->title }}</h3>
						<img src="/{{ $val->thumb }}">
					</a>
				</li>
			@endforeach
		</ul>
	</div>
</div>
@stop