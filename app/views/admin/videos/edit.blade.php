@extends('layouts.admin')

@section('main')

<h1>编辑视频</h1>
{{ Form::model($video, array('method' => 'PATCH', 'route' => array('admin.videos.update', $video->id),'files'=>true)) }}
	<ul>
<li>
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
  section: <select class="select" name='section'>
      @for($i = 1 ; $i <= 4 ;$i++)
       <option value="{{{$i}}}">{{{$i}}}</option>
      @endfor
    </select>
</li>
            {{ Form::input('hidden','author','作者') }}
        <li>
            {{ Form::label('title', ' 标题 :') }}
            <input type="text" name="title" size="18" maxlength="18" />
        </li>
         <li>
            {{ Form::label('overlay', '图像 :') }}
            {{ Form::file('overlay') }}
        </li>

        <li>
            {{ Form::label('url', 'Url:') }}
            {{ Form::file('url') }}
        </li>

        <li>  
        Tags:
        <input type="text" name="tags[]" value="" size=10 maxlength=18/>
        <input type="text" name="tags[]" value="" size=10 maxlength=18/>
        <input type="text" name="tags[]" value="" size=10 maxlength=18/>
      </li>

		<li>
			{{ Form::submit('编辑', array('class' => 'btn btn-info')) }}
			{{ link_to_route('admin.videos.show', ' 取消', $video->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
