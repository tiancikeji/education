@extends('layouts.admin')

@section('main')

<h1>Show Plan</h1>

<p>{{ link_to_route('admin.plans.index', 'Return to all plans') }}</p>

<p>模板名称: {{{ $plan->name }}}</p>
<p>总天数:{{{ $plan->days }}}</p>
<p>是否冲刺:{{{ $plan->is_sprint }}}</p>
<p>任务:</p>

<a href="/admin/plantasks/create?plan_id={{{ $plan->id }}}" 'class'='btn btn-info'>添加任务</a>
<a href="/admin/plans/preview?plan_id={{{ $plan->id }}}">预览</a>
<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>开始时间</th>
				<th>结束时间</th>
				<th>内容</th>
			</tr>
		</thead>


	<tbody>
      @foreach (PlanTask::where('plan_id','=',$plan->id)->get() as $plan_task) 
				<tr>
					<td>{{{ $plan_task->start_date }}}</td>
					<td>{{{ $plan_task->end_date }}}</td>
					<td>{{{ Homework::find($plan_task->content)->name  }}}</td>
					<!-- <td>{{{ $plan_task->type }}}</td> -->
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.plantasks.destroy', $plan_task->id))) }}
                            {{ Form::submit('删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
	</tbody>
</table>

@stop
