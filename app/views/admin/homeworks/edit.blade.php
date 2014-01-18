@extends('layouts.admin')

@section('main')

<h1>编辑作业模板</h1>
{{ Form::model($homework, array('method' => 'PATCH', 'route' => array('admin.homeworks.update', $homework->id))) }}
	<ul>
        <li>
            {{ Form::label('name', ' 名称:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('exercise_ids', '练习id :') }}
            {{ Form::textarea('exercise_ids') }}
        </li>

        <li>
            {{ Form::label('teacher_id', '老师id:') }}
            {{ Form::input('number', 'teacher_id') }}
        </li>

		<li>
			{{ Form::submit(' 编辑', array('class' => 'btn btn-info')) }}
			{{ link_to_route('admin.homeworks.show', '取消', $homework->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
