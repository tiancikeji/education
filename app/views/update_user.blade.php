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
                    <form action="/usercenter/update" method="post" enctype="multipart/form-data">
                        <div class="form form-3">
                            <table>
                                <tr>
                                    <th><strong>基本信息</strong>&nbsp;&nbsp;</th>
                                    <td>                                    
                                          <img src='{{{$user->overlay}}}' alt="头像" />
                                </br>
                                    <input type="file" name="overlay"  />
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
                                      <input class="ipt-txt ipt-large" type="text" name="birthday" value={{{$user->birthday}}} >
                                    </td>
                                    </td>
                                </tr> 
                                <tr>
                                    <th>所在地：</th>
                                    <td>
                                      <!-- <input  class="ipt-txt ipt-large" type="text" name="location" value={{{$user->location}}} > -->

省份 <select name="province" onChange = "select()"></select>　城市 <select name="city" onChange = "select()"></select><br>
我在 <input type=text name="newlocation" maxlength=12 size=12 style="font-weight: bold">　不能超过12个字符（6个汉字）



                                    </td>
                                </tr>
                                <tr>
                                    <th>所在高中：</th>
                                    <td>
                                      <input  class="ipt-txt ipt-large" type="text" name="school" value={{{$user->school}}} >
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
                                      <input  class="ipt-txt ipt-large" type="text" name="dream_school" value={{{$user->dream_school}}} >
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
                                        <input class="ipt-txt ipt-large" type="text" name="sat_hope_grade" value={{{$user->sat_hope_grade}}} >
                                    </td>
                                </tr>
                                <tr>
                                    <th>每天复习时间：</th>
                                    <td>
                                        <input class="ipt-txt ipt-large" type="text" name="study_time_everyweek" value={{{$user->study_time_everyweek}}} >小时 
                                    </td>
                                </tr>
                                <tr>
                                    <th> 单词量估计：</th>
                                    <td>
                                        <input class="ipt-txt ipt-large" type="text" name="learn_words" value={{{$user->learn_words}}} >个
                                    </td>
                                </tr>
                                <tr>
                                    <th>单词预期时间：</th>
                                    <td>                                  
                                        <label for="radio331"><input type="radio" name="hope_learn_words" id="hopeone" value="45" /> 45天（每天约100词）</label>
                                        <label for="radio431"><input type="radio" name="hope_learn_words" id="hopetwo" value="30" /> 30天（每天约200词）</label>
                                        <label for="radio531"><input type="radio" name="hope_learn_words" id="hopethree" value="15" /> 15天（每天约300词）</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>希望每月获得的作文批改次数：</th>
                                    <td>
                                        <input class="ipt-txt ipt-large" type="text" name="hope_compisition_times" value={{{$user->hope_compisition_times}}}  >
                                    </td>
                                </tr>                                                                                            
                            </table>
                        </div>
                               <input type="hidden"  name="number" value={{{ $user->id}}} />
                      <tr>
                          <td>
                              <input class="btn btn-large btn-gray fr css3" type="submit" value="保存信息" />
                          </td>
                      </tr>   
                    </form>

                    <!-- <p class="ac pt-50"> -->
                        <!-- <a href="test-report.html"><input class="btn btn-large btn-blue css3" type="button" value="查看报告" /></a> -->
                    <!-- </p> -->

            	</div>
          	</div><!-- mod -->
<script language="javascript" type="text/javascript"> 
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
if(hopelearnwords=="45"){
$("#hopeone").attr('checked','true');
}
if(hopelearnwords=="30"){
$("#hopetwo").attr('checked','true');
}
if(hopelearnwords=="15"){
$("#hopethree").attr('checked','true');
  }
})


</script>


