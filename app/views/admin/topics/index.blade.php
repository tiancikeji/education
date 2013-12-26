@extends('layouts.admin')

@section('main')

<h1>All Topics</h1>

<p>{{ link_to_route('admin.topics.create', 'Add new topic') }}</p>

@if ($topics->count())
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
			@foreach ($topics as $topic)
				<tr>
					<td>{{{ $topic->author }}}</td>
					<td>{{{ $topic->titile }}}</td>
					<td>{{{ $topic->pic_url }}}</td>
					<td>{{{ $topic->type }}}</td>
					<td>{{{ $topic->status }}}</td>
					<td>{{{ $topic->body }}}</td>
                    <td>{{ link_to_route('admin.topics.edit', 'Edit', array($topic->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.topics.destroy', $topic->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no topics
@endif

@stop
