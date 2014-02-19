@extends('layouts.admin')

@section('main')

<h1>作业测试模板 </h1>

<p>{{ link_to_route('admin.homeworks.index', '返回全部作业测试模板') }}</p>
<p>
<h3> 名称: {{{ $homework->name }}}</h3>
<input type="hidden" id="homework_id" value="{{{ $homework->id }}}" />
</p>

<form action="/admin/homeworks/{{{ $homework->id }}}" method="get" accept-charset="utf-8">
                            <div class="video-search cf">
                                <ul class="fl">
                                    <li>
                                        <p>试题日期：</p>
                                        <select name="year"class="select">
                                            <option value="1990">1990年</option>
                                        </select>
                                    </li>
                                    <li>
                                        <p>科目：</p>
                                        <label for="radio334"><input type="radio" name="type" value="整套"  /> 整套</label>
                                        <label for="radio334"><input type="radio" name="type" value="作文"  /> 作文</label>
                                        <label for="radio335"><input type="radio" name="type" value="阅读"   /> 阅读</label>
                                        <label for="radio336"><input type="radio" name="type" value="词汇"  /> 词汇</label>
                                        <label for="radio337"><input type="radio" name="type" value="语法"  /> 语法</label>
                                    </li>
                                </ul>
                                <div class="fr">
                                    <input class="btn btn-large btn-gray css3" type="submit" value="搜 索" />                    
                                </div>
                            </div><!-- search -->

</form>

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
        <td>{{{ $exercise->id }}}<input type="checkbox" name="exercise_ids[]" <?php if(in_array($exercise->id,$arrs)){ echo "checked"; }  ?> value="{{{ $exercise->id }}}" /></td>
					<td>{{{ $exercise->no }}}</td>
					<td>{{{ $exercise->description }}}</td>
          <td>{{{ $exercise->right_answer }}}</td>
          <td>{{{ $exercise->hard }}}</td>
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
    
      $.ajax({
        url: "/admin/homeworks/add_exercise?exercise_id="+$(this).val()+"&homework_id="+$("#homework_id").val(),
        context: document.body
      }).done(function() {
        alert("添加成功");
      });
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
