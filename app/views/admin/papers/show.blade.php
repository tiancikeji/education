@extends('layouts.admin')

@section('main')

<h1>显示试卷 </h1>

<p>{{ link_to_route('papers.index', '返回全部试卷') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
        <th>试卷名称</th> 
        <th>试卷科目</th>
				<th>试卷年月</th>
<th></th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $paper->name }}}</td>
          <td>{{{ $paper->type }}}</td>
					<td>{{{ $paper->year }}}/{{{ $paper->month }}}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('papers.destroy', $paper->id))) }}
                            {{ Form::submit('删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

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
			</tr>
		</thead>

		<tbody>
			@foreach (Exercise::where("paper_id",$paper->id)->where('article_no','0')->get() as $exercise)
				<tr>
					<td>{{{ $exercise->type }}}</td>
					<td>{{{ $exercise->section }}}</td>
					<td>{{{ $exercise->no }}}</td>
					<td>{{{ $exercise->article_no }}}</td>
					<td>{{{ $exercise->description }}}</td>
					<td>{{{ $exercise->point_no }}}</td>
          <td>{{{ $exercise->right_answer }}}</td>
          <td>{{{ $exercise->hard }}}</td>
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

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Content</th>
			</tr>
		</thead>

		<tbody>
			@foreach (Article::where('paper_id',$paper->id)->get() as $article)
				<tr>
					<td>{{{ $article->no }}}</td>
					<td>{{{ $article->content }}}</td>
				</tr>

        <tr>
          <td colspan=2>

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
<th>ID</th>
				<th>编号</th>
				<th>描述</th>
        <th>正确答案</th>
        <th>难度</th>
        <th></th>
        <th></th>
			</tr>
		</thead>

		<tbody>
			@foreach (Exercise::where("paper_id",$paper->id)->where('article_no',$article->no)->get() as $exercise)
				<tr>
  <td>{{{ $exercise->id }}}</td>
					<td>{{{ $exercise->no }}}</td>
					<td>{{{ $exercise->description }}}</td>
          <td>{{{ $exercise->right_answer }}}</td>
          <td>{{{ $exercise->hard }}}</td>
          <td>{{{ $exercise->type }}}</td>
          <td>{{{ $exercise->article_no }}}</td>
				</tr>
<tr>
  <td>答案：</td>
     <td>
              @foreach (Answer::where('exercises_id','=',$exercise->id)->get() as $answer) 
                {{{ $answer->number }}}.
                {{{ $answer->description }}}
              @endforeach
          </td>
  <td></td>
  <td></td>
</tr>
			@endforeach
		</tbody>
	</table>



</td>
        </tr>
			@endforeach
		</tbody>
	</table>


@stop
