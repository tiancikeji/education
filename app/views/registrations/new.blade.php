@extends('layouts.main')
@section('content')
        <div class="grid">

            <div class="mod">
                <div class="hd hd-1">
                    <h3>注册</h3>
                </div>
                <div class="bd bd-2">
@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

<!-- {{ Form::open(array('url' => 'registrations/store')) }} -->
<form action="/registrations/store" method="post" onsubmit="return Sub();">
                        <div class="form form-2">
                            <table>
                                <tr>
                                    <th>邮箱：</th>
                                    <td>
                                      <!-- {{ Form::text('email','',array('class'=>'ipt-txt ipt-large ipt-w2')) }} -->
                                      <input type="text" name="email" class="ipt-txt ipt-large ipt-w2" id="email" onblur="em();">    
                                      <span id="ema">邮箱不符，请重新输入！</span>
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
                                        <input class="ipt-txt ipt-large ipt-w2" type="password" name="password" id="password" placeholder="请输入密码" />
                                        <span class="c-red">密码需包含大小写字母及数字，在6位以上</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>密码确认：</th>
                                    <td>
                                        <input class="ipt-txt ipt-large ipt-w2" type="password" name="password" id="passwordone" placeholder="请再次输入密码" onblur="com();" />
                                    <span id="new">密码不能为空 </span >
                                    </td>
                                </tr>
                            </table>
                            <p class="btn-wrap">
			                        <!-- {{ Form::submit('注 册', array('class' => 'btn btn-large btn-green css3')) }} -->
                            <input type="submit" class="btn btn-large btn-green css3" value="注 册" id="sub">
                            </p>
                        </div>
                </form>
<!-- {{ Form::close() }} -->
                </div>
@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif
<script>
$(function(){
  $("#new").hide();
  $("#ema").hide();
})
function em(){
  var email= $("#email").val();
  var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
  if(!myreg.test(email)){
$("#ema").show();
}else{
$("#ema").hide();
}
}


function com(){
  var password =$("#password").val();
  var passwordone=$("#passwordone").val();
  if(password==''){
  $("#new").show();
  }
}
function Sub(){
  var password =$("#password").val();
  var passwordone=$("#passwordone").val();
   if(password!=passwordone){
  alert("两次密码输入不相符，请重新输入！");
return false; 
 }
return true;

}




</script>

@stop
