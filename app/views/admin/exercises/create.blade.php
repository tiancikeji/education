@extends('layouts.admin')

@section('main')

<h1>Create Exercise</h1>

{{ Form::open(array('route' => 'admin.exercises.store')) }}
	<ul>
        <li>
            {{ Form::label('paper_id', '试题:') }}
            <select name="paper_id" >
			        @foreach ($papers as $paper)
                <option value="{{{ $paper->id}}}" >{{{ $paper->name}}} - {{{ $paper->type }}}</option>
              @endforeach
            </select>
        </li>

      <li>
          {{ Form::label('no', '编号:') }}
          {{ Form::input('number', 'no') }}
      </li>

      <li>
          {{ Form::label('description', '描述:') }}
          {{ Form::textarea('description') }}
      </li>
      <li>
          {{ Form::label('description', '正确答案：') }}
          {{ Form::input('right_answer', 'right_answer') }}
      </li>
      <li>答案:<br/>
        选项：<input type="text" name="numbers[]" size="5" value="" />描述:<input type="text" name="answers[]" value="" /><br>
        选项：<input type="text" name="numbers[]" size="5" value="" />描述:<input type="text" name="answers[]" value="" /><br>
        选项：<input type="text" name="numbers[]" size="5" value="" />描述:<input type="text" name="answers[]" value="" /><br>
        选项：<input type="text" name="numbers[]" size="5" value="" />描述:<input type="text" name="answers[]" value="" /><br>
        选项：<input type="text" name="numbers[]" size="5" value="" />描述:<input type="text" name="answers[]" value="" /><br>
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


