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
试卷名称:<input type="text" name="paper_name" value="" />
所属section:<input type="text" name="section"  value="" />
编号:<input type="text" name="no"  value="" />
考点编号:<input type="text" name="point_no"  value="" />
            <select name="type" >
                 <option value="语法">语法</option>
                 <option value="阅读">阅读</option>
                 <option value="词汇">词汇</option>
                 <option value="作文">作文</option>
                 <option value="整套">整套</option>
            </select> 
     <select name="year" class="select">
      <option value="2006">2006</option>
      <option value="2007">2007</option>
      <option value="2008">2008</option>
      <option value="2009">2009</option>
      <option value="2010">2010</option>
      <option value="2011">2011</option>
      <option value="2012">2012</option>
      <option value="2013">2013</option>
      <option value="2014">2014</option>
    </select>年
   <select  name="month" class="select">
      @for($i = 1 ; $i <= 12 ;$i++)
       <option value="{{{$i}}}">{{{$i}}}</option>
      @endfor
    </select>月


                                <div class="fr">
                                    <input class="btn btn-large btn-gray css3" type="submit" value="搜 索" />                    
                                </div>
                            </div><!-- search -->

</form>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
        <th>题目类型</th>
        <th>所属section</th>
        <th>编号</th>
        <th>文章编号</th>
        <th>题 目</th>
        <th>考点编号</th>
        <th>正确答案</th>
        <th>难度</th>
<th>添加</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($exercises as $exercise)
				<tr>
					<td>{{{ $exercise->type }}}</td>
					<td>{{{ $exercise->section }}}</td>
					<td>{{{ $exercise->no }}}</td>
					<td>{{{ $exercise->article_no }}}</td>
					<td>{{{ $exercise->description }}}</td>
					<td>{{{ $exercise->point_no }}}</td>
          <td>{{{ $exercise->right_answer }}}</td>
          <td>{{{ $exercise->hard }}}</td>

<td><input type="checkbox" name="exercise_ids[]" value="{{{ $exercise->id }}}" /></td>
				</tr>
<tr>
  <td>选项：</td>
     <td>
              @foreach (Answer::where('exercises_id','=',$exercise->id)->get() as $answer) 
   {{{ $answer->number }}}:{{{ $answer->description }}}
              @endforeach
          </td>
  <td></td>
  <td></td>
</tr>
			@endforeach
		</tbody>
	</table>

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
    }
});
</script>
@stop
