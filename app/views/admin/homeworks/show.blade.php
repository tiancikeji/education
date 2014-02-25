@extends('layouts.admin')

@section('main')

<h1>作业测试模板 </h1>

{{ link_to_route('admin.homeworks.edit', '编辑', array($homework->id), array('class' => 'btn btn-info')) }}
<h3> 名称: {{{ $homework->name }}}</h3>
<input type="hidden" id="homework_id" value="{{{ $homework->id }}}" />
</p>

<form action="/admin/homeworks/{{{ $homework->id }}}" method="get" accept-charset="utf-8">
                            <div class="video-search cf">
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


所属section:
<select  name="section" class="select">
      @for($i = 1 ; $i <= 10 ;$i++)
       <option value="{{{$i}}}">{{{$i}}}</option>
      @endfor
    </select>
编号:
<select  name="section" class="select">
      @for($i = 1 ; $i <= 50 ;$i++)
       <option value="{{{$i}}}">{{{$i}}}</option>
      @endfor
    </select>
考点编号:
    <select  name="point_no" class="select">
       <option value="000001">考点A</option>
       <option value="000002">考点B</option>
       <option value="000003">考点C</option>
       <option value="000004">考点D</option>
    </select>
类型：
            <select name="type" >
                 <option value="语法">语法</option>
                 <option value="阅读">阅读</option>
                 <option value="词汇">词汇</option>
                 <option value="作文">作文</option>
            </select> 

                                    <input class="btn btn-large btn-gray css3" type="submit" value="搜 索" />                    
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
