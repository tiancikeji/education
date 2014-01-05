@extends('layouts.admin')

@section('main')

<h1>Create User</h1>

{{ Form::open(array('route' => 'admin.users.store')) }}
	<ul>
        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>


        <li>
            {{ Form::label('password', 'Password:') }}
            {{ Form::text('password') }}
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


