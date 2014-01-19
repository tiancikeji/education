@extends('layouts.member')
@section('content')

   <script>
    var interval;
    var minutes = {{{$left}}};
    var seconds = 0;
    window.onload = function() {
        countdown('countdown');
    }

    function countdown(element) {
        interval = setInterval(function() {
            var el = document.getElementById(element);
            if(seconds == 0) {
                if(minutes == 0) {
                    el.innerHTML = "时间已到";                    
                    $("exam_form").submit();
                    clearInterval(interval);
                    return;
                } else {
                    minutes--;
                    seconds = 60;
                }
            }
            if(minutes > 0) {
                var minute_text = minutes + (minutes > 1 ? ' minutes' : ' minute');
            } else {
                var minute_text = '';
            }
            var second_text = seconds > 1 ? 'seconds' : 'second';
            el.innerHTML ='剩余时间：'+ minute_text + ' ' + seconds + ' ' + second_text;
            seconds--;
        }, 1000);
    }
    </script>


        <div class="grid">
          <div class="mod">
            <div class="hd hd-1">
              <h3>{{{$paper->name}}}</h3>
                        <span><strong>{{{$exam->type}}}模式</strong></span>
              @if($exam->type=="exam")
                    <div class="fr question-stat">
                        <div id='countdown'></div>
                    </div>
              @endif
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
           @foreach (Answer::where('exercises_id','=',$exercise->id)->get() as $answer) 
              <label for="radio3"><input type="radio" name="exercise_{{{ $exercise->id }}}" value="{{{ $answer->number }}}" /> {{{ $answer->number }}}.{{{ $answer->description }}}</label>
           @endforeach
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
