@extends('layouts.member')

@section('content')



        <div class="grid">

        	<div class="mod">
        		<div class="hd hd-1">
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
