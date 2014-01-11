@extends('layouts.scaffold')

@section('main')

<h1>Show Teacher</h1>

<p>{{ link_to_route('teachers.index', 'Return to all teachers') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
				<th>Username</th>
				<th>Password</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $teacher->name }}}</td>
					<td>{{{ $teacher->username }}}</td>
					<td>{{{ $teacher->password }}}</td>
                    <td>{{ link_to_route('teachers.edit', 'Edit', array($teacher->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('teachers.destroy', $teacher->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
