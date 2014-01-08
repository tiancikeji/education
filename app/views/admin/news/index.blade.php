@extends('layouts.admin')

@section('main')

<h1>All News</h1>

<p>{{ link_to_route('admin.news.create', 'Add new news') }}</p>

@if ($news->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Author</th>
				<th>Published_date</th>
				<th>Body</th>
				<th>Title</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($news as $news)
				<tr>
					<td>{{{ $news->author }}}</td>
					<td>{{{ $news->published_date }}}</td>
					<td>{{{ $news->body }}}</td>
					<td>{{{ $news->title }}}</td>
                    <td>{{ link_to_route('admin.news.edit', 'Edit', array($news->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.news.destroy', $news->id))) }}
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
