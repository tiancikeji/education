@extends('layouts.admin')

@section('main')

<h1>显示报告</h1>

<p>{{ link_to_route('admin.reports.index', 'Return to all reports') }}</p>

<table class="table table-striped table-bordered">
	<thead>
    <tr>
        <th>用户id</th>
				<th>考试id</th>
				<th>内容</th>
				<th>老师id</th>
				<th>老师id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $report->user_id }}}</td>
					<td>{{{ $report->exam_id }}}</td>
					<td>{{{ $report->content }}}</td>
					<td>{{{ $report->teacher_id }}}</td>
                    <td>{{ link_to_route('admin.reports.edit', '编辑', array($report->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.reports.destroy', $report->id))) }}
                            {{ Form::submit('删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
