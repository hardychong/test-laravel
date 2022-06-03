@extends('layouts.app')

@section('content')	
			@foreach ($avActresses as $actress)
			<div>
			<a href="{{route('av-actress.show',[$actress])}}">
			<img src="{{ URL::asset( $actress->avatar ) }}" width="100" height="100">
				<div>{{$actress->name}}</div>			
			</a>
			</div>
			@endforeach	
			<hr>
			<div>{{ $avActresses->links() }}</div>
@endsection