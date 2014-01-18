@extends('layouts.admin')

@section('main')

<h1>显示作业测试模板 </h1>

<p>{{ link_to_route('admin.homeworks.index', '返回全部作业测试模板') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th> 名称</th>
				<th>练习id </th>
				<th>老师id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $homework->name }}}</td>
					<td>{{{ $homework->exercise_ids }}}</td>
					<td>{{{ $homework->teacher_id }}}</td>
                    <td>{{ link_to_route('admin.homeworks.edit', ' 编辑', array($homework->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.homeworks.destroy', $homework->id))) }}
                            {{ Form::submit(' 删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
