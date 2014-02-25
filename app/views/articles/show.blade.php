@extends('layouts.scaffold')

@section('main')

<h1>Show Article</h1>

<p>{{ link_to_route('articles.index', 'Return to all articles') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>No</th>
				<th>Content</th>
				<th>Paper_id</th>
		</tr>
	</thead>

	<tbody>
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
	</tbody>
</table>

@stop
