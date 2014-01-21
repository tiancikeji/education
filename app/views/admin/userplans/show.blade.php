@extends('layouts.scaffold')

@section('main')

<h1>Show Userplan</h1>

<p>{{ link_to_route('userplans.index', 'Return to all userplans') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>User_id</th>
				<th>Plan_id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $userplan->user_id }}}</td>
					<td>{{{ $userplan->plan_id }}}</td>
                    <td>{{ link_to_route('userplans.edit', 'Edit', array($userplan->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('userplans.destroy', $userplan->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
