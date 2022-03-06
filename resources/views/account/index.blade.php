@extends('layouts.app')

@section('content')	
	<table class="table table-striped">
		<thead>
				<tr>
					<th>Name</th>
					<th>No</th>
					<th>Note</th>
				</tr>
		</thead>
		<tbody>
			@foreach ($accounts as $account)
				<tr>
					<td>{{ $account->name }}</td>
					<td>{{ $account->no }}</td>
					<td>{{ $account->note }}</td>
				</tr>				
			@endforeach			  
		</tbody>
		<tfoot>
			<tr>
				<td></td>
				<td></td>
				<td>{{ $accounts->links() }}</td>
			</tr>
		</tfoot>
	</table>
@endsection