@extends('layouts.main')
@section('content')
        <div class="grid">

            <div class="mod">
                <div class="hd hd-1">
                    <h3>注册成功  请查收邮箱验证并登录</h3>
                </div>
<br>
@if(Session::has('message'))
    <div class="alert-box error">
        <h2>{{ Session::get('message') }}</h2>
    </div>
@endif
 
<a href="/sendemail?email={{{Session::get('current_user_email')}}}">重新发送邮件</a>

@stop
