@extends('layouts.admin')

@section('main')

<h1>学生列表</h1>


	<link href="/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.css" rel="stylesheet">
	<script src="/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.js"></script>
  <script>
  $(function() {
    $("#created_at_begin").datepicker({ dateFormat: 'yy-mm-dd' });
    $("#created_at_end").datepicker({ dateFormat: 'yy-mm-dd' });
  });
  </script>
 
<form action="/admin/users" method="get" accept-charset="utf-8">
付费状况： 
<select name="payment" >
  <option value="1">已付</option>
  <option value="2">未付</option>
</select>
所属教师： 
<select name="teacher_id" id="">
      <option value="all">全部</option>
 			@foreach (Teacher::take(100)->get() as $teacher)
					<option value="{{{ $teacher->id }}}">{{{ $teacher->name }}}</option>
			@endforeach
</select>
评级状况： 
<select name="" id="">
<option value="a">A</option>
<option value="b">B</option>
<option value="c">C</option>
<option value="d">D</option>
</select>
作文状态： 
<select name="compositions" >
  <option value="all">全部</option>
  <option value="1">有</option>
  <option value="0">无</option>
</select>
<br>
注册开始日期：
<input type="text" name="created_at_begin" id="created_at_begin" value="" />
注册结束日期：
<input type="text" name="created_at_end" id="created_at_end" value="" />
<!-- 付费时间：  -->

<!-- <select name="" id=""> -->
<!--   <option value="">全部</option> -->
<!-- </select> -->
<!-- 日程状态： -->
<!-- <select name="" id=""> -->
<!--   <option value="">全部</option> -->
<!-- </select> -->
<br/>
ID搜索:<input type="text" name="id" >
姓名搜索:<input type="text" name="name" >
<input type="submit" value="搜索">
</form>
</th>
</tr>
</thead>
</table>
<p>{{ link_to_route('admin.users.create', '新增用户') }}</p>
  <table class="table  table-bordered">
    <thead>
      <tr>
        <th>学生id</th>
        <th>用户名</th>
        <th>姓名</th>
        <th>是否付费</th>
        <th>注册日期</th>
        <th>水平评级</th>
        <th>作文批改</th>
        <!-- <th>日程</th> -->
        <th>操作</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($users as $user)
        <tr>
<td>{{{ $user->id }}}</td>
<td>{{{ $user->email }}}</td>
<td>{{{ $user->name }}}</td>
<td>

@if(count(Payment::where("user_id",'=',$user->id)->get()) > 0)
     <font color="red">付费</font>
@endif
<a href="/admin/payments?user_id={{{ $user->id }}}">查看</a>
</td>
<td>
  {{{substr($user->created_at,0,10)  }}}
</td>
<td>
  {{ Exam::where('user_id','=',$user->id)->count() }}
</td>
<td>
@if(count(Composition::where("user_id",'=',$user->id)->get()) > 0)
     <font color="red">是</font>
      <a href="/admin/compositions?user_id={{{$user->id}}}">批改</a>
@endif
</td>
<!-- <td> -->

<!-- <a href="/admin/userplans?user_id={{{ $user->id }}}"> -->
<!-- {{ Userplan::where('user_id','=',$user->id)->count() }} -->
<!-- </a> -->
<!-- </td> -->
                    <td>
<a href="/admin/users/{{{ $user->id }}}">查看学生信息</a> 
<a href="/admin/compositions?user_id={{{ $user->id }}}" >批改作文 </a>
<a href="/admin/exams?user_id={{{ $user->id }}}">做题历史</a>
<a href="/admin/messages/create?user_id={{{ $user->id }}} ">发送信息</a>   
<a href="/admin/userplans/create?user_id={{{ $user->id }}}">安排日程</a>
<a href="/admin/userteachers/create?user_id={{{ $user->id }}}">分配教师 </a>
                    </td>
        </tr>
      @endforeach
    </tbody>
  </table>


@stop
