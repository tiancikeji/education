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
				<th>任务类型</th>
        <th></th>
			</tr>
		</thead>

		<tbody>
			@foreach ($plans as $plan)
				<tr>
					<td>{{{ $plan->name }}}</td>
					<td>{{{ $plan->days }}}</td>
					<td>{{{ $plan->is_sprint }}}</td>
					<td>{{{ $plan->type }}}</td>
                    <td>
<a href="/admin/plantasks/create?plan_id={{{ $plan->id }}}">add task</a>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.plans.destroy', $plan->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
<tr>
<td colspan="5">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>开始日期</th>
				<th>结束日期</th>
				<th>内容</th>
				<th>类型</th>
			</tr>
		</thead>


		<tbody>
      @foreach (PlanTask::where('plan_id','=',$plan->id)->get() as $plan_task) 
				<tr>
					<td>{{{ $plan_task->start_date }}}</td>
					<td>{{{ $plan_task->end_date }}}</td>
					<td>{{{ $plan_task->content }}}</td>
					<td>{{{ $plan_task->type }}}</td>
                    <td>{{ link_to_route('admin.plantasks.edit', '编辑', array($plan_task->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.plantasks.destroy', $plan_task->id))) }}
                            {{ Form::submit('删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>

</table>
</td>
</tr>
			@endforeach
		</tbody>
	</table>
@else
没有模板
@endif

@stop
