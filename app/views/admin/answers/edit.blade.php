@extends('layouts.admin')

@section('main')

<h1>Edit Answer</h1>
{{ Form::model($answer, array('method' => 'PATCH', 'route' => array('admin.answers.update', $answer->id))) }}
	<ul>
        <li>
            {{ Form::label('id', 'Id:') }}
            {{ Form::input('number', 'id') }}
        </li>

        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::text('description') }}
        </li>

        <li>
            {{ Form::label('exercise_id', 'Exercise_id:') }}
            {{ Form::input('number', 'exercise_id') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('admin.answers.show', 'Cancel', $answer->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
