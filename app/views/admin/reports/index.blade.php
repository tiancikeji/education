@extends('layouts.admin')

@section('main')

<h1>全部报告</h1>

<p>{{ link_to_route('admin.reports.create', '新建报告') }}</p>

@if ($reports->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>用户id</th>
				<th>考试id</th>
				<th>内容</th>
				<th>老师id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($reports as $report)
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
			@endforeach
		</tbody>
	</table>
@else
	 没有报告
@endif

@stop
