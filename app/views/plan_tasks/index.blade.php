@extends('layouts.scaffold')

@section('main')

<h1>All Plan_tasks</h1>

<p>{{ link_to_route('plan_tasks.create', 'Add new plan_task') }}</p>

@if ($plan_tasks->count())
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
			@foreach ($plan_tasks as $plan_task)
				<tr>
					<td>{{{ $plan_task->start_date }}}</td>
					<td>{{{ $plan_task->end_date }}}</td>
					<td>{{{ $plan_task->content }}}</td>
					<td>{{{ $plan_task->type }}}</td>
                    <td>{{ link_to_route('plan_tasks.edit', 'Edit', array($plan_task->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('plan_tasks.destroy', $plan_task->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no plan_tasks
@endif

@stop
