@extends('layouts.admin')

@section('main')

<h1>Edit Exercise</h1>
{{ Form::model($exercise, array('method' => 'PATCH', 'route' => array('admin.exercises.update', $exercise->id))) }}
	<ul>
        <li>
            {{ Form::label('no', 'No:') }}
            {{ Form::input('number', 'no') }}
        </li>

        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::text('description') }}
        </li>

        <li>
            {{ Form::label('paper_id', 'Paper_id:') }}
            {{ Form::input('number', 'paper_id') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('admin.exercises.show', 'Cancel', $exercise->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
