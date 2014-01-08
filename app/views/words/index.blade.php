@extends('layouts.member')

@section('content')
        <div class="grid">

        	<div class="mod">
        		<div class="hd hd-1">
        			<h3>单词测试</h3>
                    <div class="fr">
                        <input type="button" class="btn btn-normal btn-white css3" value="重置" />
                        <input type="button" class="btn btn-normal btn-white css3" value="最小化" />
                    </div>
        		</div>
            	<div class="bd bd-1">

                    <div class="toolbar-search pb-30 cf">
                        <ul class="fl">
                            <li>请选择单词来源：</li>
                            <li>
                                <label for="radio334"><input type="radio" name="radio" id="radio334" /> 生词本</label>
                            </li>
                            <li>
                                <label for="radio335"><input type="radio" name="radio" id="radio335" /> 系统随机生成</label>
                            </li>
                        </ul>
                        <div class="fr">
                            <input class="btn btn-large btn-gray css3" type="button" value="开始测试" />                    
                        </div>
                    </div><!-- search -->
                    <div class="md-simple">
                        <h4 class="hd-simple">生词本</h4>
                        <table class="table table-list">
                            <tbody>
@if ($words->count())
			@foreach ($words as $word)

                                <tr>
                                    <td width="5%">1.</td>
                                    <td width="20%">{{{ $word->english }}}</td>
                                    <td width="30%">
                                        <input type="text" placeholder="填写对应中文" id="" name="" class="ipt-txt ipt-normal ipt-w4">
                                    </td>
                                    <td width="30%">
                                        <label for="radio534"><input type="radio" name="radio" id="radio534" /> 正确</label>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="radio534"><input type="radio" name="radio" id="radio534" /> 错误</label>
                                    </td>
                                    <td width="15%">
                                        <a href="question-mode.html"><input type="button" class="btn btn-normal btn-white css3" value="加入生词本" /></a>
                                    </td>
                                </tr>

			@endforeach
@else
	There are no words
@endif
                            </tbody>
                        </table>
                    </div><!-- question list -->       
                
                    <div class="paging">
                        <a href="javascript:void(0);">上一页</a>
                        <a class="on" href="javascript:void(0);">1</a>
                        <a href="javascript:void(0);">2</a>
                        <a href="javascript:void(0);">3</a>
                        <a href="javascript:void(0);">4</a>
                        <a href="javascript:void(0);">5</a>
                        <a href="javascript:void(0);">下一页</a>
                    </div><!-- paging -->

            	</div>
        	</div><!-- mod -->

        </div>



@stop
