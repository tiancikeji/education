@extends('layouts.scaffold')

@section('main')

<h1>Edit Paper</h1>
{{ Form::model($paper, array('method' => 'PATCH', 'route' => array('papers.update', $paper->id))) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('published_date', 'Published_date:') }}
            {{ Form::text('published_date') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('papers.show', 'Cancel', $paper->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
