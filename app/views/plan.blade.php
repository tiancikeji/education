@extends('layouts.member')
@section('content')
        <div class="grid">

        	<div class="mod">
        		<div class="hd hd-1">
        			<h3>我的计划</h3>
                    <div class="fr">
                        <a href="calendar.html"><input type="button" class="btn btn-normal btn-white css3" value="日历" /></a>
                    </div>
        		</div>
            	<div class="bd bd-2">

                    <div class="tips tips-1">
                        <p>
                            您尚未进行SAT水平测试（测试后可查看SAT水平分析），是否现在开始？
                        </p>
                    </div>
                    <p class="ac pb-50">
                        <a href="test.html"><input class="btn btn-large btn-blue css3" type="button" value="开 始" /></a>
                    </p>
                    <div class="tips tips-1">
                        <p>
                            您当前没有日程计划，这是因为日程计划属于我们的付费服务之一，您可以<span class="l-blue l-line"><a href="upgrade.html">升级为付费版</a></span>使用
                        </p>
                    </div>  

            	</div>
        	</div><!-- mod -->

        </div>

@stop
