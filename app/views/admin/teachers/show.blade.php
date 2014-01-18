@extends('layouts.scaffold')

@section('main')

<h1>显示全部教师 </h1>

<p>{{ link_to_route('teachers.index', '返回全部教师') }}</p>

<table class="table table-striped table-bordered">
	<thead>
    <tr>
      	<th>名称</th>
				<th>用户名称</th>
				<th>密码 </th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $teacher->name }}}</td>
					<td>{{{ $teacher->username }}}</td>
					<td>{{{ $teacher->password }}}</td>
                    <td>{{ link_to_route('teachers.edit', '编辑', array($teacher->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('teachers.destroy', $teacher->id))) }}
                            {{ Form::submit('删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
