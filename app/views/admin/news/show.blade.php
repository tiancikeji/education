@extends('layouts.admin')

@section('main')

<h1>显示全部消息 </h1>

<p>{{ link_to_route('admin.news.index', '返回全部消息') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
      <th>图像</th>
			<th>作者</th>
				<th>发布时间</th>
				<th>内容</th>
				<th>题目</th>
		</tr>
	</thead>

	<tbody>
		<tr>
      <td><img src="{{{ $news->overlay }}}" alt="" /></td>
			<td>{{{ $news->author }}}</td>
					<td>{{{ $news->published_date }}}</td>
					<td>{{{ $news->body }}}</td>
					<td>{{{ $news->title }}}</td>
                    <td>{{ link_to_route('admin.news.edit', '编辑', array($news->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.news.destroy', $news->id))) }}
                            {{ Form::submit('删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
