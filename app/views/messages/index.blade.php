@extends('layouts.member')

@section('content')
        <div class="grid">

        	<div class="mod">
        		<div class="hd hd-1">
        			<h3>消息提醒</h3>
                    <div class="fr">
                        <input class="btn btn-normal btn-white css3" type="button" value="关闭" />
                    </div>
        		</div>
            	<div class="bd bd-1">

                    <div class="details-wrap2 cf">

                        <div class="grid-150 fl">

                            <div class="msg-menu">
                                <dl>
                                    <dt>未读消息</dt>
                                    <dd class="active"><a href="#">日程提醒</a></dd>
                                    <dd><a href="#">教师消息</a></dd>
                                    <dd><a href="#">评论提醒</a></dd>
                                    <dt>已读消息</dt>
                                    <dd><a href="#">日程提醒</a></dd>
                                    <dd><a href="#">教师消息</a></dd>
                                    <dd><a href="#">评论提醒</a></dd>                                    
                                </dl>
                            </div><!-- menu -->

                        </div><!-- msg menu -->

                        <div class="grid-830 fr">

                            <div class="msg-list l-black">
                                <ul>
@if ($messages->count())
			@foreach ($messages as $message)
                                 <li><input type="checkbox" name="" id="" /><a href="#">{{{ $message->body}}}</a></li>
			@endforeach
@else
	There are no messages
@endif
                                </ul>
                            </div><!-- list -->

                        </div><!-- msg list -->

                    </div>

            	</div>
        	</div><!-- mod -->

        </div>
    </div><!-- //container -->
    <div class="footer-push"><!-- 有用不能删除 --></div>



@stop
