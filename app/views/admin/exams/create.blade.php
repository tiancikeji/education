@extends('layouts.admin')

@section('main')

<h1>Create Exam</h1>

{{ Form::open(array('route' => 'admin.exams.store')) }}
	<ul>
        <li>
            {{ Form::label('start_time', 'Start_time:') }}
            {{ Form::text('start_time') }}
        </li>

        <li>
            {{ Form::label('end_time', 'End_time:') }}
            {{ Form::text('end_time') }}
        </li>

        <li>
            {{ Form::label('user_id', 'User_id:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('paper_id', 'Paper_id:') }}
            {{ Form::input('number', 'paper_id') }}
        </li>

        <li>
            {{ Form::label('answers', 'Answers:') }}
            {{ Form::text('answers') }}
        </li>

        <li>
            {{ Form::label('score', 'Score:') }}
            {{ Form::text('score') }}
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


