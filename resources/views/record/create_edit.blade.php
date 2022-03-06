@extends('layouts.app')

@section('content')	
	<form action="/records" method="POST">
		@csrf
		<table class="table">
			<thead>
				<tr>
					<th>Date</th>
					<th>Account</th>
					<th>Currency</th>
					<th>IN</th>
					<th>OUT</th>
				</tr>
			</thead>
			<tbody>
				@for ($i=0 ; $i<=1 ; $i++)
					<tr>
						<td>
							<input type="date" class="form-control form-control-lg" name='record[{{$i}}][date]'>
						</td>
						<td>
							<select class="form-select" name='record[{{$i}}][acc_id]'>
								@foreach($accounts as $account)
									<option value={{$account->id}}>{{ $account->name }}</option>
								@endforeach
							</select>
						</td>
						<td>							
							<select class="form-select" name='record[{{$i}}][currency]'>
								<option>MOP</option>
								<option>HKD</option>
							</select>
						</td>
						<td>
							<input type="text" class="form-control form-control-lg" name='record[{{$i}}][in]'>
						</td>
						<td>
							<input type="text" class="form-control form-control-lg" name='record[{{$i}}][out]'>
						</td>
					</tr>
				@endfor
			</tbody>
		</table>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection