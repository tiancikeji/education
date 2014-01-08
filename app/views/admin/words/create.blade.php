@extends('layouts.admin')

@section('main')

<h1>Create Word</h1>

{{ Form::open(array('route' => 'admin.words.store')) }}
	<ul>
        <li>
            {{ Form::label('english', 'English:') }}
            {{ Form::text('english') }}
        </li>

        <li>
            {{ Form::label('chinese', 'Chinese:') }}
            {{ Form::text('chinese') }}
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