<script language="javascript">
<!--
var where = new Array(35); 
function comefrom(loca,locacity) { this.loca = loca; this.locacity = locacity; } 
where[0]= new comefrom("请选择省份名","请选择城市名");
where[1] = new comefrom("北京","|东城|西城|崇文|宣武|朝阳|丰台|石景山|海淀|门头沟|房山|通州|顺义|昌平|大兴|平谷|怀柔|密云|延庆"); 
where[2] = new comefrom("上海","|黄浦|卢湾|徐汇|长宁|静安|普陀|闸北|虹口|杨浦|闵行|宝山|嘉定|浦东|金山|松江|青浦|南汇|奉贤|崇明"); 
where[3] = new comefrom("天津","|和平|东丽|河东|西青|河西|津南|南开|北辰|河北|武清|红挢|塘沽|汉沽|大港|宁河|静海|宝坻|蓟县"); 
where[4] = new comefrom("重庆","|万州|涪陵|渝中|大渡口|江北|沙坪坝|九龙坡|南岸|北碚|万盛|双挢|渝北|巴南|黔江|长寿|綦江|潼南|铜梁|大足|荣昌|壁山|梁平|城口|丰都|垫江|武隆|忠县|开县|云阳|奉节|巫山|巫溪|石柱|秀山|酉阳|彭水|江津|合川|永川|南川"); 
where[5] = new comefrom("河北","|石家庄|邯郸|邢台|保定|张家口|承德|廊坊|唐山|秦皇岛|沧州|衡水"); 
where[6] = new comefrom("山西","|太原|大同|阳泉|长治|晋城|朔州|吕梁|忻州|晋中|临汾|运城"); 
where[7] = new comefrom("内蒙古","|呼和浩特|包头|乌海|赤峰|呼伦贝尔盟|阿拉善盟|哲里木盟|兴安盟|乌兰察布盟|锡林郭勒盟|巴彦淖尔盟|伊克昭盟"); 
where[8] = new comefrom("辽宁","|沈阳|大连|鞍山|抚顺|本溪|丹东|锦州|营口|阜新|辽阳|盘锦|铁岭|朝阳|葫芦岛"); 
where[9] = new comefrom("吉林","|长春|吉林|四平|辽源|通化|白山|松原|白城|延边"); 
where[10] = new comefrom("黑龙江","|哈尔滨|齐齐哈尔|牡丹江|佳木斯|大庆|绥化|鹤岗|鸡西|黑河|双鸭山|伊春|七台河|大兴安岭"); 
where[11] = new comefrom("江苏","|南京|镇江|苏州|南通|扬州|盐城|徐州|连云港|常州|无锡|宿迁|泰州|淮安"); 
where[12] = new comefrom("浙江","|杭州|宁波|温州|嘉兴|湖州|绍兴|金华|衢州|舟山|台州|丽水"); 
where[13] = new comefrom("安徽","|合肥|芜湖|蚌埠|马鞍山|淮北|铜陵|安庆|黄山|滁州|宿州|池州|淮南|巢湖|阜阳|六安|宣城|亳州"); 
where[14] = new comefrom("福建","|福州|厦门|莆田|三明|泉州|漳州|南平|龙岩|宁德"); 
where[15] = new comefrom("江西","|南昌市|景德镇|九江|鹰潭|萍乡|新馀|赣州|吉安|宜春|抚州|上饶"); 
where[16] = new comefrom("山东","|济南|青岛|淄博|枣庄|东营|烟台|潍坊|济宁|泰安|威海|日照|莱芜|临沂|德州|聊城|滨州|菏泽"); 
where[17] = new comefrom("河南","|郑州|开封|洛阳|平顶山|安阳|鹤壁|新乡|焦作|濮阳|许昌|漯河|三门峡|南阳|商丘|信阳|周口|驻马店|济源"); 
where[18] = new comefrom("湖北","|武汉|宜昌|荆州|襄樊|黄石|荆门|黄冈|十堰|恩施|潜江|天门|仙桃|随州|咸宁|孝感|鄂州");
where[19] = new comefrom("湖南","|长沙|常德|株洲|湘潭|衡阳|岳阳|邵阳|益阳|娄底|怀化|郴州|永州|湘西|张家界"); 
where[20] = new comefrom("广东","|广州|深圳|珠海|汕头|东莞|中山|佛山|韶关|江门|湛江|茂名|肇庆|惠州|梅州|汕尾|河源|阳江|清远|潮州|揭阳|云浮"); 
where[21] = new comefrom("广西","|南宁|柳州|桂林|梧州|北海|防城港|钦州|贵港|玉林|南宁地区|柳州地区|贺州|百色|河池"); 
where[22] = new comefrom("海南","|海口|三亚"); 
where[23] = new comefrom("四川","|成都|绵阳|德阳|自贡|攀枝花|广元|内江|乐山|南充|宜宾|广安|达川|雅安|眉山|甘孜|凉山|泸州"); 
where[24] = new comefrom("贵州","|贵阳|六盘水|遵义|安顺|铜仁|黔西南|毕节|黔东南|黔南"); 
where[25] = new comefrom("云南","|昆明|大理|曲靖|玉溪|昭通|楚雄|红河|文山|思茅|西双版纳|保山|德宏|丽江|怒江|迪庆|临沧");
where[26] = new comefrom("西藏","|拉萨|日喀则|山南|林芝|昌都|阿里|那曲"); 
where[27] = new comefrom("陕西","|西安|宝鸡|咸阳|铜川|渭南|延安|榆林|汉中|安康|商洛"); 
where[28] = new comefrom("甘肃","|兰州|嘉峪关|金昌|白银|天水|酒泉|张掖|武威|定西|陇南|平凉|庆阳|临夏|甘南"); 
where[29] = new comefrom("宁夏","|银川|石嘴山|吴忠|固原"); 
where[30] = new comefrom("青海","|西宁|海东|海南|海北|黄南|玉树|果洛|海西"); 
where[31] = new comefrom("新疆","|乌鲁木齐|石河子|克拉玛依|伊犁|巴音郭勒|昌吉|克孜勒苏柯尔克孜|博尔塔拉|吐鲁番|哈密|喀什|和田|阿克苏"); 
where[32] = new comefrom("香港",""); 
where[33] = new comefrom("澳门",""); 
where[34] = new comefrom("台湾","|台北|高雄|台中|台南|屏东|南投|云林|新竹|彰化|苗栗|嘉义|花莲|桃园|宜兰|基隆|台东|金门|马祖|澎湖"); 
where[35] = new comefrom("其它","|北美洲|南美洲|亚洲|非洲|欧洲|大洋洲"); 
function select() {
with(document.creator.province) { var loca2 = options[selectedIndex].value; }
for(i = 0;i < where.length;i ++) {
if (where[i].loca == loca2) {
loca3 = (where[i].locacity).split("|");
for(j = 0;j < loca3.length;j++) { with(document.creator.city) { length = loca3.length; options[j].text = loca3[j]; options[j].value = loca3[j]; var loca4=options[selectedIndex].value;}}
break;
}}
document.creator.newlocation.value=loca2+loca4;
}
function init() {
with(document.creator.province) {
length = where.length;
for(k=0;k<where.length;k++) { options[k].text = where[k].loca; options[k].value = where[k].loca; }
options[selectedIndex].text = where[0].loca; options[selectedIndex].value = where[0].loca;
}
with(document.creator.city) {
loca3 = (where[0].locacity).split("|");
length = loca3.length;
for(l=0;l<length;l++) { options[l].text = loca3[l]; options[l].value = loca3[l]; }
options[selectedIndex].text = loca3[0]; options[selectedIndex].value = loca3[0];
}}
-->
init();
</script>
@stop

