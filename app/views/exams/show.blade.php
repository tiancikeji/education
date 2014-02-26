@extends('layouts.member')
@section('content')

        <div class="grid">

          <div class="mod">
            <div class="hd hd-1">
              <h3>SAT水平测试卷</h3>
                    <div class="fr">
                    </div>                    
            </div>
              <div class="bd bd-2">

                    <div class="tips tips-1">
                        <p>您已完成SAT水平测试，评级为 <strong class="f-20 c-red">

<?php 
   $answerarr = explode(";",$exam->answers);
?>
  total: <?php echo count($answerarr); ?>
<?php
   $count = 0;
   $key_value = array(); for($i=0;$i<count($answerarr);$i++){
     if(strlen($answerarr[$i])==6){
        $count += 1; 

      $arr = explode("+",$answerarr[$i]);
      $key_value[$arr[0]] = $arr[1];
     }
   }
?>

  answers:<?php echo $count; ?> right:{{{$exam->score}}}

</strong></p>
                    </div>
                    <p class="ac">
                        <a href="test-questionnaire.html"><input class="btn btn-large btn-blue css3" type="button" value="查看报告" /></a>

                        <a href="/exams/review?exam_id={{{ $exam->id }}}"><input class="btn btn-large btn-blue css3" type="button" value="查看解析" /></a>
                    </p>
                    <div class="tips tips-1">
@if(count(Payment::where("user_id",'=',Session::get('current_user')->id)->get()) > 0)
                   <p>
                      @if(count(Userplan::where("user_id",'=',Session::get('current_user')->id)->get()) > 0)
                         <p>
                            <div id="calendar"> </div><!-- calendar -->
                         </p>
                      @else
                              您当前没有日程计划
                      @endif
                   </p>

                    @else
                        
         您当前没有日程计划，这是因为日程计划属于我们的付费服务之一，您可以<span class="l-blue l-line"><a href="/upgrade">升级为付费版</a></span>使用


                      @endif


                    </div>                      

              </div>
          </div><!-- mod -->



@stop
