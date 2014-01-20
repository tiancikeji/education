@extends('layouts.admin')

@section('main')

<h1>Edit Payment</h1>
{{ Form::model($payment, array('method' => 'PATCH', 'route' => array('admin.payments.update', $payment->id))) }}
	<ul>
        <li>
            {{ Form::label('type', 'Type:') }}
            {{ Form::text('type') }}
        </li>

        <li>
            {{ Form::label('count', 'Count:') }}
            {{ Form::input('number', 'count') }}
        </li>

        <li>
            {{ Form::label('fee', 'Fee:') }}
            {{ Form::text('fee') }}
        </li>

        <li>
            {{ Form::label('total', 'Total:') }}
            {{ Form::input('number', 'total') }}
        </li>

        <li>
            {{ Form::label('user_id', 'User_id:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('payments.show', 'Cancel', $payment->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
