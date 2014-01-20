@extends('layouts.scaffold')

@section('main')

<h1>Create Plan_task</h1>

{{ Form::open(array('route' => 'plan_tasks.store')) }}
	<ul>
        <li>
            {{ Form::label('start_date', 'Start_date:') }}
            {{ Form::text('start_date') }}
        </li>

        <li>
            {{ Form::label('end_date', 'End_date:') }}
            {{ Form::text('end_date') }}
        </li>

        <li>
            {{ Form::label('content', 'Content:') }}
            {{ Form::text('content') }}
        </li>

        <li>
            {{ Form::label('type', 'Type:') }}
            {{ Form::text('type') }}
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


