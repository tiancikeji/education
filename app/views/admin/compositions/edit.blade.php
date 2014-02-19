@extends('layouts.admin')

@section('main')

<h1>编辑作文</h1>
{{ Form::model($composition, array('method' => 'PATCH', 'route' => array('admin.compositions.update', $composition->id))) }}
	<ul>

        <li>
            {{ Form::input('hidden', 'user_id') }}
        </li>

        <li>
            {{ Form::label('title', ' 标题:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('content', ' 内容:') }}
            {{ Form::textarea('content') }}
        </li>


        <li>
            {{ Form::label('note', ' 笔记:') }}
            {{ Form::textarea('note') }}
        </li>

        <li>
            {{ Form::input('hidden', 'teacher_id',Session::get("current_admin_id")) }}
        </li>

		<li>
			{{ Form::submit('编辑', array('class' => 'btn btn-info')) }}
			{{ link_to_route('compositions.show', '取消', $composition->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
