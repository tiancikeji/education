@extends('layouts.scaffold')

@section('main')

<h1>Edit Myword</h1>
{{ Form::model($myword, array('method' => 'PATCH', 'route' => array('mywords.update', $myword->id))) }}
	<ul>
        <li>
            {{ Form::label('word_id', 'Word_id:') }}
            {{ Form::input('number', 'word_id') }}
        </li>

        <li>
            {{ Form::label('user_id', 'User_id:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('mywords.show', 'Cancel', $myword->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
