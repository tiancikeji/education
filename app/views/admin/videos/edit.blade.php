@extends('layouts.admin')

@section('main')

<h1>编辑视频</h1>
{{ Form::model($video, array('method' => 'PATCH', 'route' => array('admin.videos.update', $video->id))) }}
	<ul>
        <li>
            {{ Form::label('author', ' 作者 :') }}
            {{ Form::text('author') }}
        </li>
        <li>
            {{ Form::label('title', '标题:') }}
            {{ Form::text('title') }}
        </li>
        <li>
            {{ Form::label('url', 'Url:') }}
            {{ Form::text('url') }}
        </li>

		<li>
			{{ Form::submit('编辑', array('class' => 'btn btn-info')) }}
			{{ link_to_route('admin.videos.show', ' 取消', $video->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
