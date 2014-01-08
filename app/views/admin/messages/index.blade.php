@extends('layouts.admin')

@section('main')

<h1>All Messages</h1>

<p>{{ link_to_route('admin.messages.create', 'Add new message') }}</p>

@if ($messages->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Title</th>
				<th>Body</th>
				<th>Is_read</th>
				<th>Type</th>
				<th>User_id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($messages as $message)
				<tr>
					<td>{{{ $message->title }}}</td>
					<td>{{{ $message->body }}}</td>
					<td>{{{ $message->is_read }}}</td>
					<td>{{{ $message->type }}}</td>
					<td>{{{ $message->user_id }}}</td>
                    <td>{{ link_to_route('admin.messages.edit', 'Edit', array($message->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.messages.destroy', $message->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no messages
@endif

@stop
