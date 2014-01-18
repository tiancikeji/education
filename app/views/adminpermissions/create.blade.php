@extends('layouts.scaffold')

@section('main')

<h1>Create Adminpermission</h1>

{{ Form::open(array('route' => 'adminpermissions.store')) }}
	<ul>
        <li>
            {{ Form::label('teacher_id', 'Teacher_id:') }}
            {{ Form::input('number', 'teacher_id') }}
        </li>

        <li>
            {{ Form::label('permission_id', 'Permission_id:') }}
            {{ Form::input('number', 'permission_id') }}
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


