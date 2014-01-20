@extends('layouts.scaffold')

@section('main')

<h1>Create Payment</h1>

{{ Form::open(array('route' => 'payments.store')) }}
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
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


