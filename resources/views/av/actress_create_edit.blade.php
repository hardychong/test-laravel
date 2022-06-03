@extends('layouts.app')

@section('content')
 	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ( $errors->all() as $error )
					<li> {{ $error }} </li>
				@endforeach
			</ul>
		</div>
	@endif

	<div type="button" id="addInput">Add</div>
	<form action="/av-actress" method="POST" enctype="multipart/form-data">
		@csrf
		@if($avActress->avatar)
		<div><img src="{{ URL::asset( $avActress->avatar ) }}" width="100" height="100"></div>
		@endif
		<div>name:<input type="text" name="name" value={{ $avActress->name }}></div>
		<div>other name:<input type="text" name="otherName" value={{ $avActress->otherName }}></div>
		<div>Upload Avatar:<input type="file" name="avatar"></div>
		
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection

@section('JS')
<script>

</script>
@endsection
