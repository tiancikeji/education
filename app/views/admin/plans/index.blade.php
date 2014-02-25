@extends('layouts.admin')

@section('main')

<h1>日程模板 </h1>

<p>{{ link_to_route('admin.plans.create', '创建日程模板') }}</p>

@if ($plans->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>模板名称</th>
				<th>总天数</th>
				<th>是否冲刺</th>
        <th></th>
			</tr>
		</thead>

		<tbody>
			@foreach ($plans as $plan)
				<tr>
					<td>{{{ $plan->name }}}</td>
					<td>{{{ $plan->days }}}</td>
					<td>{{{ $plan->is_sprint }}}</td>
                    <td>

<a href="/admin/plantasks/create?plan_id={{{ $plan->id }}}">add task</a>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.plans.destroy', $plan->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
没有模板
@endif

@stop
