@extends('layouts.member')
@section('content')
<div class="grid">
        	<div class="mod">
        		<div class="hd hd-1">
        			<h3>账户信息</h3>
                    <div class="fr">
                        <ul id="Tabs-1" class="tabs">
                            <li><a href="#">个人资料</a></li>
                            <li><a href="#">修改密码</a></li>
                        </ul>
                    </div>
        		</div>
            	<div class="bd bd-1">
                    <div class="panes-1">
                        <div>
                            <dl class="user-info">
                                <dt>基本信息：</dt>
                                <dd>
                                    <div id="change_div" class="user-option user-option-first cf" >
                                        <ul>
                                            <li><div class="avatar avatar-normal"><img src="images/avatar.jpg" alt="头像" /></div></li>
                                            <li>姓名：<span id="checkname">{{{$user->name}}}</span></li>
                                            <li>性别：<span id="checkgender">{{{$user->gender}}}</span></li>
                                            <li>出生日期：<span id="checkbirthday">{{{$user->birthday}}}</span></li>
                                            <li>就读学校：<span id="checkschool">{{{ $user->school}}} </span></li>
                                        </ul>
                                    </div>
                                </dd>
                                <dt>学习信息：</dt>
                                <dd>
                                    <div class="user-option cf">
                                        <ul>
                                            <li>希望就读学校：哈佛</li>
                                            <li>每天复习时间：{{{$user->study_time_everyweek}}}</li>
                                            <li>单词量估计：{{{$user->learn_words}}}词</li>
                                            <li>当前水平：中级</li>
                                        </ul>
                                   </div>
                                 </dd>
                                    <a href="/update_user">
                                       <input class="btn btn-large btn-gray fr css3" type="button" value="修 改"  />
                                  </a>
                                    
                                <dt>付费信息：</dt>
                                <dd>
                                    <div class="user-option cf">
			@foreach ($payments as $payment)
                                        <ul>
                                            <li>已购买服务：{{{ $payment->type }}} {{{ $payment->count }}}天</li>
                                            <li>购买时间：{{{ $payment->created_at }}}</li>
                                            <li>剩余时间：<strong class="c-red">{{{ $payment->count }}}</strong> 天</li>
                                        </ul>
      <br>
			@endforeach
                                    </div>
                                </dd>                          
                            </dl>                            
                        </div><!-- user info -->

                        <div>
                            <form action="/usercenter/updatepassword" method="post" onsubmit="return Submit();">
                                <div class="form form-2 form-psw">
                                    <table>
                                        <tr>
                                            <th>输入旧密码：</th>
                                            <td>
                                                <input class="ipt-txt ipt-large ipt-w2" type="password" name="oldpassword" id="oldpassword" value={{{$user->password}}} />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>输入新密码：</th>
                                            <td>
                                                <input class="ipt-txt ipt-large ipt-w2" type="password" name="newpassword" id="newpassword" placeholder="输入标签" onblur="emp();"/>
                                                  <span id="new"  >密码不能为空</span>  
                                             </td>
                                        </tr>
                                        <tr>
                                            <th>确认新密码：</th>
                                            <td>
                                                <input class="ipt-txt ipt-large ipt-w2" type="password" name="newpasswordone" id="newpasswordone" placeholder="输入标签" onblur="empt();" />
                                             <span id="newp">密码不能为空</span> 
                                           </td>
                                        </tr>                                        
                                    </table>
                                    <p class="btn-wrap">
                                    <input class="btn btn-large btn-blue css3" id="sub" type="submit" value="确 定" />
                                    <input class="btn btn-large btn-gray css3" type="reset" value="取 消" />
                                    </p>
                                </div>
                            </form>
                        </div><!-- form password -->

                    </div><!-- Tabs 1 -->
            	</div>
        	</div><!-- mod -->
<script>
$(function() {
    // Tabs 1
    // http://jquerytools.org/demos/tabs/index.html
  $("ul#Tabs-1").tabs("div.panes-1 > div");
  $("#new").hide();
  $("#newp").hide();
  // $("#sub").hide();
});
function emp(){
  var newpasswordone = $("#newpasswordone").val();
  var newpassword = $("#newpassword").val();
if(newpassword==''){
$("#new").show();
return false;
}else{
 $("#new").hide(); 
}
}

function empt(){
 var newpasswordone = $("#newpasswordone").val();
 var newpassword = $("#newpassword").val();
  if(newpasswordone==''){
$("#newp").show();
}else{
$("#newp").hide();

}
 }

function Submit(){
 var newpasswordone = $("#newpasswordone").val();
 var newpassword = $("#newpassword").val();
 if(newpasswordone!=newpassword){
alert("两次输入的密码不一致，请重新输入！");
return false;
}
  if(newpassword==''||newpasswordone==''){
alert("密码不能为空！");
return false;
}
return true;
}


function change(){
  $("#change_div").css('display','none');
  $("#check_div").css('display','block');
}
function check(){
  $("#check_div").css('display','none');
  $("#change_div").css('display','block');
}

</script>

@stop
