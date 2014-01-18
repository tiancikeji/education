@extends('layouts.admin')

@section('main')

<h1>全部试题</h1>

<p>{{ link_to_route('admin.exercises.create', ' 新增试题') }}</p>

@if ($exercises->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
<th>ID</th>
				<th>编号</th>
				<th>描述</th>
        <th>正确答案</th>
        <th>难度</th>
        <th>  </th>
			</tr>
		</thead>

		<tbody>
			@foreach ($exercises as $exercise)
				<tr>
  <td>{{{ $exercise->id }}}</td>
					<td>{{{ $exercise->no }}}</td>
					<td>{{{ $exercise->description }}}</td>
          <td>{{{ $exercise->right_answer }}}</td>
          <td>{{{ $exercise->hard }}}</td>
              <td>{{ link_to_route('admin.exercises.edit', '编辑', array($exercise->id), array('class' => 'btn btn-info')) }} {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.exercises.destroy', $exercise->id))) }}
                      {{ Form::submit(' 删除', array('class' => 'btn btn-danger')) }}
                  {{ Form::close() }}
              </td>
				</tr>
<tr>
  <td>答案：</td>
     <td>
              @foreach (Answer::where('exercises_id','=',$exercise->id)->get() as $answer) 
                {{{ $answer->number }}}.
                {{{ $answer->description }}}
              @endforeach
          </td>
  <td></td>
  <td></td>
</tr>
			@endforeach
		</tbody>
	</table>
@else
没有习题	
@endif

@stop
