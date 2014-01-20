@extends('layouts.scaffold')

@section('main')

<h1>Show Payment</h1>

<p>{{ link_to_route('payments.index', 'Return to all payments') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Type</th>
				<th>Count</th>
				<th>Fee</th>
				<th>Total</th>
				<th>User_id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $payment->type }}}</td>
					<td>{{{ $payment->count }}}</td>
					<td>{{{ $payment->fee }}}</td>
					<td>{{{ $payment->total }}}</td>
					<td>{{{ $payment->user_id }}}</td>
                    <td>{{ link_to_route('payments.edit', 'Edit', array($payment->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('payments.destroy', $payment->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
