@extends('layouts.admin')

@section('main')

<h1>学生列表</h1>

<form action="/users/students/search" method="get" accept-charset="utf-8">
付费状况： 
<select name="" id="">
  <option value="">全部</option>
</select>
所属教师： 
<select name="" id="">
  <option value="">全部</option>
</select>
评级状况： 
<select name="" id="">
  <option value="">全部</option>
</select>
作文状态： 
<select name="" id="">
  <option value="">全部</option>
</select>
注册日期： 
<select name="" id="">
  <option value="">全部</option>
</select>
付费时间： 
<select name="" id="">
  <option value="">全部</option>
</select>
日程状态：
<select name="" id="">
  <option value="">全部</option>
</select>
<input type="submit" value="go" />
</form>

<p>{{ link_to_route('admin.users.create', 'Add new user') }}</p>
全部: {{{ $users->count() }}}
@if ($users->count())
	<table class="table  table-bordered">
		<thead>
			<tr>
        <th>用户id</th>
				<th>用户名</th>
        <th>昵称</th>
        <th>付费情况</th>
        <th>注册日期</th>
        <th>水平评级</th>
        <th>操作</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($users as $user)
				<tr>
<td>{{{ $user->id }}}</td>
<td>{{{ $user->email }}}</td>
<td>{{{ $user->name }}}</td>
<td><a href="/admin/payments?user_id={{{ $user->id }}}">查看</a></td>
<td>{{{ $user->created_at }}}</td>
<td></td>
                    <td>
 {{ link_to_route('admin.users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info')) }}
<a href="/admin/users/{{{ $user->id }}}">查看学生信息</a> 
<a href="">发送信息</a>   
<a href="">安排日程</a>
                        <a href="/admin/teachers">分配教师 </a>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.users.destroy', $user->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no users
@endif


@stop
