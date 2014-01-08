@extends('layouts.admin')

@section('main')

<h1>Create Exercise</h1>

{{ Form::open(array('route' => 'admin.exercises.store')) }}
	<ul>
        <li>
            {{ Form::label('paper_id', '试题:') }}
            <select name="paper_id" >
			        @foreach ($papers as $paper)
                <option value="{{{ $paper->id}}}" >{{{ $paper->name}}} </option>
              @endforeach
            </select>
        </li>

      <li>
          {{ Form::label('no', 'No:') }}
          {{ Form::input('number', 'no') }}
      </li>

      <li>
          {{ Form::label('description', 'Description:') }}
          {{ Form::textarea('description') }}
      </li>
      
      <li>
answers:
        <input type="text" name="answers[]" value="" />
        <input type="text" name="answers[]" value="" />
        <input type="text" name="answers[]" value="" />
        <input type="text" name="answers[]" value="" />
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


