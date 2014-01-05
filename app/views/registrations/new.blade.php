@extends('layouts.main')
@section('content')
        <div class="grid">

            <div class="mod">
                <div class="hd hd-1">
                    <h3>注册</h3>
                </div>
                <div class="bd bd-2">

{{ Form::open(array('url' => 'registrations/store')) }}
                        <div class="form form-2">
                            <table>
                                <tr>
                                    <th>用户名：</th>
                                    <td>
                                      {{ Form::text('email','',array('class'=>'ipt-txt ipt-large ipt-w2')) }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>昵称：</th>
                                    <td>
                                      {{ Form::text('name','',array('class'=>'ipt-txt ipt-large ipt-w2')) }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>密码：</th>
                                    <td>
                                      {{ Form::text('password','',array('class'=>'ipt-txt ipt-large ipt-w2')) }}
                                        <span class="c-red">密码需包含大小写字母及数字，在6位以上</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>密码确认：</th>
                                    <td>
                                        <input class="ipt-txt ipt-large ipt-w2" type="password" name="" id="" placeholder="请再次输入密码" />
                                    </td>
                                </tr>
                            </table>
                            <p class="btn-wrap">
			                        {{ Form::submit('注 册', array('class' => 'btn btn-large btn-green css3')) }}
                            </p>
                        </div>
{{ Form::close() }}
                </div>
@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif


@stop
