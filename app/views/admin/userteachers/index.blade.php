@extends('layouts.admin')

@section('main')

<h1>全部用户教师</h1>

<p>{{ link_to_route('admin.userteachers.create', 'Add new userteacher') }}</p>

@if ($userteachers->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>用户id</th>
				<th> 教师id </th>
			</tr>
		</thead>

		<tbody>
			@foreach ($userteachers as $userteacher)
				<tr>
					<td>{{{ $userteacher->user_id }}}</td>
					<td>{{{ $userteacher->teacher_id }}}</td>
                    <td>{{ link_to_route('admin.userteachers.edit', '编辑', array($userteacher->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.userteachers.destroy', $userteacher->id))) }}
                            {{ Form::submit('取消', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no userteachers
@endif

@stop
