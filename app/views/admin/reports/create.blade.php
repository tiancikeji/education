@extends('layouts.admin')

@section('main')

<h1>新建报告 </h1>

{{ Form::open(array('route' => 'admin.reports.store')) }}
	<ul>
        <li>
            {{ Form::label('user_id', '用户id:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('exam_id', ' 考试id:') }}
            {{ Form::input('number', 'exam_id') }}
        </li>

        <li>
            {{ Form::label('content', '内容 :') }}
            {{ Form::textarea('content') }}
        </li>

        <li>
            {{ Form::label('teacher_id', '老师id:') }}
            {{ Form::input('number', 'teacher_id') }}
        </li>

		<li>
			{{ Form::submit(' 提交', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


