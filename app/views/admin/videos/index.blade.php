@extends('layouts.admin')

@section('main')

<h1>All Videos</h1>

<p>{{ link_to_route('admin.videos.create', 'Add new video') }}</p>

@if ($videos->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Author</th>
        <th>Title</th>
        <th>Overlay</th>
				<th>Url</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($videos as $video)
				<tr>
					<td>{{{ $video->author }}}</td>
					<td>{{{ $video->title }}}</td>
					<td><img src="{{{ $video->overlay }}}" alt="" /></td>
					<td>{{{ $video->url }}}</td>
                    <td>{{ link_to_route('admin.videos.edit', 'Edit', array($video->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.videos.destroy', $video->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no videos
@endif

@stop
