@extends('layouts.admin')

@section('main')

<h1>显示视频</h1>

<p>{{ link_to_route('admin.videos.index', '返回全部视频') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th> 作者 </th>
				<th>Url</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $video->author }}}</td>
					<td>{{{ $video->url }}}</td>
                    <td>{{ link_to_route('admin.videos.edit', '编辑', array($video->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.videos.destroy', $video->id))) }}
                            {{ Form::submit(' 删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
