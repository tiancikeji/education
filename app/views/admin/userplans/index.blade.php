@extends('layouts.admin')

@section('main')

<h1>All Userplans</h1>

<p>{{ link_to_route('admin.userplans.create', 'Add new userplan') }}</p>

@if ($userplans->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>User</th>
				<th>Plan</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($userplans as $userplan)
				<tr>
					<td>{{{User::find($userplan->user_id)->email  }}}</td>
					<td>{{{Plan::find($userplan->plan_id)->name  }}}</td>
                    <td>{{ link_to_route('admin.userplans.edit', 'Edit', array($userplan->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.userplans.destroy', $userplan->id))) }}
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
