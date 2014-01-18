@extends('layouts.admin')

@section('main')

<h1>显示用户 </h1>

<p>{{ link_to_route('admin.users.index', '返回全部用户') }}</p>

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>邮箱</th>
        <th>名称</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>{{{ $user->email }}}</td>
          <td>{{{ $user->name }}}</td>
                    <td>{{ link_to_route('admin.users.edit', '编辑', array($user->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.users.destroy', $user->id))) }}
                            {{ Form::submit('删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
    </tr>
  </tbody>
</table>

@stop
