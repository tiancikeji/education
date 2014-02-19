@extends('layouts.member')

@section('content')

<h1>Show Payment</h1>

<p>{{ link_to_route('payments.index', 'Return to all payments') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Type</th>
				<th>Count</th>
				<th>Fee</th>
				<th>Total</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $payment->type }}}</td>
					<td>{{{ $payment->count }}}</td>
					<td>{{{ $payment->fee }}}</td>
					<td>{{{ $payment->total }}}</td>
		</tr>
	</tbody>
</table>
  
<?php echo $payForm; ?>
<input id='payformsubmit' type="submit" value="go pay" />
  <script type="text/javascript" charset="utf-8">
$("#payformsubmit").on("click",function(){
    $("#0001gateway").submit();
});
  </script>

@stop
