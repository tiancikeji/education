@extends('layouts.admin')

@section('main')

<h1>上传试题</h1>

{{ Form::open(array('route' => 'admin.exercises.store','files'=>true)) }}
	<ul>
<input type="hidden" name="paper_id" value="{{{Input::get("paper_id")}}}" />
Excel: <input type="file" name="excel"  value="" />
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


