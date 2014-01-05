@extends('layouts.admin')

@section('main')

<h1>Edit User</h1>


{{ Form::model($user, array('method' => 'PATCH', 'route' => array('admin.users.update', $user->id))) }}
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


