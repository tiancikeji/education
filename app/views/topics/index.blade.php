@extends('layouts.member')

@section('content')
        <div class="grid">

        	<div class="mod">
        		<div class="hd hd-1">
        			<h3>疑难解答</h3>
                    <div class="fr">
                        {{ link_to_route('topics.create', '发布新帖') }}
                    </div>
        		</div>
            	<div class="bd bd-1">

                    <div class="btn-groups cf">
                        <div class="fl">
                            <input type="button" class="btn btn-normal btn-white css3" value="按发帖时间排序" />
                            <input type="button" class="btn btn-normal btn-white css3" value="按回帖时间排序" />
                            <input type="button" class="btn btn-normal btn-white css3" value="查看最热问题" />
                        </div>
                <form action="/topics/check" method="post">
                        <div class="fr">
                            <input type="text" class="ipt-txt ipt-normal" name="check" id="" placeholder="输入标签" />
                            <input type="submit" class="btn btn-normal btn-white css3" value="搜索帖子" />                          
                        </div>
                </form>
                    </div><!-- btn groups -->       

                    <div class="md-simple">
                        <h4 class="hd-simple">按发帖时间排序 （共{{{ $topics->count()}}}条）</h4>
                        <table class="table table-list">
                            <thead>
                                <tr>
                                    <th>帖子标题</th>
                                    <th>帖子</th>
                                    <th>标签</th>
                                    <th>浏览数量</th>
                                </tr>
                            </thead>
                            <tbody>
			@foreach ($topics as $topic)
                                  <tr>
                                    <td>{{{ $topic->titile }}}</td>
                                    <td>{{{ $topic->body }}}</td>
                                    <td>单词测验,考试模式</td>
                                    <td>6244</td>
                                </tr> 
			@endforeach
                                                               
                            </tbody>
                        </table>
                    </div><!-- table list -->       
                    
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
    </div><!-- //container -->
    <div class="footer-push"><!-- 有用不能删除 --></div>




@stop
