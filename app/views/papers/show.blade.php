@extends('layouts.scaffold')

@section('main')

<h1>Show Paper</h1>

<p>{{ link_to_route('papers.index', 'Return to all papers') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
				<th>Published_date</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $paper->name }}}</td>
					<td>{{{ $paper->published_date }}}</td>
                    <td>{{ link_to_route('papers.edit', 'Edit', array($paper->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('papers.destroy', $paper->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
