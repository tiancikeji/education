@extends('layouts.member')
@section('content')
        <div class="grid">

        	<div class="mod">
        		<div class="hd hd-1">
        			<h3>SAT水平测试卷</h3>
        		</div>
            	<div class="bd bd-2">
                    <div class="tips tips-1">
                        <p>SAT水平测试，时间为30分钟，不能暂停，不能后退，完成测试后将会生成测试报告</p>
                    </div>

{{ Form::open(array('route' => 'exams.store')) }}
                    <p class="ac">
<select name="paper_id" >
			@foreach ($papers as $paper)
         <option value="{{{$paper->id}}}">{{{$paper->name}}}</option>
      @endforeach
</select>
      <input class="btn btn-large btn-blue css3" type="submit" value="开始做题" />
                   </p>
{{ Form::close() }}
@if ($errors->any())
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
@endif

            	</div>
        	</div><!-- mod -->



@stop


