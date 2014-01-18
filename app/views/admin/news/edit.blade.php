@extends('layouts.admin')

@section('main')

<h1>编辑消息   </h1>
{{ Form::model($news, array('method' => 'PATCH', 'route' => array('admin.news.update', $news->id))) }}
	<ul>
        <li>
            {{ Form::label('author', '作者:') }}
            {{ Form::text('author') }}
        </li>

        <li>
            {{ Form::label('published_date', '发布时间:') }}
            {{ Form::text('published_date') }}
        </li>

        <li>
            {{ Form::label('body', '内容:') }}
            {{ Form::textarea('body') }}
        </li>

        <li>
            {{ Form::label('title', ' 标题:') }}
            {{ Form::text('title') }}
        </li>

		<li>
			{{ Form::submit('编辑', array('class' => 'btn btn-info')) }}
      {{ link_to_route('admin.news.show', '取消', $news->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
