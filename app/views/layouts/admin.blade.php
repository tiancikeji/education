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
<a href="/admin/users" class="list-group-item active">用户管理</a>
<a href="/admin/messages" class="list-group-item">消息管理</a>
<a href="/admin/words" class="list-group-item">生词管理</a>
<a href="/admin/videos" class="list-group-item">视频管理</a>
<a href="/admin/news" class="list-group-item">新闻管理</a>
<a href="/admin/papers" class="list-group-item">试卷管理</a>
<a href="/admin/topics" class="list-group-item">常见问题</a>
<a href="/admin/students" class="list-group-item">学生管理</a>
<a href="/admin/teachers" class="list-group-item">教师管理</a>
<a href="/admin/classes" class="list-group-item">课程管理</a>
<a href="/admin/homeworks" class="list-group-item">作业管理</a>
</div>
</div><!--/span-->

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
<script src="/js/jquery/jquery.js"></script>
<script src="/js/jquery/jquery.tools.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>


