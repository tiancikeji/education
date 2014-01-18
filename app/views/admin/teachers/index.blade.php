@extends('layouts.admin')

@section('main')

<h1>全部教师 </h1>

<p>{{ link_to_route('admin.teachers.create', '增加新老师') }}</p>

@if ($teachers->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>名称</th>
				<th>用户名称</th>
				<th>密码 </th>
			</tr>
		</thead>

		<tbody>
			@foreach ($teachers as $teacher)
				<tr>
					<td>{{{ $teacher->name }}}</td>
					<td>{{{ $teacher->username }}}</td>
					<td>{{{ $teacher->password }}}</td>
                    <td>{{ link_to_route('admin.teachers.edit', '编辑', array($teacher->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.teachers.destroy', $teacher->id))) }}
                            {{ Form::submit('删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no teachers
@endif

@stop
