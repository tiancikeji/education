@extends('layouts.admin')

@section('main')
<h1>全部付款</h1>

<link href="/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.css" rel="stylesheet">
	<script src="/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.js"></script>
  <script>
  $(function() {
    $( "#date" ).datepicker({ dateFormat: 'yy-mm-dd' });
  $( "#end" ).datepicker({ dateFormat: 'yy-mm-dd' });

  });
  </script>

<!-- <p>{{ link_to_route('admin.payments.create', '新增付款') }}</p> -->
<div>
<form action="/admin/payments" method="get">

<select name="type">
<option value="exam">Exam</option>
<option value="composition">Composition</option>
</select>
服务起始日期:
<input type="text" value=""  id="date" name="created_at" / >
期服务到期日期:
<input type="text" value=""  id="end" name="enddate_at" / >
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
			<td>{{{ User::find($payment->user_id)->name }}}</td>
          <td>{{{$payment->created_at}}}</td>
           <td>{{{ $payment->enddate_at }}}</td>
 
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
