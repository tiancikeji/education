@extends('layouts.admin')

@section('main')

<h1>All Papers</h1>

<p>{{ link_to_route('admin.papers.create', 'Add new paper') }}</p>

@if ($papers->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Published_date</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($papers as $paper)
				<tr>
					<td>{{{ $paper->name }}}</td>
					<td>{{{ $paper->published_date }}}</td>
                    <td>{{ link_to_route('admin.papers.edit', 'Edit', array($paper->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.papers.destroy', $paper->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no papers
@endif

@stop
