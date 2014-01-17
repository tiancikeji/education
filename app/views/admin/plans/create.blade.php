@extends('layouts.admin')

@section('main')

<h1>创建模板 </h1>

{{ Form::open(array('route' => 'admin.plans.store')) }}
  <ul>
        <li>
            {{ Form::label('name', '模板名称：') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('days', '总天数：') }}
            {{ Form::text('days') }}
        </li>
        <li>
            {{ Form::label('is_sprint', '是否冲刺:') }}
            <input type="radio" name="is_sprint" value="1" />是
            <input type="radio" name="is_sprint" value="0" />否
        </li>

        <li>
            {{ Form::label('type', '任务类型:') }}
<input type="radio" name="type" value="TEST" />单词测试 
<input type="radio" name="type" value="HOMEWORK" />作业  
<input type="radio" name="type" value="VIDEO" />观看视频 
<input type="radio" name="type" value="EXAM" />阶段测验
        </li>

    <li>
      {{ Form::submit('保存', array('class' => 'btn btn-info')) }}
    </li>
  </ul>
{{ Form::close() }}

@if ($errors->any())
  <ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
  </ul>
@endif


@stop
