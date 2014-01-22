@extends('layouts.admin')

@section('main')

<h1>All Reports</h1>

<p>{{ link_to_route('admin.reports.create', 'Add new report') }}</p>

@if ($reports->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>User_id</th>
				<th>Exam_id</th>
				<th>Content</th>
				<th>Teacher_id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($reports as $report)
				<tr>
					<td>{{{ $report->user_id }}}</td>
					<td>{{{ $report->exam_id }}}</td>
					<td>{{{ $report->content }}}</td>
					<td>{{{ $report->teacher_id }}}</td>
                    <td>{{ link_to_route('admin.reports.edit', 'Edit', array($report->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.reports.destroy', $report->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no reports
@endif

@stop
