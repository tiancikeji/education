@extends('layouts.member')
@section('content')


        <div class="grid">
          <div class="mod">
            <div class="hd hd-1">
              <h3>{{{$paper->name}}}</h3>
                        <span><strong>{{{$exam->type}}}模式</strong></span>
<?php 
   $answerarr = explode(";",$exam->answers);
?>
  total: <?php echo count($answerarr); ?>
<?php
   $count = 0;
   $key_value = array();
   for($i=0;$i<count($answerarr);$i++){
     if(strlen($answerarr[$i])==6){
        $count += 1; 

      $arr = explode("+",$answerarr[$i]);
      $key_value[$arr[0]] = $arr[1];
     }
      // echo $answerarr[$i]."<br>";
   }
   // print_r($key_value);
?>

  answers:<?php echo $count; ?> right:{{{$exam->score}}}
            </div>
              <div class="bd bd-2">
@if ($errors->any())
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
@endif

{{ Form::model($exam, array('id' => 'exam_form', 'method' => 'PATCH', 'route' => array('exams.update', $exam->id))) }}
                    <div class="question-list f-16">
                        <ul>

      @foreach ($exercises as $exercise)
                            <li>
                                <dl>
                                    <dt>{{{$paper->year}}}年{{{$paper->month}}} 月section{{{$exercise->section}}},{{{$exercise->no}}}   {{{$exercise->description}}}</dt>
        <dd>
正确答案：{{{$exercise->right_answer}}}<br>
<font color="red">您的答案：<?php if(in_array($exercise->id,array_keys($key_value))){  
  echo $key_value[$exercise->id]; 
} ?></font>
 </dd>

                                    <dd>
           @foreach (Answer::where('exercises_id','=',$exercise->id)->get() as $answer) 
              <label for="radio3"><input type="radio" name="exercise_{{{ $exercise->id }}}" value="{{{ $answer->number }}}" /> {{{ $answer->number }}}.{{{ $answer->description }}}</label>
           @endforeach

                                    </dd>
<dd>
解析：{{{$exercise->note}}}
</dd>
                                </dl>
                            </li>
      @endforeach
                        </ul>
                    </div>
                    <div class="ac pt-30 btn-wrap-2">
                        {{ Form::submit('完成') }}
                    </div>

              </div>
          </div><!-- mod -->
{{ Form::close() }}

@stop
