@extends('layouts.admin')

@section('main')

<h1>编辑消息   </h1>
{{ Form::model($message, array('method' => 'PATCH', 'route' => array('admin.messages.update', $message->id))) }}
	<ul>
        <li>
            {{ Form::label('title', '标题:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('body', '内容:') }}
            {{ Form::textarea('body') }}
        </li>

        <li>
            {{ Form::label('is_read', '已读:') }}
            {{ Form::input('number', 'is_read') }}
        </li>

        <li>
            {{ Form::label('type', '类型:') }}
            {{ Form::text('type') }}
        </li>

        <li>
            {{ Form::label('user_id', 'User_id:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

		<li>
			{{ Form::submit('编辑', array('class' => 'btn btn-info')) }}
      {{ link_to_route('messages.show', '取消', $message->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
