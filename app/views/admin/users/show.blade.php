@extends('layouts.admin')

@section('main')

<h1>显示用户 </h1>

<p>{{ link_to_route('admin.users.index', '返回全部用户') }}</p>

<table class="table table-striped table-bordered">
  <thead>
<tr>
<th>学生id</th>
<th>姓名</th>
<th>性别</th>
<th>出生日期</th>
<th>用户名</th>
</tr>
<tr>
<td>{{{ $user->id }}}</td>
<td>{{{ $user->name }}}</td>
<td>{{{ $user->gender }}}</td>
<td>{{{ $user->birthday }}}</td>
<td>{{{ $user->email }}}</td>
</tr>
  <br/>  
<tr>
<th>所在高中</th>
<th>希望就读学校</th>
<th>年级</th>
<th>所在地</th>
<th>注册日期</th>
</tr> 
<tr>
<td>{{{ $user->school }}}</td>
<td>{{{ $user->dream_school }}}</td>
<td>{{{ $user->grade }}}</td>
<td>{{{ $user->location }}}</td> 
<td>{{{ $user->created_at }}}</td>
</tr>
 
<tr>
<th>水平评级</th>
<th>sat期望成绩</th>
<th>单词量估计</th>
<th>每天复习时间</th>
<th>单词预期时间</th>

<!-- <th>想去原因</th> -->
</tr>

<tr>
<td>
  {{ Exam::where('user_id','=',$user->id)->count() }}
</td>
<td>{{{ $user->sat_hope_grade }}}</td>
<td>{{{ $user->learn_words }}}</td>
<td>{{{ $user->study_time_everyweek }}}</td>
<td>
{{{$user->hope_learn_words}}}
</td>
</tr> 
<input type="hidden" id="hopelearnwords" value={{{$user->hope_learn_words}}} />

  </thead>
  <!-- <tbody> -->

<!-- <td>{{{ $user->reason }}}</td> -->

                    <!-- <td>{{ link_to_route('admin.users.edit', '编辑', array($user->id), array('class' => 'btn btn-info')) }}</td> -->
                    <!-- <td> -->
                        <!-- {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.users.destroy', $user->id))) }} -->
                            <!-- {{ Form::submit('删除', array('class' => 'btn btn-danger')) }} -->
                        <!-- {{ Form::close() }} -->
                    <!-- </td> -->
  <!-- </tbody> -->
</table>

@stop
