@extends('layouts.admin')

@section('main')

<h1>All Homeworks</h1>

<p>{{ link_to_route('admin.homeworks.create', 'Add new homework') }}</p>

@if ($homeworks->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
        <th>Type</th>
				<th>Exercise_ids</th>
				<th>Teacher_id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($homeworks as $homework)
				<tr>
					<td>{{{ $homework->name }}}</td>
          <td>{{{ $homework->type }}}</td>
					<td>{{{ $homework->exercise_ids }}}</td>
					<td>{{{ $homework->teacher_id }}}</td>
                    <td>{{ link_to_route('admin.homeworks.edit', 'Edit', array($homework->id), array('class' => 'btn btn-info')) }}
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.homeworks.destroy', $homework->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no homeworks
@endif

@stop
