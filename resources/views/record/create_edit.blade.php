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
	<form action="/records" method="POST">
		@csrf
		<table class="table" id="dynamicAddRemove">
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
			
			</tbody>
		</table>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection

@section('JS')
<script>
	$(document).ready(function(){
		var i = 0;
		
		$("tbody").append(AddIn(i));
		
		$("#addInput").click(function(){
			$("tbody").append(AddIn(++i));
		});
		$(document).on('click', '.remove-tr', function(){  
			$(this).parents('tr').remove();
		});  
		
		$(document).on('change', '.input-in', function(){  
			$row = $(this).parents("tr");
			$in = $(this).val();
			$out = 0;
			$amount = $in - $out;
			$row.find(".input-out").val(null);
			$row.find(".input-amount").val($amount);
		});
				
		$(document).on('change', '.input-out', function(){  
			$row = $(this).parents("tr");
			$in = 0;
			$out = $(this).val();
			$amount = $in - $out;
			$row.find(".input-in").val(null);
			$row.find(".input-amount").val($amount);
		});
		
		function AddIn(x)
		{			
			txt = 	"<tr><td>";
			txt +=	"<input type='date' class='form-control form-control-lg' name='records["+x+"][date]'>";			
			txt +=	"</td><td>";
			txt +=	"<select class='form-select' name='records["+x+"][acc_id]'>";
			txt +=	"@foreach($accounts as $account)";
			txt +=	"<option value={{$account->id}}>{{ $account->name }}</option>";
			txt +=	"@endforeach";
			txt +=	"</select>";
			txt +=	"</td><td>";
			txt +=	"<select class='form-select' name='records["+x+"][currency]'>";
			txt +=	"<option>MOP</option>";
			txt +=	"<option>HKD</option>";
			txt +=	"</select>";
			txt +=	"</td><td>";
			txt +=	"<input type='text' class='form-control form-control-lg input-in'>";
			txt +=	"</td><td>";
			txt +=	"<input type='text' class='form-control form-control-lg input-out'>";
			txt +=	"</td><td>";
			txt +=	"<input type='text' class='form-control form-control-lg input-amount' name='records["+x+"][amount]'>";
			txt +=	"</td><td>";
			txt +=	"<button type='button' class='btn btn-danger remove-tr'>Remove</button>";
			txt +=	"</td></tr>";		
			return txt;
		}
	});
</script>
@endsection
