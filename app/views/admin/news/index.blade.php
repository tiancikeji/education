@extends('layouts.admin')

@section('main')

<h1>全部消息  </h1>

<p>{{ link_to_route('admin.news.create', '新增消息') }}</p>

@if ($news->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
        <th>图像</th>
				<th>作者</th>
				<th>发布时间 </th>
				<th>简介</th>
				<th>标题</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($news as $news)
				<tr>
<td><img src="{{{ $news->overlay }}}" alt="" style="width:100px;height:100px;" /></td>
					<td>{{{ $news->author }}}</td>
					<td>{{{ $news->created_at }}}</td>
					<td>{{{ $news->subtitle }}}</td>
					<td>{{{ $news->title }}}</td>
                    <td>{{ link_to_route('admin.news.edit', '编辑', array($news->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.news.destroy', $news->id))) }}
                            {{ Form::submit('删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no news
@endif

@stop
