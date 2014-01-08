@extends('layouts.admin')

@section('main')

<h1>Show Answer</h1>

<p>{{ link_to_route('admin.answers.index', 'Return to all answers') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id</th>
				<th>Description</th>
				<th>Exercise_id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $answer->id }}}</td>
					<td>{{{ $answer->description }}}</td>
					<td>{{{ $answer->exercise_id }}}</td>
                    <td>{{ link_to_route('admin.answers.edit', 'Edit', array($answer->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.answers.destroy', $answer->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
