@extends('layouts.admin')

@section('main')

<h1>显示全部教师</h1>

<p>{{ link_to_route('admin.userteachers.index', '返回全部教师') }}</p>

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th> 用户id</th>
        <th> 教师id</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>{{{ $userteacher->user_id }}}</td>
          <td>{{{ $userteacher->teacher_id }}}</td>
                    <td>{{ link_to_route('admin.userteachers.edit', ' 编辑', array($userteacher->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.userteachers.destroy', $userteacher->id))) }}
                            {{ Form::submit('删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
    </tr>
  </tbody>
</table>

@stop
