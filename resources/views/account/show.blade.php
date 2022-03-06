@extends('layouts.app')

@section('content')	
	<div>{{$acc_name}}</div>
	
	<table class="table table-striped">
		<thead>
				<tr>
					<th>Date</th>
					<th>Currency</th>
					<th>IN</th>
					<th>OUT</th>
				</tr>
		</thead>
		<tbody>
			@foreach ($records as $record)
				<tr>
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
			<tr class="row">
				<td class="col-12">{{ $records->links() }}</td>
			</tr>
		</tfoot>
	</table>
@endsection

@section('JS')

@endsection