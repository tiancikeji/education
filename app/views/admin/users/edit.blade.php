@extends('layouts.admin')

@section('main')

<h1>编辑用户 </h1>


{{ Form::model($user, array('method' => 'PATCH', 'route' => array('admin.users.update', $user->id))) }}
	<ul>
        <li>
            {{ Form::label('email', '邮箱:') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::label('name', '名称:') }}
            {{ Form::text('name') }}
        </li>


        <li>
            {{ Form::label('password', '密码:') }}
            {{ Form::text('password') }}
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


