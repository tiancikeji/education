@extends('layouts.scaffold')

@section('main')

<h1>All Articles</h1>

<p>{{ link_to_route('articles.create', 'Add new article') }}</p>

@if ($articles->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Content</th>
				<th>Paper_id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($articles as $article)
				<tr>
					<td>{{{ $article->no }}}</td>
					<td>{{{ $article->content }}}</td>
					<td>{{{ $article->paper_id }}}</td>
                    <td>{{ link_to_route('articles.edit', 'Edit', array($article->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('articles.destroy', $article->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no articles
@endif

@stop
