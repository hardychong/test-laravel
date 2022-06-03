@extends('layouts.app')

@section('content')	
	@foreach($videos as $video)
		<div>
			<a href="{{route('av-videos.show',[$video])}}">
			<img src="{{ URL::asset( $video->cover ) }}" width="300" height="201">
				<div>{{$video->number}}</div>			
			</a>
		</div>
	@endforeach
@endsection