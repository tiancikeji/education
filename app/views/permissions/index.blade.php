@extends('layouts.scaffold')

@section('main')

<h1>All Permissions</h1>

<p>{{ link_to_route('permissions.create', 'Add new permission') }}</p>

@if ($permissions->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Url</th>
				<th>Name</th>
				<th>Parent_id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($permissions as $permission)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no permissions
@endif

@stop
