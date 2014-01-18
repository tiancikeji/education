@extends('layouts.admin')

@section('main')

<h1>新建付款</h1>

{{ Form::open(array('route' => 'admin.payments.store')) }}
	<ul>
        <li>
            {{ Form::label('type', '类型:') }}
            {{ Form::text('type') }}
        </li>

        <li>
            {{ Form::label('count', '计算:') }}
            {{ Form::input('number', 'count') }}
        </li>

        <li>
            {{ Form::label('fee', '付费:') }}
            {{ Form::text('fee') }}
        </li>

        <li>
            {{ Form::label('total', '总额:') }}
            {{ Form::input('number', 'total') }}
        </li>

        <li>
            {{ Form::label('user_id', ' 用户id :') }}
            {{ Form::input('number', 'user_id') }}
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


