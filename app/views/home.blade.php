@extends('layouts.main')
@section('content')
 <div class="grid">
            <div class="cf">
                <div class="grid-520 fl">
                	<div class="mod">
                		<div class="hd hd-1">
                			<h3>学习类型</h3>
                		</div>
                    	<div class="bd bd-2">
                            <dl class="price">
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
                                <dd>阅读真题视频解析；语法、词汇真题解析；在线真题库；专属复习计划；单词测试，生词整理；每月2次作文批改</dd>
                                <dt>
                                    <div class="price-title cf">
                                        <em>付费版二</em><span>￥<strong>30</strong>/次</span>
                                    </div>
                                </dt>
                                <dd>作文批改服务</dd>                          
                            </dl>
                            <div class="btn-wrap-1">
                                <a href="register.html"><input class="btn btn-large btn-green css3" type="button" value="免费注册" /></a>
                                <a href="login.html"><input class="btn btn-large btn-blue css3" type="button" value="登 录" /></a>
                                <a href="faq.html"><input class="btn btn-large btn-gray css3" type="button" value="FAQ" /></a>
                            </div>
                    	</div>
                	</div><!-- mod -->
                </div>

                <div class="grid-420 fr">
                    <div class="mod">
                        <div class="hd hd-1">
                            <h3>功能体验</h3>
                        </div>
                        <div class="bd bd-2">
                            <form action="">
                                <div class="form form-1">
                                    <ul>
                                        <li>
                                            <select class="select">
                                                <option value="">试题年月</option>
                                            </select>
                                            <select class="select">
                                                <option value="">section</option>
                                            </select>
                                            <select class="select">
                                                <option value="">试题编号</option>
                                            </select>
                                        </li>
                                        <li>
                                            <input class="btn btn-normal btn-white btn-block css3" type="button" value="搜索阅读真题解析" />
                                        </li>
                                        <li>
                                            <select class="select">
                                                <option value="">试题年月</option>
                                            </select>
                                            <select class="select">
                                                <option value="">section</option>
                                            </select>
                                            <select class="select">
                                                <option value="">试题编号</option>
                                            </select>
                                        </li>
                                        <li>
                                            <input class="btn btn-normal btn-white btn-block css3" type="button" value="搜索语法真题解析" />
                                        </li>
                                        <li>
                                            <input class="ipt-txt ipt-normal ipt-block" type="text" name="" id="" placeholder="输入想要查找的词汇" />
                                        </li>
                                        <li>
                                            <input class="btn btn-normal btn-white btn-block css3" type="button" value="搜索语法真题解析" />
                                        </li>
                                    </ul>
                                </div>
                            </form>
                            <div class="video-index l-black">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="pic-video-mini">
                                                <img src="images/video/pic-video.jpg" alt="video" />
                                                <i class="icon-play"></i>
                                            </div>
                                            <p>视频标题</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pic-video-mini">
                                                <img src="images/video/pic-video.jpg" alt="video" />
                                                <i class="icon-play"></i>
                                            </div>
                                            <p>视频标题</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pic-video-mini">
                                                <img src="images/video/pic-video.jpg" alt="video" />
                                                <i class="icon-play"></i>
                                            </div>
                                            <p>视频标题</p>
                                        </a>
                                    </li>                                
                                </ul>
                            </div>
                        </div>
                    </div><!-- mod -->
                </div>
            </div>

            <div class="mod">
                <div class="hd hd-2">
                    <h3>最新资讯</h3>
                    <div class="fr">
                        <span class="l-black"><a href="news.html">更多资讯&gt;&gt;</a></span>
                    </div>
                </div>
                <div class="bd bd-1">
                    <div class="news-index l-black cf">
                        <ul>
                            <li>
                                <a href="news.html">
                                    <div class="pic-news">
                                        <img src="images/news/pic-news.jpg" alt="news" />
                                    </div>
                                </a>
                                <dl>
                                    <dt><a href="#">SAT新题出现了</a></dt>
                                    <dd>适应高等教育大众化，普及发展趋势，满足更多社会成员...</dd>
                                </dl>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="pic-news">
                                        <img src="images/news/pic-news.jpg" alt="news" />
                                    </div>
                                </a>
                                <dl>
                                    <dt><a href="#">SAT新题出现了</a></dt>
                                    <dd>适应高等教育大众化，普及发展趋势，满足更多社会成员...</dd>
                                </dl>
                            </li>                        
                            <li>
                                <a href="#">
                                    <div class="pic-news">
                                        <img src="images/news/pic-news.jpg" alt="news" />
                                    </div>
                                </a>
                                <dl>
                                    <dt><a href="#">SAT新题出现了</a></dt>
                                    <dd>适应高等教育大众化，普及发展趋势，满足更多社会成员...</dd>
                                </dl>
                            </li>                        
                            <li>
                                <a href="#">
                                    <div class="pic-news">
                                        <img src="images/news/pic-news.jpg" alt="news" />
                                    </div>
                                </a>
                                <dl>
                                    <dt><a href="#">SAT新题出现了</a></dt>
                                    <dd>适应高等教育大众化，普及发展趋势，满足更多社会成员...</dd>
                                </dl>
                            </li>                        
                        </ul>
                    </div>
                </div>
            </div><!-- mod -->        

        </div>
    </div><!-- //container -->
    <div class="footer-push"><!-- 有用不能删除 --></div>
@stop 
