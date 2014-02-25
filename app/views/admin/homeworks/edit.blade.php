@extends('layouts.admin')

@section('main')

<h1>作业测试模板 </h1>

<p>{{ link_to_route('admin.homeworks.index', '返回全部作业测试模板') }}</p>
<p>
<h3> 名称: {{{ $homework->name }}}</h3>
<input type="hidden" id="homework_id" value="{{{ $homework->id }}}" />
</p>

{{ link_to_route('admin.homeworks.show', '添加试题', array($homework->id), array('class' => 'btn btn-info')) }}
@if ($exercises->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
        <th>顺序</th>
				<th>编号</th>
				<th>描述</th>
        <th>正确答案</th>
        <th>难度</th>
        <th>删除</th>
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
<td><input type="checkbox" name="exercise_ids[]" <?php if(in_array($exercise->id,$arrs)){ echo "checked"; }  ?> value="{{{ $exercise->id }}}" /></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	没有
@endif

<script type="text/javascript" charset="utf-8">
$("input[name='exercise_ids[]']").on('click',function(){
  if($(this).attr("checked")){
      // alert($(this).val());
    
      // $.ajax({
      //   url: "/admin/homeworks/add_exercise?exercise_id="+$(this).val()+"&homework_id="+$("#homework_id").val(),
      //   context: document.body
      // }).done(function() {
      //   alert("添加成功");
      // });

    }else{
      $.ajax({
        url: "/admin/homeworks/delete_exercise?exercise_id="+$(this).val()+"&homework_id="+$("#homework_id").val(),
        context: document.body
      }).done(function() {
        alert("已经删除");
      });
    }
});
</script>
@stop


