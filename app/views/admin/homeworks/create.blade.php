@extends('layouts.admin')

@section('main')

<h1>创建作业测试模板</h1>

{{ Form::open(array('route' => 'admin.homeworks.store')) }}
	<ul>
        <li>
            {{ Form::label('name', '名称:') }}
            {{ Form::text('name') }}
            <select name="type">
                <option value="TEST">作业</option>
                <option value="HOMEWORK">测试</option>
            </select>
        </li>

		<li>
			{{ Form::submit('提交', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


