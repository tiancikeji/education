@extends('layouts.scaffold')

@section('main')

<h1>编辑教师   </h1>
{{ Form::model($teacher, array('method' => 'PATCH', 'route' => array('teachers.update', $teacher->id))) }}
	<ul>
        <li>
            {{ Form::label('name', '名称 :') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('username', '用户名称 :') }}
            {{ Form::text('username') }}
        </li>

        <li>
            {{ Form::label('password', '密码:') }}
            {{ Form::text('password') }}
        </li>

		<li>
			{{ Form::submit('编辑', array('class' => 'btn btn-info')) }}
			{{ link_to_route('teachers.show', '取消', $teacher->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
