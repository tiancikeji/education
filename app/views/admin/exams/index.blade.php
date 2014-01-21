@extends('layouts.admin')

@section('main')

<h1>All Exams</h1>

<p>{{ link_to_route('admin.exams.create', 'Add new exam') }}</p>

@if ($exams->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Start_time</th>
				<th>End_time</th>
				<th>User_id</th>
				<th>Paper_id</th>
				<th>Answers</th>
				<th>Score</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($exams as $exam)
				<tr>
					<td>{{{ $exam->start_time }}}</td>
					<td>{{{ $exam->end_time }}}</td>
					<td>{{{ $exam->user_id }}}</td>
					<td>{{{ $exam->paper_id }}}</td>
					<td>{{{ $exam->answers }}}</td>
					<td>{{{ $exam->score }}}</td>
                    <td>{{ link_to_route('admin.exams.edit', 'Edit', array($exam->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.exams.destroy', $exam->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no exams
@endif

@stop
