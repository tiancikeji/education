@extends('layouts.admin')

@section('main')

<h1>Create Message</h1>

{{ Form::open(array('route' => 'admin.messages.store')) }}
	<ul>
        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('body', 'Body:') }}
            {{ Form::textarea('body') }}
        </li>

        <li>
            {{ Form::label('is_read', 'Is_read:') }}
            {{ Form::input('number', 'is_read') }}
        </li>

        <li>
            {{ Form::label('type', 'Type:') }}
            {{ Form::text('type') }}
        </li>

            {{ Form::input('hidden', 'user_id',Input::get('user_id')) }}

			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


