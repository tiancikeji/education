@extends('layouts.admin')

@section('main')

<h1>创建消息  </h1>

{{ Form::open(array('route' => 'admin.messages.store')) }}
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

            {{ Form::input('hidden', 'user_id',Input::get('user_id')) }}

			{{ Form::submit('提交', array('class' => 'btn btn-info')) }}
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


