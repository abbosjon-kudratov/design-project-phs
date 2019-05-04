@extends('layouts.app')

@section('content')
	<div class="container">
	<h1>Images | Gallery</h1>

	@if(count($posts)>0)

		@foreach($posts as $post)

			<div class="well">
				<h3><a href="/posts/{$post->id}">{{$post->title}}</a></h3>
				<small>Uploaded on {{$post->created_at}}</small>
			</div>
			@endforeach
			{{$posts->links()}}
	@else
		<p>No posts Found</p>
	@endif

	</div>
@endsection