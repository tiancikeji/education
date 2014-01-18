@extends('layouts.scaffold')

@section('main')

<h1>Show Permission</h1>

<p>{{ link_to_route('permissions.index', 'Return to all permissions') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Url</th>
				<th>Name</th>
				<th>Parent_id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $permission->url }}}</td>
					<td>{{{ $permission->name }}}</td>
					<td>{{{ $permission->parent_id }}}</td>
                    <td>{{ link_to_route('permissions.edit', 'Edit', array($permission->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('permissions.destroy', $permission->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
