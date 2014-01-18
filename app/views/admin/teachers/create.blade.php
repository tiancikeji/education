@extends('layouts.admin')

@section('main')

<h1>新建教师</h1>

{{ Form::open(array('route' => 'admin.teachers.store')) }}
	<ul>
        <li>
            {{ Form::label('name', '名称:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('username', ' 用户名成:') }}
            {{ Form::text('username') }}
        </li>

        <li>
            {{ Form::label('password', ' 密码:') }}
            {{ Form::password('password') }}
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


