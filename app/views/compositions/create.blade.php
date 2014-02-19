@extends('layouts.member')
@section('content')

<h1>创建作文 </h1>

{{ Form::open(array('route' => 'compositions.store')) }}
	<ul>
        <li>
            {{ Form::input('hidden', 'user_id',Session::get("current_user")->id) }}
        </li>

        <li>
            {{ Form::label('title', '标题:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('content', '内容:') }}
            {{ Form::textarea('content') }}
        </li>


		<li>
			{{ Form::submit('完成', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


