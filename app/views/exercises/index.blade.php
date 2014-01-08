@extends('layouts.member')

@section('content')



        <div class="grid">

        	<div class="mod">
        		<div class="hd hd-1">
        			<h3>2013年5月语法section1</h3>
                    <div class="fr question-stat">
                        <span><strong>自测模式</strong></span>
                        <span>已用时间：<strong class="c-red">35:36</strong></span>
                        <input type="button" class="btn btn-normal btn-white css3" value="保存进度" />
                        <input type="button" class="btn btn-normal btn-white css3" value="暂停" />
                    </div>
        		</div>
            	<div class="bd bd-2">

                    <div class="question-list f-16">
                        <ul>
 @if ($exercises->count())
			@foreach ($exercises as $exercise)
                             <li>
                                <dl>
                                    <dt>{{{ $exercise->no }}}.{{{ $exercise->description }}}</dt>
                                    <dd>
              @foreach (Answer::where('exercises_id','=',$exercise->id)->get() as $answer) 
                  <label for="radio3"><input type="radio" name="{{{ $exercise->id }}}" value="{{{$answer->id}}}" /> {{{$answer->description}}}</label>
              @endforeach
                                    </dd>
                                </dl>
                            </li>

			@endforeach
@else
	There are no exercises
@endif                           
                           
                        </ul>
                    </div>

                    <div class="ac pt-30 btn-wrap-2" style="display:none;">
                        <input class="btn btn-large btn-gray css3" type="button" value="上一页" />
                        <a href="question-exam.html"><input class="btn btn-large btn-gray css3" type="button" value="下一页" /></a>
                    </div>

            	</div>
        	</div><!-- mod -->

        </div>



@stop
