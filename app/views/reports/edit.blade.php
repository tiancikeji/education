@extends('layouts.scaffold')

@section('main')

<h1>Edit Report</h1>
{{ Form::model($report, array('method' => 'PATCH', 'route' => array('reports.update', $report->id))) }}
	<ul>
        <li>
            {{ Form::label('user_id', 'User_id:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('exam_id', 'Exam_id:') }}
            {{ Form::input('number', 'exam_id') }}
        </li>

        <li>
            {{ Form::label('content', 'Content:') }}
            {{ Form::textarea('content') }}
        </li>

        <li>
            {{ Form::label('teacher_id', 'Teacher_id:') }}
            {{ Form::input('number', 'teacher_id') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('reports.show', 'Cancel', $report->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
