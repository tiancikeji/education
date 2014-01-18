@extends('layouts.member')

@section('content')

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



<div class="grid">
<h1>发布新帖</h1>

{{ Form::open(array('route' => 'topics.store')) }}
	<ul>
        <li>
            {{ Form::label('author', '作者:') }}
            {{ Form::text('author') }}
        </li>

        <!-- <li> -->
            <!-- {{ Form::label('titile', '标题:') }} -->
            <!-- {{ Form::text('titile') }} -->

        <!-- <li> -->
            <!-- {{ Form::label('pic_url', 'Pic_url:') }} -->
            <!-- {{ Form::text('pic_url') }} -->
        <!-- </li> -->

        <!-- <li> -->
            <!-- {{ Form::label('type', '类型:') }} -->
            <!-- {{ Form::text('type') }} -->
        <!-- </li> -->

        <!-- <li> -->
            <!-- {{ Form::label('status', '状态:') }} -->
            <!-- {{ Form::text('status') }} -->
        <!-- </li> -->

        <li>
            {{ Form::label('body', '内容:') }}
            {{ Form::textarea('body') }}
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

</div>
@stop


