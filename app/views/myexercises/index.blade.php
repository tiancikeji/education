@extends('layouts.member')

@section('content')




        <div class="grid">

        	<div class="mod">
        		<div class="hd hd-1">
                    </div>
        		</div>
@if ($exercises->count())
			@foreach ($exercises as $exercise)

<p>{{{ $exercise->no }}}.{{{ $exercise->description }}}</p>
<p>{{{ $exercise->right_answer }}}</p>
<p>
              @foreach (Answer::where('exercises_id','=',$exercise->id)->get() as $answer) 
                  <label for="radio3"><input type="radio" name="{{{ $exercise->id }}}" value="{{{$answer->id}}}" /> {{{$answer->description}}}</label>
              @endforeach
</p>

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

@stop

