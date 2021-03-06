@extends('layouts.admin')

@section('main')

<h1>显示付款</h1>

<p>{{ link_to_route('admin.payments.index', '返回全部支付') }}</p>

<table class="table table-striped table-bordered">
	<thead>
    <tr>
        <th>类型</th>
				<th>计算</th>
				<th>付费</th>
				<th>总额</th>
				<th>用户id</th>
			</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $payment->type }}}</td>
					<td>{{{ $payment->count }}}</td>
					<td>{{{ $payment->fee }}}</td>
					<td>{{{ $payment->total }}}</td>
					<td>{{{ $payment->user_id }}}</td>
                    <td>{{ link_to_route('admin.payments.edit', ' 编辑', array($payment->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.payments.destroy', $payment->id))) }}
                            {{ Form::submit('删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
