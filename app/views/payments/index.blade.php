@extends('layouts.scaffold')

@section('main')

<h1>All Payments</h1>

<p>{{ link_to_route('payments.create', 'Add new payment') }}</p>

@if ($payments->count())
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
			@foreach ($payments as $payment)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no payments
@endif

@stop
