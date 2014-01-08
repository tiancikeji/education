@extends('layouts.scaffold')

@section('main')

<h1>All Mywords</h1>

<p>{{ link_to_route('mywords.create', 'Add new myword') }}</p>

@if ($mywords->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Word_id</th>
				<th>User_id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($mywords as $myword)
				<tr>
					<td>{{{ $myword->word_id }}}</td>
					<td>{{{ $myword->user_id }}}</td>
                    <td>{{ link_to_route('mywords.edit', 'Edit', array($myword->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('mywords.destroy', $myword->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no mywords
@endif

@stop
