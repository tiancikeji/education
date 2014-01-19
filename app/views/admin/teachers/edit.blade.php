@extends('layouts.admin')

@section('main')

<h1>编辑教师   </h1>
{{ Form::model($teacher, array('method' => 'PATCH', 'route' => array('admin.teachers.update', $teacher->id))) }}
	<ul>
        <li>
            {{ Form::label('name', '姓名 :') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('username', '用户名 :') }}
            {{ Form::text('username') }}
        </li>

        <li>
            {{ Form::label('password', '密码:') }}
            {{ Form::text('password') }}
        </li>
        
          <li>
          <label for="">权限：</label>
          <ul>
			@foreach ($permissions as $permission)
            <li>
              <input type="checkbox" name="permission_ids[]" value={{{ $permission->id }}} <?php if(in_array($permission->id,$permission_ids)){ echo "checked"; } ?> /> {{{ $permission->name }}}
            </li>
			@endforeach
          </ul>
        </li>
		<li>
			{{ Form::submit('提交', array('class' => 'btn btn-info')) }}
			{{ link_to_route('admin.teachers.show', '取消', $teacher->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
