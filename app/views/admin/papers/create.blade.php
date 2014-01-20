@extends('layouts.admin')

@section('main')

<h1>添加试卷</h1>

{{ Form::open(array('route' => 'admin.papers.store')) }}
	<ul>
        <li>
            {{ Form::label('name', '试卷名称:') }}
            {{ Form::text('name') }}
        </li>
        <li>
            {{ Form::label('type', '试卷科目:') }}
            <select name="type" id="">
                 <option value="语法">语法</option>
                 <option value="阅读">阅读</option>
                 <option value="词汇">词汇</option>
                 <option value="作文">作文</option>
                 <option value="整套">整套</option>
            </select>            
        </li>


        <li>
            {{ Form::label('published_date', '试卷年月:') }}
            {{ Form::text('published_date') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


