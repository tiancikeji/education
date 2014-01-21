@extends('layouts.admin')

@section('main')

<h1>Create Task </h1>
<p>模板名称: {{{ $plan->name }}}</p>
<p>总天数:{{{ $plan->days }}}</p>
<p>是否冲刺:{{{ $plan->is_sprint }}}</p>
<p>任务类型:{{{ $plan->type }}}</p>

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
        {{{$plan->type}}} 模板
        <select name="content" >
              @foreach (Homework::where('type','like',$plan->type)->get() as $homework) 
                <option value="{{{ $homework->id }}}"> {{{ $homework->name }}}</option>
              @endforeach
        </select>
        </li>

        <li>
            {{ Form::label('type', 'Type:') }}
            {{ Form::text('type',$plan->type ) }}
        </li>

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


