@extends('layouts.scaffold')

@section('main')

<h1>Create Comment</h1>

{{ Form::open(array('route' => 'comments.store')) }}
	<ul>
        <li>
            {{ Form::label('user_id', 'User_id:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('content', 'Content:') }}
            {{ Form::text('content') }}
        </li>

        <li>
            {{ Form::label('video_id', 'Video_id:') }}
            {{ Form::input('number', 'video_id') }}
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


