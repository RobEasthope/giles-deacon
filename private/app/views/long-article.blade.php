@extends('base')

@section('body')
<div class="standard-margins">
	<div class="row">
		<div class="columns small-12 medium-6 right">
			<span class="long-article-date">{{ $data->date }}</span>
			<h2 class="h2 long-article-title">{{ $data->title }}</h2>
			<!-- Main copy -->
			<div class="long-article-text">
				<p class="lead-paragraph">{{ $data->sell }}</p>
				<p>{{ $data->content }}</p>
			</div>
		</div>

		<!-- Images -->
		@foreach($data->gallery as $val)
			<div class="columns small-12 medium-6 long-article-images">
				<img src="{{ $val['img'] }}">
				<span class="caption">{{ $val['caption'] }}</span>
			</div>
		@endforeach
	</div>
</div>

@stop