@extends('layouts.admin')

@section('main')

<h1>新建视频</h1>

{{ Form::open(array('route' => 'admin.videos.store','files'=>true)) }}
	<ul>
        <li>
            {{ Form::label('author', ' 作者:') }}
            {{ Form::text('author') }}
        </li>
        <li>
            {{ Form::label('title', ' 标题 :') }}
            {{ Form::text('title') }}
        </li>
         <li>
            {{ Form::label('overlay', '图像 :') }}
            {{ Form::file('overlay') }}
        </li>

        <li>
            {{ Form::label('url', 'Url:') }}
            {{ Form::text('url') }}
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


