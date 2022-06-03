@extends('layouts.app')

@section('content')	
	<div>
		<img src="{{ URL::asset( $actress->avatar ) }}" width="100" height="100">
			<div>{{$actress->name}}</div>
	</div>
	<div>
		@foreach($actress->videos as $video)
			<div>
				<a href="{{ route('av-videos.show', [$video]) }}">
				<img src="{{ URL::asset( $video->cover ) }}" width="300" height="201">
				</a>
				<p>{{ $video->number }}</p>			
			</div>
		@endforeach
	</div>
@endsection