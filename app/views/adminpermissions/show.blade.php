@extends('layouts.scaffold')

@section('main')

<h1>Show Adminpermission</h1>

<p>{{ link_to_route('adminpermissions.index', 'Return to all adminpermissions') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Teacher_id</th>
				<th>Permission_id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $adminpermission->teacher_id }}}</td>
					<td>{{{ $adminpermission->permission_id }}}</td>
                    <td>{{ link_to_route('adminpermissions.edit', 'Edit', array($adminpermission->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('adminpermissions.destroy', $adminpermission->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
