@extends('layouts.admin')

@section('main')

<h1>Create Userplan</h1>

{{ Form::open(array('route' => 'admin.userplans.store')) }}
	<ul>
@if ($plans->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
        <th></th>
				<th>模板名称</th>
				<th>总天数</th>
				<th>是否冲刺</th>
				<th>任务类型</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($plans as $plan)
				<tr>
<td><input type="radio" name="plan_id" value="{{{ $plan->id }}}" /></td>
					<td>{{{ $plan->name }}}</td>
					<td>{{{ $plan->days }}}</td>
					<td>{{{ $plan->is_sprint }}}</td>
					<td>{{{ $plan->type }}}</td>
				</tr>
<tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no plans
@endif

        <li>
            {{ Form::input('hidden', 'user_id',Input::get("user_id")) }}
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


