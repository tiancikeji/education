@extends('layouts.admin')

@section('main')

<h1>创建作业测试模板</h1>

{{ Form::open(array('route' => 'admin.homeworks.store')) }}
	<ul>
        <li>
            {{ Form::label('name', '名称:') }}
            {{ Form::text('name') }}
            <select name="type">
                <option value="TEST">作业</option>
                <option value="HOMEWORK">测试</option>
            </select>
        </li>






@if ($exercises->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
        <th></th>
				<th>编号</th>
				<th>描述</th>
        <th>正确答案</th>
        <th>难度</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($exercises as $exercise)
				<tr>
          <td><input type="checkbox" name="exercise_ids[]"  value="{{{ $exercise->id }}}" /></td>
					<td>{{{ $exercise->no }}}</td>
					<td>{{{ $exercise->description }}}</td>
          <td>{{{ $exercise->right_answer }}}</td>
          <td>{{{ $exercise->hard }}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	没有作业
@endif










		<li>
			{{ Form::submit('提交', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


