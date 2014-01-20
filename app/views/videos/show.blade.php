@extends('layouts.member')

@section('content')
        <div class="grid">

        	<div class="mod">
        		<div class="hd hd-1">
        			<h3>视频详情</h3>
        		</div>
            	<div class="bd bd-1">
                    
                    <h1 class="video-title">{{{ $video->title }}}<span>讲师：{{{ $video->author }}}</span></h1>
                    <div class="video-cont">
                        <embed src="{{{ $video->url }}}" quality="high" width="100%" height="100%" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash"></embed>
                    </div>
                    <div class="video-intro cf">
                        <div class="fl">标签：试题讲解 阅读</div>
                        <div class="fr">
                            <span>播放：0</span>
                            <span>评论：{{$comments->count()}}条</span>
                        </div>
                    </div><!-- video details -->

                    <div class="comment cf">
{{ Form::open(array('route' => 'comments.store')) }}
            {{ Form::hidden('video_id',$video->id) }}
            {{ Form::hidden('user_id',Session::get('current_user')->id) }}
            <textarea class="textarea ipt-block" name="content" placeholder="有什么学习心得要跟大家说说..."></textarea>
              <p class="ar">
			            {{ Form::submit('发表评论', array('class' => 'btn btn-large btn-gray css3')) }}
             </p>
{{ Form::close() }}
                    </div><!-- comment -->

                    <table class="comment-list">
@if ($comments->count())
			@foreach($comments as $comment)
                        <tr>
                            <td class="at comment-list-author">
                                <a target="_blank" href="user-center.html">
                                    <div class="avatar avatar-normal">
                                        <img alt="头像" src="/images/avatar.jpg" />
                                    </div>
                                </a>
                            </td>
                            <td>
                                <div class="comment-list-authorname f-16 l-black">
                                    {{{User::find($comment->user_id)->name  }}}
                                </div>
                                <div class="comment-list-body">
                                    <p>{{{ $comment->content }}}</p>
                                </div>
                                <div class="comment-list-poption f-12 cf">
                                    <span class="c-lightgray fl">{{{ $comment->created_at }}}</span>
                                </div>
                            </td>
                        </tr>
			@endforeach
@else
	There are no comments
@endif
                    </table><!-- comment list -->

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
        	</div><!-- mod -->

        </div>

			
			

@stop