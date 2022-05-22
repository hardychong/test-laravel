<div class="alert alert-danger">
	<ul>
		@foreach ( is_array($errors) as $error )
			<li> {{ $error }} </li>
		@endforeach
</div>