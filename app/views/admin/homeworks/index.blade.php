@extends('layouts.admin')

@section('main')

<h1>作业测试模板</h1>

<p>{{ link_to_route('admin.homeworks.create', '新增作业测试模板 ') }}</p>

@if ($homeworks->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>名称</th>
        <th>类型</th>
				<!-- <th>Exercise_ids</th> -->
				<!-- <th>Teacher_id</th> -->
      <th></th>
			</tr>
		</thead>

		<tbody>
			@foreach ($homeworks as $homework)
				<tr>
					<td>{{{ $homework->name }}}</td>
          <td>{{{ $homework->type }}}</td>
					<!-- <td>{{{ $homework->exercise_ids }}}</td> -->
					<!-- <td>{{{ $homework->teacher_id }}}</td> -->
                    <td>{{ link_to_route('admin.homeworks.show', '添加试题', array($homework->id), array('class' => 'btn btn-info')) }}
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.homeworks.destroy', $homework->id))) }}
                            {{ Form::submit(' 删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	 没有作业测试模板
@endif

@stop
