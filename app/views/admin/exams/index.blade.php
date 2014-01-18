@extends('layouts.admin')

@section('main')

<h1>全部考试 </h1>

<p>{{ link_to_route('admin.exams.create', '新建考试') }}</p>

@if ($exams->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>开始时间</th>
				<th>结束时间</th>
				<th>用户id</th>
				<th>文件id</th>
				<th>答案</th>
				<th>评分</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($exams as $exam)
				<tr>
					<td>{{{ $exam->start_time }}}</td>
					<td>{{{ $exam->end_time }}}</td>
					<td>{{{ $exam->user_id }}}</td>
					<td>{{{ $exam->paper_id }}}</td>
					<td>{{{ $exam->answers }}}</td>
					<td>{{{ $exam->score }}}</td>
                    <td>{{ link_to_route('admin.exams.edit', ' 编辑', array($exam->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.exams.destroy', $exam->id))) }}
                            {{ Form::submit(' 删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
没有考试
@endif

@stop
