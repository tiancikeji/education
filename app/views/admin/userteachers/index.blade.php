@extends('layouts.admin')

@section('main')

<h1>All Userteachers</h1>

<p>{{ link_to_route('admin.userteachers.create', 'Add new userteacher') }}</p>

@if ($userteachers->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>User_id</th>
				<th>Teacher_id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($userteachers as $userteacher)
				<tr>
					<td>{{{ $userteacher->user_id }}}</td>
					<td>{{{ $userteacher->teacher_id }}}</td>
                    <td>{{ link_to_route('admin.userteachers.edit', 'Edit', array($userteacher->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.userteachers.destroy', $userteacher->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no userteachers
@endif

@stop
