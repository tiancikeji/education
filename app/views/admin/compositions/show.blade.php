@extends('layouts.scaffold')

@section('main')

<h1>显示作文</h1>

<p>{{ link_to_route('compositions.index', ' 返回全部作文') }}</p>

<table class="table table-striped table-bordered">
	<thead>
    <tr>
      	<th>用户id</th>
				<th> 考试id</th>
				<th>标题</th>
				<th>内容</th>
				<th>笔记</th>
				<th>老师id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $composition->user_id }}}</td>
					<td>{{{ $composition->exam_id }}}</td>
					<td>{{{ $composition->title }}}</td>
					<td>{{{ $composition->content }}}</td>
					<td>{{{ $composition->note }}}</td>
					<td>{{{ $composition->teacher_id }}}</td>
                    <td>{{ link_to_route('compositions.edit', ' 编辑', array($composition->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('compositions.destroy', $composition->id))) }}
                            {{ Form::submit('删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
