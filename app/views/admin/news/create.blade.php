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


<h1>创建新消息</h1>

{{ Form::open(array('route' => 'admin.news.store','files'=>true)) }}
	<ul>
        
        <li>
            {{ Form::label('title', '咨询标题:') }}
            {{ Form::text('title') }}
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


        <!-- <li> -->
        <!--     {{ Form::label('author', '发布作者:') }} -->
        <!--     {{ Form::text('author') }} -->
        <!-- </li> -->
        <!-- <li> -->
        <!--     {{ Form::label('published_date', '发布时间:') }} -->
        <!--     {{ Form::text('published_date') }} -->
        <!-- </li> -->

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


