@extends('layouts.admin')

@section('main')

<h1> 编辑报告</h1>
{{ Form::model($report, array('method' => 'PATCH', 'route' => array('admin.reports.update', $report->id))) }}
	<ul>
        <li>
            {{ Form::label('user_id', '用户id:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('exam_id', '考试id:') }}
            {{ Form::input('number', 'exam_id') }}
        </li>

        <li>
            {{ Form::label('content', '内容:') }}
            {{ Form::textarea('content') }}
        </li>

        <li>
            {{ Form::label('teacher_id', '老师id:') }}
            {{ Form::input('number', 'teacher_id') }}
        </li>

		<li>
			{{ Form::submit('编辑', array('class' => 'btn btn-info')) }}
			{{ link_to_route('admin.reports.show', '取消', $report->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
