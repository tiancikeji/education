@extends('layouts.admin')

@section('main')

<h1>Create News</h1>

{{ Form::open(array('route' => 'admin.news.store','files'=>true)) }}
	<ul>
        <li>
            {{ Form::label('author', 'Author:') }}
            {{ Form::text('author') }}
        </li>

        <li>
            {{ Form::label('published_date', 'Published_date:') }}
            {{ Form::text('published_date') }}
        </li>
        <li>
            {{ Form::label('overlay', 'Overlay:') }}
            {{ Form::file('overlay') }}
        </li>

        <li>
            {{ Form::label('body', 'Body:') }}
            {{ Form::textarea('body') }}
        </li>

        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
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


