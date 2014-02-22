@extends('layouts.member')

@section('content')


	<link rel="stylesheet" type="text/css" href="/selecText/css/main-style.css" />
    <link rel="stylesheet" type="text/css" href="/selecText/css/tooltipster.min.css" />
    <script type="text/javascript" src="/selecText/js/jquery.tooltipster.min.js"></script>      

    <script src="/selecText/js/contentshare.js"></script>


        <div class="grid">

        	<div class="mod">
        		<div class="hd hd-1">
                    </div>
        		</div>
@if ($exercises->count())
			@foreach ($exercises as $exercise)
<p>{{{ $exercise->no }}}.{{{ $exercise->description }}}</p>

<p>
              @foreach (Answer::where('exercises_id','=',$exercise->id)->get() as $answer) 
                  <label for="radio3"><input type="radio" name="{{{ $exercise->id }}}" value="{{{$answer->id}}}" /> {{{$answer->description}}}</label>
              @endforeach
</p>
<input type="checkbox" name="exercise_ids[]"  value="{{{ $exercise->id }}}" />添加到我的难题
<hr />
			@endforeach
@else
	There are no exercises
@endif 

                    <div class="ac pt-30 btn-wrap-2" style="display:none;">
                        <input class="btn btn-large btn-gray css3" type="button" value="上一页" />
                        <a href="question-exam.html"><input class="btn btn-large btn-gray css3" type="button" value="下一页" /></a>
                    </div>

            	</div>
        	</div><!-- mod -->

        </div>

<script type="text/javascript" charset="utf-8">
  
// calling the plugin on DOM ready
$(document).ready(function(){

$("input[name='exercise_ids[]']").unbind('click');

    $("p").contentshare();
    $.fn.contentshare.defaults.shareable.on('mouseup',function(){
        // $.fn.contentshare.showTooltip();
        if(confirm("确定要添加到生词本吗？"))
          {
              var english = $.fn.contentshare.getSelection();
      $.ajax({
        url: "/mywords/add?english="+english+"&chinese=''",
        context: document.body
      }).done(function() {
          alert("添加到生词本");
      }).error(function(){
        alert("请先登录");
      });
           
          }
    });            


$("input[name='exercise_ids[]']").on('click',function(){
  if($(this).attr("checked")){
      $.ajax({
        url: "/myexercises/add?exercise_id="+$(this).val(),
        context: document.body
      }).done(function() {
        alert("添加成功");
      }).error(function(){
        alert("请先登录");
      });
    }
});

});

</script>
@stop
