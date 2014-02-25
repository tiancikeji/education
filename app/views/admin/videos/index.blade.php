@extends('layouts.admin')

@section('main')

<h1>全部视频 </h1>

<p>{{ link_to_route('admin.videos.create', '增加新视频') }}</p>

@if ($videos->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
        <th>名称</th>
        <th>预览图</th>
				<th>视频文件名称</th>
        <th>试题年月</th>
        <th>section</th>
        <th>标签</th>
        <th>播放次数</th>
        <th>评论次数</th>
<th></th>
			</tr>
		</thead>

		<tbody>
			@foreach ($videos as $video)
				<tr>
					<td>{{{ $video->title }}}</td>
					<td><img src="{{{ $video->overlay }}}" alt="" style="width:100px;height:100px;" /></td>
					<td>{{{ $video->url }}}</td>
<td>{{$video->year}}年{{$video->month}}月</td>
<td>{{$video->section}}</td>
<td>{{$video->tags}}</td>
<td>{{$video->play_count}}</td>
<td>{{Comment::where('video_id','=',$video->id)->count()}}</td>
                    <td>{{ link_to_route('admin.videos.edit', '编辑 ', array($video->id), array('class' => 'btn btn-info')) }}
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
