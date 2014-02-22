@extends('layouts.scaffold')

@section('main')

<h1>Show Myexercise</h1>

<p>{{ link_to_route('myexercises.index', 'Return to all myexercises') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>User_id</th>
				<th>Exercise_id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $myexercise->user_id }}}</td>
					<td>{{{ $myexercise->exercise_id }}}</td>
                    <td>{{ link_to_route('myexercises.edit', 'Edit', array($myexercise->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('myexercises.destroy', $myexercise->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
