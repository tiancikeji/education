@extends('layouts.scaffold')

@section('main')

<h1>Edit Adminpermission</h1>
{{ Form::model($adminpermission, array('method' => 'PATCH', 'route' => array('adminpermissions.update', $adminpermission->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('adminpermissions.show', 'Cancel', $adminpermission->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
