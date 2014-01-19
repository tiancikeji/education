@extends('layouts.admin')

@section('main')
<link rel="stylesheet" href="/kindeditor-4.1.10/themes/default/default.css" />
    <script charset="utf-8" src="/kindeditor-4.1.10/kindeditor-min.js"></script>
    <script charset="utf-8" src="/kindeditor-4.1.10/lang/zh_CN.js"></script>
    <script>
      var editor;
      KindEditor.ready(function(K) {
        editor = K.create('textarea[name="body"]', {
          allowFileManager : true
        });
      });
    </script>


<h1>编辑消息   </h1>
{{ Form::model($news, array('method' => 'PATCH', 'route' => array('admin.news.update', $news->id ),'files'=>true)) }}
	<ul>
        <li>
            {{ Form::label('title', '咨询标题:') }}
            {{ Form::text('title') }}
        </li>
 
        <li>
            {{ Form::label('author', '作者:') }}
            {{ Form::text('author') }}
        </li>
        <li>
            {{ Form::label('subtitle', '简介:') }}
            {{ Form::text('subtitle') }}
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
			{{ Form::submit('提交', array('class' => 'btn btn-info')) }}
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
