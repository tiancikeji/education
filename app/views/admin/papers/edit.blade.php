@extends('layouts.admin')

@section('main')

<h1>编辑试卷 </h1>
{{ Form::model($paper, array('method' => 'PATCH', 'route' => array('admin.papers.update', $paper->id))) }}
	<ul>
        <li>
            {{ Form::label('name', '名称:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('published_date', ' 发布日期:') }}
            {{ Form::text('published_date') }}
        </li>

		<li>
			{{ Form::submit(' 编辑', array('class' => 'btn btn-info')) }}
			{{ link_to_route('papers.show', ' 取消', $paper->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
