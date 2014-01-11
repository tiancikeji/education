@extends('layouts.admin')

@section('main')

<h1>Create Plan</h1>

{{ Form::open(array('route' => 'admin.plans.store')) }}
	<ul>
        <li>
            {{ Form::label('event', 'Event:') }}
            {{ Form::text('event') }}
        </li>

        <li>
            {{ Form::label('event_date', 'Event_date:') }}
            {{ Form::text('event_date') }}
        </li>

        <li>
            {{ Form::label('status', 'Status:') }}
            {{ Form::text('status') }}
        </li>

        <li>
            {{ Form::label('user_id', 'User_id:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('type', 'Type:') }}
            {{ Form::text('type') }}
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


