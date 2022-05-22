@extends('layouts.app')

@section('content')	
			@foreach ($avActresses as $actress)
			<div>
			<img src="{{ URL::asset( $actress->avatar ) }}" width="100" height="100">
				<div>{{$actress->name}}</div>	
			</div>				
			@endforeach	
			<hr>
			<div>{{ $avActresses->links() }}</div>
@endsection