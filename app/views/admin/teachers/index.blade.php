@extends('layouts.admin')

@section('main')

<h1>All Teachers</h1>

<p>{{ link_to_route('admin.teachers.create', 'Add new teacher') }}</p>

@if ($teachers->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Username</th>
				<th>Password</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($teachers as $teacher)
				<tr>
					<td>{{{ $teacher->name }}}</td>
					<td>{{{ $teacher->username }}}</td>
					<td>{{{ $teacher->password }}}</td>
                    <td>{{ link_to_route('admin.teachers.edit', 'Edit', array($teacher->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.teachers.destroy', $teacher->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no teachers
@endif

@stop
