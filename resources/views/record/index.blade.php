@extends('layouts.app')

@section('content')	
	<div><a href="/records/create">Create</a></div>
	
	<table class="table table-striped">
		<thead>
				<tr>
					<th>Account</th>
					<th>Date</th>
					<th>Currency</th>
					<th>IN</th>
					<th>OUT</th>
				</tr>
		</thead>
		<tbody>
			@foreach ($records as $record)
				<tr>
					<td>{{ $record->account->name }}</td>
					<td>{{ $record->date }}</td>
					<td>{{ $record->currency }}</td>
					@if( $record->amount > 0 )							
						<td>{{ $record->amount }}</td>
						<td></td>
					@else						
						<td></td>
						<td>{{ -$record->amount }}</td>
					@endif
				</tr>				
			@endforeach			  
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5">{{ $records->links() }}</td>
			</tr>
		</tfoot>
	</table>
	
	<div><a href="/">Index</a></div>
@endsection