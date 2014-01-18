@extends('layouts.admin')

@section('main')

<h1>编辑试题 </h1>
{{ Form::model($exercise, array('method' => 'PATCH', 'route' => array('admin.exercises.update', $exercise->id))) }}
	<ul>
        <li>
            {{ Form::label('no', '号码:') }}
            {{ Form::input('number', 'no') }}
        </li>

        <li>
            {{ Form::label('description', ' 描述 :') }}
            {{ Form::text('description') }}
        </li>

        <li>
            {{ Form::label('paper_id', '文章id:') }}
            {{ Form::input('number', 'paper_id') }}
        </li>

		<li>
			{{ Form::submit(' 编辑', array('class' => 'btn btn-info')) }}
			{{ link_to_route('admin.exercises.show', ' 取消', $exercise->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
