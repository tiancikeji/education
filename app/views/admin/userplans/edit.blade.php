@extends('layouts.admin')

@section('main')

<h1>编辑日程 </h1>
{{ Form::model($userplan, array('method' => 'PATCH', 'route' => array('admin.userplans.update', $userplan->id))) }}
	<ul>
        <li>
            {{ Form::label('user_id', '用户:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('plan_id', '计划id:') }}
            {{ Form::input('number', 'plan_id') }}
        </li>

		<li>
			{{ Form::submit('修改', array('class' => 'btn btn-info')) }}
			{{ link_to_route('admin.userplans.show', '取消', $userplan->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
