@extends('layouts.member')

@section('main')

<h1>Create Exercise</h1>

{{ Form::open(array('route' => 'exercises.store')) }}
	<ul>
        <li>
            {{ Form::label('no', 'No:') }}
            {{ Form::input('number', 'no') }}
        </li>

        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::text('description') }}
        </li>

        <li>
            {{ Form::label('paer_id', 'Paer_id:') }}
            {{ Form::input('number', 'paer_id') }}
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


