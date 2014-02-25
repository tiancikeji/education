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
                                      <input type="text" name="email" class="ipt-txt ipt-large ipt-w2" id="email" onblur="em();" placeholder="请输入邮箱" >    
                                      <span id="ema"class="c-red">请正确输入邮箱</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>姓名：</th>
                                    <td>
                                      <input type="text" name="name" class="ipt-txt ipt-large ipt-w2" id="name" onblur="na();" placeholder="请输入姓名" >    
                                      <!-- {{ Form::text('name','',array('class'=>'ipt-txt ipt-large ipt-w2')) }} -->
                                      <span id="na"class="c-red">请正确输入姓名</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>密码：</th>
                                    <td>
                                        <input class="ipt-txt ipt-large ipt-w2" type="password" name="password" id="password" placeholder="请输入密码" onblur="passw();" />
                                        <span id="mima"class="c-red">密码:6-16位字符，只包含字母数字</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>密码确认：</th>
                                    <td>
                                        <input class="ipt-txt ipt-large ipt-w2" type="password" name="password" id="passwordone" placeholder="请再次输入密码" onblur="com();" />
                                    <span id="new"class="c-red">密码不能为空 </span >
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
<script>
$(function(){
  $("#new").hide();
  $("#ema").hide();
 $("#mima").hide();
 $("#na").hide();
})

function na(){
var name=$("#name").val();
// var myname=/^[0-9a-zA-Z]{5,15}$/;
 var re =/^[\u4e00-\u9fa5]+$/
if(!re.test(name)){
$("#na").show();
}else{
$("#na").hide();
}
}

function passw(){
var password =$("#password").val();
var mypassword=/^[0-9a-zA-Z]{6,16}$/;
if(!mypassword.test(password)){
  $("#mima").show();
}else{
$("#mima").hide();
}
}
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
  alert("两次输入的密码不一致");
return false; 
 }
var password =$("#password").val();
var mypassword=/^[0-9a-zA-Z]{6,16}$/;
if(!mypassword.test(password)){
 return false; 
}
var name=$("#name").val();
 var re =/^[\u4e00-\u9fa5]+$/
if(!re.test(name)){
return false; } 
return true;

}




</script>

@stop
