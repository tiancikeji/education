@extends('layouts.admin')

@section('main')

<h1>Edit Homework</h1>
{{ Form::model($homework, array('method' => 'PATCH', 'route' => array('admin.homeworks.update', $homework->id))) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('exercise_ids', 'Exercise_ids:') }}
            {{ Form::textarea('exercise_ids') }}
        </li>

        <li>
            {{ Form::label('teacher_id', 'Teacher_id:') }}
            {{ Form::input('number', 'teacher_id') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('admin.homeworks.show', 'Cancel', $homework->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
