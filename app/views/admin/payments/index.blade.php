@extends('layouts.admin')

@section('main')

<h1>全部付款</h1>

<p>{{ link_to_route('admin.payments.create', '新增付款') }}</p>
<div>
<form action="/admin/payments" method="get">
<select name="user_id">
@foreach ($users as $user)
<option value={{{$user->id}}}>{{{$user->name}}}</option>
@endforeach
</select>

<select name="type">
@foreach ($payments as $payment)
<option value={{{ $payment->type }}}>{{{ $payment->type }}}</option>
@endforeach
</select>
<input type="submit" value="搜索">
</form>
</div>
@if ($payments->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>购买类型</th>
				<th>购买数量</th>
				<th>付费</th>
				<th>总金额</th>
				<th>用户id</th>
        <th>用户名</th>
        <th>服务起始日期</th>
        <th>期服务到期日期</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($payments as $payment)
				<tr>
					<td>{{{ $payment->type }}}</td>
					<td>{{{ $payment->count }}}</td>
					<td>{{{ $payment->fee }}}</td>
					<td>{{{ $payment->total }}}</td>
					<td>{{{ $payment->user_id }}}</td>
      @endforeach
@foreach ($users as $user)
			<td>{{{ $user->name }}}</td>
 @endforeach
			@foreach ($payments as $payment)
                    <td>{{ link_to_route('admin.payments.edit', '编辑 ', array($payment->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                         {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.payments.destroy', $payment->id))) }}
                            {{ Form::submit('删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	 未支付
@endif

@stop
