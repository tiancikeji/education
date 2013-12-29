@extends('layouts.admin')

@section('main')

<h1>Show Video</h1>

<p>{{ link_to_route('admin.videos.index', 'Return to all videos') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Author</th>
				<th>Url</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $video->author }}}</td>
					<td>{{{ $video->url }}}</td>
                    <td>{{ link_to_route('admin.videos.edit', 'Edit', array($video->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.videos.destroy', $video->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
