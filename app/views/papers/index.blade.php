@extends('layouts.member')

@section('content')

        <div class="grid">

        	<div class="mod">
        		<div class="hd hd-1">
        			<h3>题库</h3>
                    <div class="fr">
                        <ul id="Tabs-2" class="tabs">
                            <li><a href="#">我的题库</a></li>
                            <li><a href="#">做题历史</a></li>
                        </ul>
                    </div>
        		</div>
            	<div class="bd bd-1">

                    <div class="tips tips-2">
                        用户：Zack， 能力评级：<strong class="c-red">A</strong>。
                    </div>

                    <div class="panes-2">
                        <div>
                            <h4 class="hd-simple-2">试题分类检索：</h4>
                            <div class="video-search cf">
                                <ul class="fl">
                                    <li>
                                        <p>试题日期：</p>
                                        <select class="select">
                                            <option value="">1990年</option>
                                        </select>
                                        <select class="select">
                                            <option value="">12月</option>
                                        </select>  ——   
                                        <select class="select">
                                            <option value="">1991年</option>
                                        </select>
                                        <select class="select">
                                            <option value="">12月</option>
                                        </select>                                                                                             
                                    </li>
                                    <li>
                                        <p>科目：</p>
                                        <label for="radio334"><input type="radio" name="radio" id="radio334" /> 整套</label>
                                        <label for="radio335"><input type="radio" name="radio" id="radio335" /> 阅读</label>
                                        <label for="radio336"><input type="radio" name="radio" id="radio336" /> 词汇</label>
                                        <label for="radio337"><input type="radio" name="radio" id="radio337" /> 语法</label>
                                    </li>
                                </ul>
                                <div class="fr">
                                    <input class="btn btn-large btn-gray css3" type="button" value="搜 索" />                    
                                </div>
                            </div><!-- search -->
                            <div class="md-simple">
                                <h4 class="hd-simple">2003年5月 - 2003年7月 （共115条）</h4>
                                <table class="table table-fixed table-list">
                                    <thead>
                                        <tr>
                                            <th>试题日期</th>
                                            <th>科目</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
@if ($papers->count())
			@foreach ($papers as $paper)
                                         <tr>
                                            <td>{{{ $paper->published_date }}}</td>
                                            <td>{{{ $paper->name }}}</td>
                                            <td>
                                                <a href="question-mode.html"><input type="button" class="btn btn-normal btn-white css3" value="开始" /></a>
                                            </td>
                                        </tr>

										
			@endforeach
@else
	There are no papers
@endif
                                    </tbody>
                                </table>
                            </div><!-- question list -->       
                        
                            <div class="paging" style="display:none;">
                                <a href="javascript:void(0);">上一页</a>
                                <a class="on" href="javascript:void(0);">1</a>
                                <a href="javascript:void(0);">2</a>
                                <a href="javascript:void(0);">3</a>
                                <a href="javascript:void(0);">4</a>
                                <a href="javascript:void(0);">5</a>
                                <a href="javascript:void(0);">下一页</a>
                            </div><!-- paging -->
                        </div>                       

                        <div>
                            <h4 class="hd-simple-2">做题历史检索：</h4>
                            <div class="video-search cf">
                                <ul class="fl">
                                    <li>
                                        <p>做题时间：</p>
                                        <label for="radio344"><input type="radio" name="radio" id="radio344" /> 由新到旧</label>
                                        <label for="radio345"><input type="radio" name="radio" id="radio345" /> 由旧到新</label>

                                    </li>
                                    <li>
                                        <p>类型：</p>
                                        <label><input type="checkbox" name="checkbox" /> 单词检测</label>
                                        <label><input type="checkbox" name="checkbox" /> 作业</label>
                                        <label><input type="checkbox" name="checkbox" /> 真题</label>
                                        <label><input type="checkbox" name="checkbox" /> 阶段测验</label>
                                    </li>
                                </ul>
                                <div class="fr">
                                    <input class="btn btn-large btn-gray css3" type="button" value="搜 索" />                    
                                </div>
                            </div><!-- search -->
                            <div class="md-simple">
                                <h4 class="hd-simple">由新到旧-作业 （共15条）</h4>
                                <table class="table table-fixed table-list">
                                    <thead>
                                        <tr>
                                            <th>试题日期</th>
                                            <th>做题类型</th>
                                            <th>做题模式</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
@if ($papers->count())
			@foreach ($papers as $paper)
 
                                        <tr>
                                            <td>2013年3月</td>
                                            <td>单词测验</td>
                                            <td>考试模式</td>
                                            <td><input type="button" class="btn btn-normal btn-white css3" value="查看" /></td>
                                        </tr>
			@endforeach
@else
	There are no papers
@endif

                                    </tbody>
                                </table>
                            </div><!-- question list -->       
                        
                            <div class="paging" style="display:none;">
                                <a href="javascript:void(0);">上一页</a>
                                <a class="on" href="javascript:void(0);">1</a>
                                <a href="javascript:void(0);">2</a>
                                <a href="javascript:void(0);">3</a>
                                <a href="javascript:void(0);">4</a>
                                <a href="javascript:void(0);">5</a>
                                <a href="javascript:void(0);">下一页</a>
                            </div><!-- paging -->                            
                        </div><!-- table list -->

                    </div><!-- Tabs 2 -->
            	</div>
        	</div><!-- mod -->

        </div>
    </div><!-- //container -->
    <div class="footer-push"><!-- 有用不能删除 --></div>


<script>
  $(function() {
      // Tabs 1
      // http://jquerytools.org/demos/tabs/index.html
      $("ul#Tabs-2").tabs("div.panes-2 > div"); 

  });
</script>

@stop
