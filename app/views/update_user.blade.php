@extends('layouts.member')
@section('content')

        <div class="grid">

        	<div class="mod">
        		<div class="hd hd-1">
        			<h3>基础情况调查</h3>
        		</div>
            	<div class="bd bd-2">
<input type="hidden" id="genderchange" value={{{$user->gender}}} />
<input type="hidden" id="gradeis" value={{{$user->grade}}} />
<input type="hidden" id="hopelearnwords" value={{{$user->hope_learn_words}}} />
                    <p>为了给您提供更有针对性的测评报告，请您配合完成以下问题：</p>
                    <form action="/usercenter/update" method="post">
                        <div class="form form-3">
                            <table>
                                <tr>
                                    <th><strong>基本信息</strong>&nbsp;&nbsp;</th>
                                    <td>                                    
                                          <img src="images/avatar.jpg" alt="头像" />
                                    </td>
                                </tr>
                                <tr> 
                                     <th> 姓名：</th>
                                      <td>
                                     <input class="ipt-txt ipt-large" type="text" name="name" id="name"  value={{{$user->name}}} />
                                    </td>
                                 </tr>
                            <tr>
                                 <th> 性别：</th>
                                <td>
                                   <input type="radio" name="gender" id="gender"  value="男" />男
                                   <input type="radio" name="gender" id="gendernv" value="女">女
                                 </td>         
                          </tr>
                                <tr>
                                    <th>出生日期：</th>
                                    <td>
                                      <input class="ipt-txt ipt-large" type="text" name="birthday" value={{{$user->birthday}}} />
                                    </td>
                                    </td>
                                </tr> 
                                <tr>
                                    <th>所在地：</th>
                                    <td>
                                      <input  class="ipt-txt ipt-large" type="text" name="location" value={{{$user->location}}} />
                                    </td>
                                </tr>
                                <tr>
                                    <th>所在高中：</th>
                                    <td>
                                      <input  class="ipt-txt ipt-large" type="text" name="school" value={{{$user->school}}} />
                                    </td>
                                </tr>
                                <tr>
                                    <th>所在年级：</th>
                                    <td>                                  
                                        <label for="radio334"><input type="radio" name="grade" id="gradeone" value="高一" /> 高一</label>
                                        <label for="radio435"><input type="radio" name="grade" id="gradetwo" value="高二" /> 高二</label>
                                        <label for="radio536"><input type="radio" name="grade" id="gradethree" value="高三" /> 高三</label>
                                   </td>
                                </tr>
                                <tr>
                                    <th><strong>出国及考试信息</strong>&nbsp;&nbsp;</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>目标学校：</th>
                                    <td>
                                      <input  class="ipt-txt ipt-large" type="text" name="dream_school" value={{{$user->dream_school}}} />
                                    </td>
                                </tr>
                                <tr>
                                    <th>想去原因：</th>
                                    <td>
                                        <textarea name="reason" class="textarea ipt-w3">{{{$user->reason}}}</textarea>
                                    </td>
                                </tr>                                                                                                       
                                <tr>
                                    <th>SAT期望成绩：</th>
                                    <td>
                                        <input class="ipt-txt ipt-large" type="text" name="sat_hope_grade" value={{{$user->sat_hope_grade}}} />
                                    </td>
                                </tr>
                                <tr>
                                    <th>平均每周复习时间：</th>
                                    <td>
                                        <input class="ipt-txt ipt-large" type="text" name="study_time_everyweek" value={{{$user->study_time_everyweek}}} />
                                    </td>
                                </tr>
                                <tr>
                                    <th>词汇量估计：</th>
                                    <td>
                                        <input class="ipt-txt ipt-large" type="text" name="learn_words" value={{{$user->learn_words}}} />
                                    </td>
                                </tr>
                                <tr>
                                    <th>期望背完单词时间：</th>
                                    <td>                                  
                                        <label for="radio331"><input type="radio" name="hope_learn_words" id="hopeone" value="1" /> 45天（每天约100词）</label>
                                        <label for="radio431"><input type="radio" name="hope_learn_words" id="hopetwo" value="2" /> 30天（每天约200词）</label>
                                        <label for="radio531"><input type="radio" name="hope_learn_words" id="hopethree" value="3" /> 15天（每天约300词）</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>希望每月获得的作文批改次数：</th>
                                    <td>
                                        <input class="ipt-txt ipt-large" type="text" name="hope_compisition_times" value={{{$user->hope_compisition_times}}} />
                                    </td>
                                </tr>                                                                                            
                            </table>
                        </div>
                               <input type="hidden"  name="number" value={{{ $user->id}}} />
                      <tr>
                          <td>
                              <input class="btn btn-large btn-gray fr css3" type="submit" value="确 定" />
                          </td>
                      </tr>   
                    </form>

                    <p class="ac pt-50">
                        <a href="test-report.html"><input class="btn btn-large btn-blue css3" type="button" value="查看报告" /></a>
                    </p>

            	</div>
          	</div><!-- mod -->
<script>
$(function(){
 var genderchange=$("#genderchange").val();
if(genderchange=="男"){
 $("#gender").attr('checked','true');  
  } 
 if(genderchange=="女"){
$("#gendernv").attr('checked','true'); 
 }

var gradeis=$("#gradeis").val();
if(gradeis=="高一"){
$("#gradeone").attr('checked','true');
}
if(gradeis=="高二"){
$("#gradetwo").attr('checked','true');
}
if(gradeis=="高三"){
$("#gradethree").attr('checked','true');
} 

var hopelearnwords=$("#hopelearnwords").val();
if(hopelearnwords=="1"){
$("#hopeone").attr('checked','true');
}
if(hopelearnwords=="2"){
$("#hopetwo").attr('checked','true');
}
if(hopelearnwords=="3"){
$("#hopethree").attr('checked','true');
}
});
</script>
@stop
