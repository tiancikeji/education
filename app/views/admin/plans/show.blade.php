@extends('layouts.admin')

@section('main')

<h1>Show Plan</h1>

<p>{{ link_to_route('admin.plans.index', 'Return to all plans') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Event</th>
				<th>Event_date</th>
				<th>Status</th>
				<th>User_id</th>
				<th>Type</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $plan->event }}}</td>
					<td>{{{ $plan->event_date }}}</td>
					<td>{{{ $plan->status }}}</td>
					<td>{{{ $plan->user_id }}}</td>
					<td>{{{ $plan->type }}}</td>
                    <td>{{ link_to_route('admin.plans.edit', 'Edit', array($plan->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.plans.destroy', $plan->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
