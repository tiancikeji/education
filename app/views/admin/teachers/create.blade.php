@extends('layouts.admin')

@section('main')

<h1>新建教师</h1>

{{ Form::open(array('route' => 'admin.teachers.store')) }}
	<ul>
        <li>
            {{ Form::label('name', '姓名:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('username', ' 用户名:') }}
            {{ Form::text('username') }}
        </li>

        <li>
            {{ Form::label('password', ' 密码:') }}
            <!-- {{ Form::password('password') }} -->
            {{ Form::text('password') }}

        </li>
        
        <li>
          <label for="">权限：</label>
          <ul>

			@foreach ($permissions as $permission)
            <li>
              <input type="checkbox" name="permission_ids[]" value="{{{ $permission->id }}}" />{{{ $permission->name }}}
            </li>
			@endforeach
          </ul>
        </li>

		<li>
			{{ Form::submit(' 提交', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


