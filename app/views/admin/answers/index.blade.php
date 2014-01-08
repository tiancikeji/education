@extends('layouts.admin')

@section('main')

<h1>All Answers</h1>

<p>{{ link_to_route('admin.answers.create', 'Add new answer') }}</p>

@if ($answers->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Description</th>
				<th>Exercise_id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($answers as $answer)
				<tr>
					<td>{{{ $answer->id }}}</td>
					<td>{{{ $answer->description }}}</td>
					<td>{{{ $answer->exercise_id }}}</td>
                    <td>{{ link_to_route('admin.answers.edit', 'Edit', array($answer->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.answers.destroy', $answer->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no answers
@endif

@stop
