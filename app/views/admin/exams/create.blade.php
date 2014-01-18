@extends('layouts.admin')

@section('main')

<h1>新建考试</h1>

{{ Form::open(array('route' => 'admin.exams.store')) }}
	<ul>
        <li>
            {{ Form::label('start_time', '开始时间:') }}
            {{ Form::text('start_time') }}
        </li>

        <li>
            {{ Form::label('end_time', ' 结束时间:') }}
            {{ Form::text('end_time') }}
        </li>

        <li>
            {{ Form::label('user_id', '用户id :') }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('paper_id', '文件id :') }}
            {{ Form::input('number', 'paper_id') }}
        </li>

        <li>
            {{ Form::label('answers', '答案 :') }}
            {{ Form::text('answers') }}
        </li>

        <li>
            {{ Form::label('score', '评分:') }}
            {{ Form::text('score') }}
        </li>

		<li>
			{{ Form::submit('提交', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


