@extends('layouts.member')
@section('content')

<h1>All Compositions</h1>

<p>{{ link_to_route('compositions.create', 'Add new composition') }}</p>

@if ($compositions->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>User_id</th>
				<th>Exam_id</th>
				<th>Title</th>
				<th>Content</th>
				<th>Note</th>
				<th>Teacher_id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($compositions as $composition)
				<tr>
					<td>{{{ $composition->user_id }}}</td>
					<td>{{{ $composition->exam_id }}}</td>
					<td>{{{ $composition->title }}}</td>
					<td>{{{ $composition->content }}}</td>
					<td>{{{ $composition->note }}}</td>
					<td>{{{ $composition->teacher_id }}}</td>
                    <td>{{ link_to_route('compositions.edit', 'Edit', array($composition->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('compositions.destroy', $composition->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no compositions
@endif

@stop
