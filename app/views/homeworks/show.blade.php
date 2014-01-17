@extends('layouts.scaffold')

@section('main')

<h1>Show Homework</h1>

<p>{{ link_to_route('homeworks.index', 'Return to all homeworks') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
				<th>Exercise_ids</th>
				<th>Teacher_id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $homework->name }}}</td>
					<td>{{{ $homework->exercise_ids }}}</td>
					<td>{{{ $homework->teacher_id }}}</td>
                    <td>{{ link_to_route('homeworks.edit', 'Edit', array($homework->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('homeworks.destroy', $homework->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
