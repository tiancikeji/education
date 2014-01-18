@extends('layouts.scaffold')

@section('main')

<h1>显示用户日程安排</h1>

<p>{{ link_to_route('userplans.index', '返回用户日程') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>用户id</th>
				<th> 计划id</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $userplan->user_id }}}</td>
					<td>{{{ $userplan->plan_id }}}</td>
                    <td>{{ link_to_route('userplans.edit', '编辑', array($userplan->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('userplans.destroy', $userplan->id))) }}
                            {{ Form::submit('删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
