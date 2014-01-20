@extends('layouts.scaffold')

@section('main')

<h1>Edit Plan_task</h1>
{{ Form::model($plan_task, array('method' => 'PATCH', 'route' => array('plan_tasks.update', $plan_task->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('plan_tasks.show', 'Cancel', $plan_task->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
