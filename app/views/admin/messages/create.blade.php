@extends('layouts.admin')

@section('main')

<h1>创建消息  </h1>

{{ Form::open(array('route' => 'admin.messages.store')) }}
	<ul>

            {{ Form::input('hidden','title',' ') }}

            {{ Form::input('hidden','type',' ') }}
        <li>
            {{ Form::label('body', '内容:') }}
            {{ Form::textarea('body') }}
        </li>

            {{ Form::input('hidden', 'is_read',0) }}


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


