@extends('layouts.scaffold')

@section('main')

<h1>All Userplans</h1>

<p>{{ link_to_route('userplans.create', 'Add new userplan') }}</p>

@if ($userplans->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>User_id</th>
				<th>Plan_id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($userplans as $userplan)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no userplans
@endif

@stop
