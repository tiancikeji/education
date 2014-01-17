@extends('layouts.scaffold')

@section('main')

<h1>Edit Userplan</h1>
{{ Form::model($userplan, array('method' => 'PATCH', 'route' => array('userplans.update', $userplan->id))) }}
	<ul>
        <li>
            {{ Form::label('user_id', 'User_id:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('plan_id', 'Plan_id:') }}
            {{ Form::input('number', 'plan_id') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('userplans.show', 'Cancel', $userplan->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
