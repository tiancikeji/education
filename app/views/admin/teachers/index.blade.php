@extends('layouts.admin')

@section('main')

<h1>全部教师 </h1>

<p>{{ link_to_route('admin.teachers.create', '增加新老师') }}</p>

@if ($teachers->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>姓名</th>
        <th>教师ID</th>
				<th>用户名</th>
        <td>创建时间</td>
        <!-- <td>权限</td> -->
<td></td>
			</tr>
		</thead>

		<tbody>
			@foreach ($teachers as $teacher)
				<tr>
					<td>{{{ $teacher->name }}}</td>
          <td>{{{ $teacher->id }}}</td>
					<td>{{{ $teacher->username }}}</td>
<td>{{{substr($teacher->created_at,0,10)}}}</td>

 <td>{{ link_to_route('admin.teachers.edit', '编辑 ', array($teacher->id), array('class' => 'btn btn-info')) }}</td>

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
