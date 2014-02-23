@extends('layouts.main')
@section('content')

        <div class="grid">

            <div class="mod">
                <div class="hd hd-1">
                    <h3>发送新密码</h3>
                </div>
                <div class="bd bd-2">
@if(Session::has('message'))
    <div class="alert-box error">
        <h2>{{ Session::get('message') }}</h2>
    </div>
@endif
                    <form action="/resetpassword" method="post">
                        <div class="form form-2">
                            <table>
                                <tr>
                                    <th>邮箱：</th>
                                    <td>
                                        <input class="ipt-txt ipt-large ipt-w2" type="text" name="email" id="" placeholder="请输入邮箱" />
                                    </td>
                                </tr>
                            </table>
                            <p class="btn-wrap">
                                <input class="btn btn-large btn-blue css3" type="submit" value="发送新密码" />
                            </p>
                        </div>
                    </form>
                </div>
            </div><!-- mod -->        

        </div>

@stop

