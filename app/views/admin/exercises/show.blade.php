@extends('layouts.admin')

@section('main')

<h1>Show Exercise</h1>

<p>{{ link_to_route('admin.exercises.index', 'Return to all exercises') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>No</th>
				<th>Description</th>
				<th>Paper_id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $exercise->no }}}</td>
					<td>{{{ $exercise->description }}}</td>
					<td>{{{ $exercise->paper_id }}}</td>
                    <td>{{ link_to_route('admin.exercises.edit', 'Edit', array($exercise->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.exercises.destroy', $exercise->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
