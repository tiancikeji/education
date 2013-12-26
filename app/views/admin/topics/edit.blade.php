@extends('layouts.admin')

@section('main')

<h1>Edit Topic</h1>
{{ Form::model($topic, array('method' => 'PATCH', 'route' => array('admin.topics.update', $topic->id))) }}
	<ul>
        <li>
            {{ Form::label('author', 'Author:') }}
            {{ Form::text('author') }}
        </li>

        <li>
            {{ Form::label('titile', 'Titile:') }}
            {{ Form::text('titile') }}
        </li>

        <li>
            {{ Form::label('pic_url', 'Pic_url:') }}
            {{ Form::text('pic_url') }}
        </li>

        <li>
            {{ Form::label('type', 'Type:') }}
            {{ Form::text('type') }}
        </li>

        <li>
            {{ Form::label('status', 'Status:') }}
            {{ Form::text('status') }}
        </li>

        <li>
            {{ Form::label('body', 'Body:') }}
            {{ Form::textarea('body') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('admin.topics.show', 'Cancel', $topic->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
