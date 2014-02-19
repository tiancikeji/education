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
        <td>创建时间</td>
        <td>权限</td>
<td></td>
			</tr>
		</thead>

		<tbody>
			@foreach ($teachers as $teacher)
				<tr>
					<td>{{{ $teacher->name }}}</td>
					<td>{{{ $teacher->username }}}</td>
<td>{{{$teacher->created_at}}}</td>
<td>
			@foreach (Adminpermission::where("teacher_id","=",$teacher->id)->get() as $adminpermission)
			{{{Permission::find($adminpermission->permission_id)->name  }}},
			@endforeach

</td>
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
