@extends('layouts.main')

@section('content')

<h1>Show Topic</h1>

<p>{{ link_to_route('topics.index', 'Return to all topics') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Author</th>
				<th>Titile</th>
				<th>Pic_url</th>
				<th>Type</th>
				<th>Status</th>
				<th>Body</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $topic->author }}}</td>
					<td>{{{ $topic->titile }}}</td>
					<td>{{{ $topic->pic_url }}}</td>
					<td>{{{ $topic->type }}}</td>
					<td>{{{ $topic->status }}}</td>
					<td>{{{ $topic->body }}}</td>
                    <td>{{ link_to_route('topics.edit', 'Edit', array($topic->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('topics.destroy', $topic->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
