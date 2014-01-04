@extends('layouts.main')
@section('content')
        <div class="grid">

            <div class="mod">
                <div class="hd hd-1">
                    <h3>注册</h3>
                </div>
                <div class="bd bd-2">
                    <form action="/registrations/save" method="post">
                        <div class="form form-2">
                            <table>
                                <tr>
                                    <th>用户名：</th>
                                    <td>
                                        <input class="ipt-txt ipt-large ipt-w2" type="text" name="email" id="" placeholder="请输入邮箱" />
                                    </td>
                                </tr>
                                <tr>
                                    <th>昵称：</th>
                                    <td>
                                        <input class="ipt-txt ipt-large ipt-w2" type="text" name="username" id="" placeholder="请输入昵称" />
                                    </td>
                                </tr>
                                <tr>
                                    <th>密码：</th>
                                    <td>
                                        <input class="ipt-txt ipt-large ipt-w2" type="password" name="password" id="" placeholder="请输入密码" />
                                        <span class="c-red">密码需包含大小写字母及数字，在6位以上</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>密码确认：</th>
                                    <td>
                                        <input class="ipt-txt ipt-large ipt-w2" type="password" name="password" id="" placeholder="请再次输入密码" />
                                    </td>
                                </tr>
                            </table>
                            <p class="btn-wrap">
                                <input class="btn btn-large btn-green css3" type="submit" value="注 册" />
                            </p>
                        </div>
                    </form>
                </div>

@stop
