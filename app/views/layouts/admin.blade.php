<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="/js/jquery/jquery.js"></script>
</head>

<body>
<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Admin</a>
</div>
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li class="active"><a href="/">Home</a></li>
<li><a href="#about">About</a></li>
</ul>
</div><!-- /.nav-collapse -->
</div><!-- /.container -->
</div><!-- /.navbar -->

<div class="container">

<div class="row row-offcanvas row-offcanvas-right">


<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">

<div class="list-group">
<a href="#" class="list-group-item">咨询管理</a>
<ul>
<li><a href="/admin/news/create" class="list-group-item">新建咨询</a></li>
<li><a href="/admin/news" class="list-group-item">咨询列表</a></li>
</ul>

  
<a href="#" class="list-group-item">用户管理</a>
<ul>
<li><a href="/admin/users" class="list-group-item">学生列表</a></li>
<li><a href="/admin/reports" class="list-group-item">评级报告</a></li>
<li><a href="/admin/exams" class="list-group-item">做题历史</a></li>
<li><a href="/admin/compositions" class="list-group-item">批改作文 </a></li>
<li><a href="/admin/payments" class="list-group-item">消费记录 </a></li>
<li><a href="/admin/messages" class="list-group-item">发送信息 </a></li>
<li><a href="/admin/teachers/create" class="list-group-item">新建教师</a></li>
</ul>

<a href="#" class="list-group-item">视频管理</a>
<ul>
  <li><a href="/admin/videos" class="list-group-item">视频列表</a></li>
  <li><a href="/admin/videos/create" class="list-group-item">新建视频</a></li>
</ul>

<!-- <a href="/admin/words" class="list-group-item">生词管理</a> -->
<!-- <a href="/admin/comments" class="list-group-item">评论管理</a> -->
<!-- <a href="/admin/exercises" class="list-group-item">试题管理</a> -->
<!-- <a href="/admin/topics" class="list-group-item">常见问题</a> -->
<!-- <a href="/admin/students" class="list-group-item">学生管理</a> -->
<!-- <a href="/admin/teachers" class="list-group-item">教师管理</a> -->
<!-- <a href="/admin/classes" class="list-group-item">课程管理</a> -->

<a href="#" class="list-group-item">日程管理</a>
<ul>
  <li><a href="/admin/plans" class="list-group-item">日程模板</a></li>
  <li><a href="/admin/plans/create" class="list-group-item">新建日程模板</a></li>
  <li><a href="/admin/homeworks" class="list-group-item">作业测试模板</a></li>
</ul>

<a href="#" class="list-group-item">作业管理</a>
<ul>
  <li><a href="/admin/papers" class="list-group-item">题库列表</a></li>
  <li><a href="/admin/exercises" class="list-group-item">上传试题</a></li>
</ul>

</div><!--/span-->
</div>

<div class="col-xs-12 col-sm-9">
  @if (Session::has('message'))
  <div class="flash alert">
  <p>{{ Session::get('message') }}</p>
  </div>
  @endif

  @yield('main')

  </div><!--/span-->
</div><!--/row-->

<hr>

<footer>
  <p>&copy; <a href="www.tiancikeji.com" target="blank">Tiancikeji.com</a> 2013</p>
</footer>

</div><!--/.container-->



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/bootstrap.min.js"></script>
</body>
</html>


