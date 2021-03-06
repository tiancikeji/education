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
@unless(Session::has('current_user'))
                                <a href="/registrations/new"><input class="btn btn-large btn-green css3" type="button" value="免费注册" /></a>
                                <a href="/sessions/new"><input class="btn btn-large btn-blue css3" type="button" value="登 录" /></a>
@endunless
                                <a href="/topics"><input class="btn btn-large btn-gray css3" type="button" value="FAQ" /></a>
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
                                                <option value="2006-1-1">2006-1-1</option>
                                                <option value="2007-1-1">2007-1-1</option>
                                                <option value="2008-1-1">2008-1-1</option>
                                                <option value="2009-1-1">2009-1-1</option>
                                                <option value="2010-1-1">2010-1-1</option>
                                                <option value="2011-1-1">2011-1-1</option>
                                                <option value="2012-1-1">2012-1-1</option>
                                                <option value="2013-1-1">2013-1-1</option>
                                                <option value="2014-1-1">2014-1-1</option>
                                            </select>
                                            <select class="select">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                            <select class="select">
        @for($i=1;$i<=30;$i++)
                                                <option value="{{{$i}}}">{{{$i}}}</option>
@endfor
                                            </select>
                                        </li>
                                        <li>
                                            <a href="/exercises?type=阅读"><input class="btn btn-normal btn-white btn-block css3" type="button" value="搜索阅读真题解析" /></a>
                                        </li>
                                        <li>
                                            <select class="select">
                                                <option value="2006-1-1">2006-1-1</option>
                                                <option value="2007-1-1">2007-1-1</option>
                                                <option value="2008-1-1">2008-1-1</option>
                                                <option value="2009-1-1">2009-1-1</option>
                                                <option value="2010-1-1">2010-1-1</option>
                                                <option value="2011-1-1">2011-1-1</option>
                                                <option value="2012-1-1">2012-1-1</option>
                                                <option value="2013-1-1">2013-1-1</option>
                                                <option value="2014-1-1">2014-1-1</option>
                                            </select>
                                            <select class="select">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                            <select class="select">
        @for($i=1;$i<=30;$i++)
                                                <option value="{{{$i}}}">{{{$i}}}</option>
@endfor
                                            </select>
                                        </li>
                                        <li>
                                            <a href="/exercises?type=语法"><input class="btn btn-normal btn-white btn-block css3" type="button" value="搜索语法真题解析" /></a>
                                        </li>
                                        <li>
                                            <a href="/exercises?type="><input class="ipt-txt ipt-normal ipt-block" type="text" name="" id="" placeholder="输入想要查找的词汇" /></a>
                                        </li>
                                        <li>
                                            <a href="/exercises?type=整套"><input class="btn btn-normal btn-white btn-block css3" type="button" value="搜索整套真题解析" /></a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                            <div class="video-index l-black">
                                <ul>

			@foreach ($videos as $video)
                                    <li>
                                        <a href="/videos/{{{$video->id}}}">
                                            <div class="pic-video-mini">
                                                <img src="{{{$video->overlay}}}" alt="video" />
                                                <i class="icon-play"></i>
                                            </div>
                                            <p>{{{$video->title}}}</p>
                                        </a>
                                    </li>
			@endforeach

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
                        <span class="l-black"><a href="/news">更多资讯&gt;&gt;</a></span>
                    </div>
                </div>
                <div class="bd bd-1">
                    <div class="news-index l-black cf">
                        <ul>

			@foreach ($news as $n)
                            <li>
                                <a href="/news/{{{ $n->id }}}">
                                    <div class="pic-news">
                                        <img src="{{{ $n->overlay }}}" alt="" />
                                    </div>
                                </a>
                                <dl>
                                    <dt><a href="/news/{{{ $n->id }}}"><?php echo substr($n->title,0,8); ?></a></dt>
                                    <dd> <?php echo substr($n->subtitle,0,8); ?></dd>
                                </dl>
                            </li>
			@endforeach
                        </ul>
                    </div>
                </div>
            </div><!-- mod -->        

        </div>
    </div><!-- //container -->
    <div class="footer-push"><!-- 有用不能删除 --></div>
@stop 
