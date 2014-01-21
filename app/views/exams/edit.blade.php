@extends('layouts.member')
@section('content')
        <div class="grid">

          <div class="mod">
            <div class="hd hd-1">
              <h3>{{{$paper->name}}}</h3>
                    <div class="fr question-stat">
                        <span><strong>考试模式</strong></span>
                        <span>已用时间：<strong class="c-red">{{{$exam->start_time}}}</strong></span>
                    </div>
            </div>
              <div class="bd bd-2">
@if ($errors->any())
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
@endif

{{ Form::model($exam, array('method' => 'PATCH', 'route' => array('exams.update', $exam->id))) }}
                    <div class="question-list f-16">
                        <ul>

      @foreach ($exercises as $exercise)
                            <li>
                                <dl>
                                    <dt>{{{$exercise->description}}}</dt>
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
                        {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
                    </div>

              </div>
          </div><!-- mod -->
{{ Form::close() }}

@stop
