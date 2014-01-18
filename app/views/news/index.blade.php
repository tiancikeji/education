@extends('layouts.scaffold')

@section('main')

<h1>全部消息  </h1>

<p>{{ link_to_route('news.create', '增加新消息') }}</p>

@if ($news->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>作者</th>
				<th>发布日期</th>
				<th>内容</th>
				<th>标题</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($news as $news)
				<tr>
					<td>{{{ $news->author }}}</td>
					<td>{{{ $news->published_date }}}</td>
					<td>{{{ $news->body }}}</td>
					<td>{{{ $news->title }}}</td>
                    <td>{{ link_to_route('news.edit', 'Edit', array($news->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('news.destroy', $news->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
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
