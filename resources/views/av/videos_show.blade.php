@extends('layouts.app')

@section('content')	
	<div>
	<img src="{{ URL::asset( $video->cover ) }}" width="300" height="201">
	<p>{{ $video->number }}</p>
	<div>
	@foreach($video->actresses as $actress)
	<div>
	<a href="{{ route('av-actress.show', $actress) }}">
		{{$actress->name}}
	</a>
	</div>
	@endforeach
@endsection