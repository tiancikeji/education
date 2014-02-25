@extends('layouts.scaffold')

@section('main')

<h1>Edit Article</h1>
{{ Form::model($article, array('method' => 'PATCH', 'route' => array('articles.update', $article->id))) }}
	<ul>
        <li>
            {{ Form::label('no', 'No:') }}
            {{ Form::text('no') }}
        </li>

        <li>
            {{ Form::label('content', 'Content:') }}
            {{ Form::textarea('content') }}
        </li>

        <li>
            {{ Form::label('paper_id', 'Paper_id:') }}
            {{ Form::input('number', 'paper_id') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('articles.show', 'Cancel', $article->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
