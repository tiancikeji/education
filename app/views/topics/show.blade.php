@extends('layouts.main')

@section('content')

<h1>Show Topic</h1>

<p>{{ link_to_route('topics.index', 'Return to all topics') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>作者</th>
				<!-- <th>Titile</th> -->
				<!-- <th>Pic_url</th> -->
				<!-- <th>Type</th> -->
				<!-- <th>Status</th> -->
				<th>内容</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $topic->author }}}</td>
					<!-- <td>{{{ $topic->titile }}}</td> -->
					<!-- <td>{{{ $topic->pic_url }}}</td> -->
					<!-- <td>{{{ $topic->type }}}</td> -->
					<!-- <td>{{{ $topic->status }}}</td> -->
          <td > <!--<textarea rows="10" cols="30">{{{ $topic->body }}}</textarea> -->
         {{{ $topic->body }}} </td>
</tr>
<tr>
  <!-- <td>{{ link_to_route('topics.edit', '编辑', array($topic->id), array('class' => 'btn btn-info')) }}</td>  -->
         <th></th> 
       <th>{{ Form::open(array('method' => 'DELETE', 'route' => array('topics.destroy', $topic->id))) }}
         {{{$topic->created_at}}} 
          {{ Form::submit('删除', array('class' => 'btn btn-danger')) }}
              {{ Form::close() }}
                    </th>
		</tr>
	</tbody>
</table>

@stop
