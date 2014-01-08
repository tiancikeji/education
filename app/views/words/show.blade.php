@extends('layouts.scaffold')

@section('main')

<h1>Show Word</h1>

<p>{{ link_to_route('words.index', 'Return to all words') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>English</th>
				<th>Chinese</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $word->english }}}</td>
					<td>{{{ $word->chinese }}}</td>
                    <td>{{ link_to_route('words.edit', 'Edit', array($word->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('words.destroy', $word->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
