@extends('layouts.admin')

@section('main')

<h1>全部作文</h1>

<p>{{ link_to_route('admin.compositions.create', '新建作文') }}</p>

@if ($compositions->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>标题</th>
				<th>内容</th>
				<th>笔记</th>
				<th></th>
			</tr>
		</thead>

		<tbody>
			@foreach ($compositions as $composition)
				<tr>
					<td>{{{ $composition->title }}}</td>
					<td>{{{ $composition->content }}}</td>
					<td>{{{ $composition->note }}}</td>
                    <td>{{ link_to_route('admin.compositions.edit', '批改', array($composition->id), array('class' => 'btn btn-info')) }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	没有作文
@endif

@stop
