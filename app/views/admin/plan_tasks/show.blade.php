@extends('layouts.admin')

@section('main')

<h1>Show Plan_task</h1>

<p>{{ link_to_route('admin.plantasks.index', 'Return to all plan_tasks') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Start_date</th>
				<th>End_date</th>
				<th>Content</th>
				<th>Type</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $plan_task->start_date }}}</td>
					<td>{{{ $plan_task->end_date }}}</td>
					<td>{{{ $plan_task->content }}}</td>
					<td>{{{ $plan_task->type }}}</td>
                    <td>{{ link_to_route('admin.plantasks.edit', 'Edit', array($plan_task->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.plantasks.destroy', $plan_task->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
