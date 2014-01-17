@extends('layouts.admin')

@section('main')

<h1>Create Userteacher</h1>

{{ Form::open(array('route' => 'admin.userteachers.store')) }}
	<ul>
@if ($teachers->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
        <th></th>
				<th>Name</th>
				<th>Username</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($teachers as $teacher)
				<tr>
<td><input type="radio" name="teacher_id" value="{{{ $teacher->id }}}" /></td>
					<td>{{{ $teacher->name }}}</td>
					<td>{{{ $teacher->username }}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no teachers
@endif

        <li>
            {{ Form::label('user_id', 'User_id:') }}
            {{ Form::input('number', 'user_id',Input::get("user_id")) }}
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


