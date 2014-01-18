@extends('layouts.admin')

@section('main')

<h1>显示消息  </h1>

<p>{{ link_to_route('admin.messages.index', '返回全部消息') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>标题</th>
				<th>内容</th>
        <th>已读</th>
				<th>类型</th>
				<th>用户id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $message->title }}}</td>
					<td>{{{ $message->body }}}</td>
					<td>{{{ $message->is_read }}}</td>
					<td>{{{ $message->type }}}</td>
					<td>{{{ $message->user_id }}}</td>
                    <td>{{ link_to_route('admin.messages.edit', '编辑', array($message->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('messages.destroy', $message->id))) }}
                            {{ Form::submit('删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
