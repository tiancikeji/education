@extends('layouts.scaffold')

@section('main')

<h1>Edit Myexercise</h1>
{{ Form::model($myexercise, array('method' => 'PATCH', 'route' => array('myexercises.update', $myexercise->id))) }}
	<ul>
        <li>
            {{ Form::label('user_id', 'User_id:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('exercise_id', 'Exercise_id:') }}
            {{ Form::input('number', 'exercise_id') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('myexercises.show', 'Cancel', $myexercise->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
