@extends('layouts.admin')

@section('main')

<h1>新建视频</h1>

{{ Form::open(array('route' => 'admin.videos.store','files'=>true)) }}
	<ul>
<select name="paper_id" id="">
			@foreach ($papers as $paper)
        <option value="{{{ $paper->id }}}">{{{ $paper->name }}}=={{{ $paper->published_date }}}=={{{ $paper->section }}}</option>
			@endforeach
</select>
            {{ Form::input('hidden','author','作者') }}
        <li>
            {{ Form::label('title', ' 标题 :') }}
<input type="text" name="title" size="18" maxlength="18" />
        </li>
         <li>
            {{ Form::label('overlay', '图像 :') }}
            {{ Form::file('overlay') }}
        </li>

        <li>
            {{ Form::label('url', 'Url:') }}
            {{ Form::file('url') }}
        </li>

        <li>  
        Tags:
        <input type="text" name="tags[]" value="" size=10 maxlength=18/>
        <input type="text" name="tags[]" value="" size=10 maxlength=18/>
        <input type="text" name="tags[]" value="" size=10 maxlength=18/>
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


