@extends('layouts.member')
@section('content')
        <div class="grid">

        	<div class="mod">
        		<div class="hd hd-1">
        			<h3>升级为付费版</h3>
        		</div>
            	<div class="bd bd-2">

                    <dl class="price price-large">
                        <dt>
                            <div class="price-title cf">
                                <em>免费版</em><span>&nbsp;<strong>free</strong></span>
                            </div>
                        </dt>
                        <dd>SAT水平测试；水平分析报告；疑难解答</dd>
                        <dt>
                            <div class="price-title cf">
                                <em>付费版一</em><span>￥<strong>30</strong>/月</span>
                            </div>
                        </dt>
                        <dd>
                            <p>
                                阅读真题视频解析；语法、词汇真题解析；在线真题库；专属复习计划；单词测试，生词整理；每月2次作文批改
                            </p>
                            <div class="price-option cf">
                                <a href="plan-paid.html"><input class="btn btn-large btn-gray fr css3" type="button" value="购 买" /></a>
                                <strong>请选择购买时长：</strong>
                                <label for="radio1"><input type="radio" name="radio" id="radio1" checked="checked" /> 1个月</label>
                                <label for="radio2"><input type="radio" name="radio" id="radio2" /> 3个月</label>
                                <label for="radio3"><input type="radio" name="radio" id="radio3" /> 6个月</label>
                                <label for="radio4"><input type="radio" name="radio" id="radio4" /> 12个月</label>
                            </div>
                        </dd>
                        <dt>
                            <div class="price-title cf">
                                <em>付费版二</em><span>￥<strong>30</strong>/次</span>
                            </div>
                        </dt>
                        <dd>
                            <p>
                                作文批改服务
                            </p>
                            <div class="price-option cf">
                                <a href="plan-paid.html"><input class="btn btn-large btn-gray fr css3" type="button" value="购 买" /></a>
                                <strong>请输入要购买的次数：</strong>
                                <input class="ipt-txt ipt-normal ipt-large ipt-w1" type="text" name="" id="" />
                                <span>请输入1-X的整数。</span>
                            </div>                            
                        </dd>                          
                    </dl>

            	</div>
        	</div><!-- mod -->

@stop
