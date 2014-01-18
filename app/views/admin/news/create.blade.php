@extends('layouts.admin')

@section('main')

<h1>创建新消息</h1>

{{ Form::open(array('route' => 'admin.news.store','files'=>true)) }}
	<ul>
        
        <li>
            {{ Form::label('title', '咨询标题:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('body', '标题正文:') }}
            {{ Form::textarea('body') }}
        </li>

        <li>
            {{ Form::label('overlay', '封面图片:') }}
            {{ Form::file('overlay') }}
        </li>


        <li>
            {{ Form::label('author', '发布作者:') }}
            {{ Form::text('author') }}
        </li>
        <li>
            {{ Form::label('published_date', '发布时间:') }}
            {{ Form::text('published_date') }}
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


