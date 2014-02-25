@extends('layouts.scaffold')

@section('main')

<h1>Edit Point</h1>
{{ Form::model($point, array('method' => 'PATCH', 'route' => array('points.update', $point->id))) }}
	<ul>
        <li>
            {{ Form::label('no', 'No:') }}
            {{ Form::text('no') }}
        </li>

        <li>
            {{ Form::label('content', 'Content:') }}
            {{ Form::text('content') }}
        </li>

        <li>
            {{ Form::label('paper_id', 'Paper_id:') }}
            {{ Form::input('number', 'paper_id') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('points.show', 'Cancel', $point->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
