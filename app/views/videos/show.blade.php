@extends('layouts.member')

@section('content')

<h1>Show Video</h1>


<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Author</th>
				<th>Url</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $video->author }}}</td>
					<td>{{{ $video->url }}}</td>
		</tr>
	</tbody>
</table>

@stop
