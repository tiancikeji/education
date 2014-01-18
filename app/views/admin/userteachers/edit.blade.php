@extends('layouts.admin')

@section('main')

<h1>编辑修改教师</h1>
{{ Form::model($userteacher, array('method' => 'PATCH', 'route' => array('admin.userteachers.update', $userteacher->id))) }}
	<ul>
        <li>
            {{ Form::label('user_id', '用户id :') }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('teacher_id', '教师id:') }}
            {{ Form::input('number', 'teacher_id') }}
        </li>

		<li>
			{{ Form::submit(' 修改', array('class' => 'btn btn-info')) }}
			{{ link_to_route('admin.userteachers.show', '取消', $userteacher->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
