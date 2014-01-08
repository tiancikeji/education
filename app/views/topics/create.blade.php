@extends('layouts.member')

@section('content')
<div class="grid">
<h1>发布新帖</h1>

{{ Form::open(array('route' => 'topics.store')) }}
	<ul>
        <li>
            {{ Form::label('author', 'Author:') }}
            {{ Form::text('author') }}
        </li>

        <li>
            {{ Form::label('titile', 'Titile:') }}
            {{ Form::text('titile') }}
        </li>

        <li>
            {{ Form::label('pic_url', 'Pic_url:') }}
            {{ Form::text('pic_url') }}
        </li>

        <li>
            {{ Form::label('type', 'Type:') }}
            {{ Form::text('type') }}
        </li>

        <li>
            {{ Form::label('status', 'Status:') }}
            {{ Form::text('status') }}
        </li>

        <li>
            {{ Form::label('body', 'Body:') }}
            {{ Form::textarea('body') }}
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

</div>
@stop


