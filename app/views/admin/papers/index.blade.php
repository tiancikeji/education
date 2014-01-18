@extends('layouts.admin')

@section('main')


<h1>试卷列表</h1>
<p>{{ link_to_route('admin.papers.create', '添加试卷') }}</p>

@if ($papers->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>试卷名称</th> 
        <th>试卷科目</th>
				<th>试卷年月</th>
        <th>section</th>
        <th>操作</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($papers as $paper)
				<tr>
					<td>{{{ $paper->name }}}</td>
          <td>{{{ $paper->type }}}</td>
					<td>{{{ $paper->published_date }}}</td>
					<td>{{{ $paper->section }}}</td>
          <td>
            <a href="/admin/exercises/create?paper_id={{{ $paper->id }}}" >上传试题</a>
            <a href="/admin/exercises?paper_id={{{ $paper->id }}}">所有习题</a>
            {{ link_to_route('admin.papers.edit', ' 编辑 ', array($paper->id), array('class' => 'btn btn-info')) }}
            {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.papers.destroy', $paper->id))) }}
               {{ Form::submit('删除', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}
          </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
没有试卷
@endif

@stop
