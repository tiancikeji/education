@extends('layouts.scaffold')

@section('main')

<h1>显示试卷 </h1>

<p>{{ link_to_route('papers.index', '返回全部试卷') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th> 名称</th>
				<th> 发布日期</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $paper->name }}}</td>
					<td>{{{ $paper->published_date }}}</td>
                    <td>{{ link_to_route('papers.edit', ' 编辑', array($paper->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('papers.destroy', $paper->id))) }}
                            {{ Form::submit('删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
