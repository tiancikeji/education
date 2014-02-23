@extends('layouts.admin')

@section('main')

<h1>全部视频 </h1>

<p>{{ link_to_route('admin.videos.create', '增加新视频') }}</p>

@if ($videos->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>作者</th>
        <th>标题</th>
        <th>图像</th>
				<th>Url</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($videos as $video)
				<tr>
					<td>{{{ $video->author }}}</td>
					<td>{{{ $video->title }}}</td>
					<td><img src="{{{ $video->overlay }}}" alt="" style="width:100px;height:100px;" /></td>
					<td>{{{ $video->url }}}</td>
                    <td>{{ link_to_route('admin.videos.edit', '编辑 ', array($video->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.videos.destroy', $video->id))) }}
                            {{ Form::submit('删除', array('class' => 'btn btn-danger')) }}
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
