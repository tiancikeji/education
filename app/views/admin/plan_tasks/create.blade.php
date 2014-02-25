@extends('layouts.admin')

@section('main')

<h1>Create Task </h1>
<p>模板名称: {{{ $plan->name }}}</p>
<p>总天数:{{{ $plan->days }}}</p>
<p>是否冲刺:{{{ $plan->is_sprint }}}</p>
<p>任务类型:
<form id="plantask_type_form" action="/admin/plantasks/create?={{{ $plan->id }}}" method="get" accept-charset="utf-8">
<input type="hidden"  name="plan_id"  value="{{{ $plan->id }}}" />
<input @if(Input::get('plantype')=="TEST")  checked=checked @endif  type="radio" name="plantype" value="TEST" />单词测试 
<input @if(Input::get('plantype')=="HOMEWORK")  checked=checked @endif type="radio" name="plantype" value="HOMEWORK" />作业  
<input @if(Input::get('plantype')=="VIDEO")  checked=checked @endif type="radio" name="plantype" value="VIDEO" />观看视频 
<input @if(Input::get('plantype')=="EXAM")  checked=checked @endif type="radio" name="plantype" value="EXAM" />阶段测验
</form>
</p>

<script type="text/javascript" charset="utf-8">
  $("input[name='plantype']").on("click",function(){
   $("#plantask_type_form").submit();
});
</script>
{{ Form::open(array('route' => 'admin.plantasks.store')) }}
	<ul>
        <li>
            {{ Form::label('start_date', 'Start_date:') }}
            {{ Form::text('start_date') }}
        </li>
      <input type="hidden" name="plan_id"  value="{{{ $plan->id }}}" />
        <li>
            {{ Form::label('end_date', 'End_date:') }}
            {{ Form::text('end_date') }}
        </li>

        <li>

@if(Input::get('plantype')=="HOMEWORK")
         模板
        <select name="content" >
              @foreach (Homework::where('type','like',Input::get('plantype'))->get() as $homework) 
                <option value="{{{ $homework->id }}}"> {{{ $homework->name }}}</option>
              @endforeach
        </select>
@endif
@if(Input::get('plantype')=="EXAM")
         模板
        <select name="content" >
              @foreach (Homework::where('type','like',Input::get('plantype'))->get() as $homework) 
                <option value="{{{ $homework->id }}}"> {{{ $homework->name }}}</option>
              @endforeach
        </select>
@endif

@if(Input::get('plantype')=="VIDEO")

         模板
        <select name="content" >
              @foreach (Video::take(1000)->get() as $video) 
                <option value="{{{ $video->id }}}"> {{{ $video->title }}}</option>
              @endforeach
        </select>
@endif
@if(Input::get('plantype')=="TEST")
        <input name="content" value="单词测试" >
@endif
        </li>
            {{ Form::input('hidden', 'type',Input::get('plantype') ) }}

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


