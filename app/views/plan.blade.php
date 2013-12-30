<!DOCTYPE HTML>
<!--[if IE 6]><html class="ie6 ielt9 no-css3 no-js lte7" lang="en" dir="ltr"><![endif]-->
<!--[if IE 7]><html class="ie7 ielt9 no-css3 no-js lte7" lang="en" dir="ltr"><![endif]-->
<!--[if IE 8]><html class="ie8 ielt9 no-css3 no-js" lang="en" dir="ltr"><![endif]-->
<!--[if IE 9]><html class="ie9 ielt9 no-css3 no-js" lang="en" dir="ltr"><![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8) | !(IE 9) ]><!--><html lang="en" dir="ltr" class="no-js"><!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>我的计划 - 致远教育</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/public.css" />
<link rel="stylesheet" href="css/screen.css" />
<!--[if IE]>
<script src="js/ie/html5.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<style type="text/css">.css3{behavior: url(js/ie/css3.htc);-pie-lazy-init: true; position: relative;}.ie6png{-pie-png-fix: true;}</style>
<script src="js/ie/ie9.js"></script>
<![endif]-->
<!--[if IE 6]>
<script src="js/ie/png.js"></script>
<script>DD_belatedPNG.fix('.pngfix, .pngfix img, .logo img');</script>
<![endif]-->
<script src="js/ie/modernizr.js"></script>
<script src="js/jquery/jquery.js"></script>
<script src="js/jquery/jquery.tools.min.js"></script>
<script>
$(document).ready(function(){
    
    // 底部工具栏
    $(window).scroll(function(){
        if($.browser.msie && $.browser.version=="6.0")$(".toolbar-user").css("top",$(window).height()-$(".toolbar-user").height()+$(document).scrollTop());
    });
    
});
</script>
</head>
<body>

<div class="wrap-page">
    <div class="toolbar">
        <div class="grid c-gray">

            <div class="fl">
                我们竭尽所能为您提供出色的SAT考试服务
            </div>
            <div class="fr">
                <ul class="toolbar-menu l-gray l-line">
                    <li>Zack</li>
                    <li><a href="upgrade.html">升级为付费版</a></li>
                    <li><a href="user-center.html">账户中心</a></li>
                    <li><a href="user-message.html">提醒（<span class="c-red">5</span>）</a></li>
                    <li><a href="index.html">安全退出</a></li>
                </ul>
            </div>

        </div>
    </div><!-- //toolbar -->


    <header class="header header-user">
        <div class="grid">

        	<h1 class="logo fl">
        		<a href="index.html">
        			<img src="images/logo.png" alt="致远教育" title="致远教育" />
        		</a>
        	</h1><!-- logo -->

            <nav class="nav fl">
            	<ul>
            		<li class="active"><a href="plan.html">我的计划</a></li>
                    <li><a href="video.html">解析视频</a></li>
                    <li><a href="question.html">题库</a></li>
                    <li><a href="faq.html">疑难解答</a></li>
            	</ul>
            </nav><!-- nav -->

        </div>
    </header><!-- //header -->


    <div class="container">
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
    </div><!-- //container -->
    <div class="footer-push"><!-- 有用不能删除 --></div>
</div>


<footer class="footer">
    <div class="grid c-black">
        
        <div class="footer-contact fl">
            <ul>
                <li><i class="icon-footer icon-footer-1"></i>QQ：123456789</li>
                <li><i class="icon-footer icon-footer-2"></i>Tel：123456789</li>
                <li><i class="icon-footer icon-footer-3"></i>Email：abc@abc.com</li>
                <li><i class="icon-footer icon-footer-4"></i>Mobile：abc@abc.com</li>
            </ul>
        </div>
        <div class="footer-address fr">
            <p>地址：上海市虹口区松花江路2500号5号楼405</p>
            <p>致远教育 &copy; 2013沪ICP备12000058</p>
        </div>

    </div>
</footer><!-- //footer -->


<div class="toolbar-user ac">
    <div class="grid">
        我的工具栏：
        <a href="toolbar-word.html"><input type="button" class="btn btn-normal btn-white css3" value="单词测试" /></a>
        <a href="toolbar-neword.html"><input type="button" class="btn btn-normal btn-white css3" value="我的生词本" /></a>
        <a href="toolbar-problem.html"><input type="button" class="btn btn-normal btn-white css3" value="我的难题集" /></a>
        <a href="toolbar-search.html"><input type="button" class="btn btn-normal btn-white css3" value="真题搜索" /></a>
    </div>
</div><!-- //toolbar user -->


</body>
</html>
