@extends('layouts.admin')

@section('main')


<link rel="stylesheet" href="/kindeditor-4.1.10/themes/default/default.css" />
    <script charset="utf-8" src="/kindeditor-4.1.10/kindeditor-min.js"></script>
    <script charset="utf-8" src="/kindeditor-4.1.10/lang/zh_CN.js"></script>
    <script>
      var editor;
      KindEditor.ready(function(K) {
        editor = K.create('textarea[name="body"]', {
          allowFileManager : true,
            newlineTag: "br",
            width:'400px'

        });
      });
    </script>


<h1>创建新消息</h1>

{{ Form::open(array('route' => 'admin.news.store','files'=>true)) }}
	<ul>
        
        <li>
            {{ Form::label('title', '咨询标题:') }}
<input type="text" name="title" value="" size=14 maxlength=14 />
        </li>
        <li>
            {{ Form::label('subtitle', '简介:') }}
<input type="text" name="subtitle" value="" size=32 maxlength=32 />
        </li>
        <li>
            {{ Form::label('body', '标题正文:') }}
<textarea name="body" rows="8" cols="40" style="word-break:break-all;"></textarea>
        </li>

        <li>
            {{ Form::label('overlay', '封面图片:') }}
            {{ Form::file('overlay') }}
图像大小wei :205*120
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
			{{ Form::submit('保存', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


