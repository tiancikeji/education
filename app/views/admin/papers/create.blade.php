@extends('layouts.admin')

@section('main')

<h1>添加试卷</h1>

{{ Form::open(array('route' => 'admin.papers.store')) }}
	<ul>
        <li>
            {{ Form::label('name', '试卷名称:') }}
            {{ Form::text('name') }}
        </li>
        <li>
            {{ Form::label('type', '试卷科目:') }}
            <select name="type" id="">
                 <option value="语法">语法</option>
                 <option value="阅读">阅读</option>
                 <option value="词汇">词汇</option>
                 <option value="作文">作文</option>
                 <option value="整套">整套</option>
            </select>            
        </li>


        <li>
            {{ Form::label('published_date', '试卷年月:') }}
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

        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


