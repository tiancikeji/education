@extends('layouts.scaffold')

@section('main')

<h1>Edit Word</h1>
{{ Form::model($word, array('method' => 'PATCH', 'route' => array('words.update', $word->id))) }}
	<ul>
        <li>
            {{ Form::label('english', 'English:') }}
            {{ Form::text('english') }}
        </li>

        <li>
            {{ Form::label('chinese', 'Chinese:') }}
            {{ Form::text('chinese') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('words.show', 'Cancel', $word->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
