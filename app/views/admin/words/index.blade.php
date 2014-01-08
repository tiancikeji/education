@extends('layouts.admin')

@section('main')

<h1>All Words</h1>

<p>{{ link_to_route('admin.words.create', 'Add new word') }}</p>

@if ($words->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>English</th>
				<th>Chinese</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($words as $word)
				<tr>
					<td>{{{ $word->english }}}</td>
					<td>{{{ $word->chinese }}}</td>
                    <td>{{ link_to_route('admin.words.edit', 'Edit', array($word->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.words.destroy', $word->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no words
@endif

@stop
