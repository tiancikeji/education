@extends('layouts.member')

@section('content')
        <div class="grid">

          <div class="mod">
            <div class="hd hd-1">
              <h3>教学视频</h3>
            </div>
              <div class="bd bd-1">

                    <h4 class="hd-simple-2">视频分类检索：</h4>
                    <div class="video-search cf">
                        <ul class="fl">
                            <li>
               <form action="/videos/check" method="post"> 
                                <p>试题日期：
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
                                </p>
                            </li>
                            <!-- <li> -->
                                <!-- <p>Section选择：</p> -->
                                <!-- <label for="radio334"><input type="radio" name="radio" id="radio334" /> section 1</label> -->
                                <!-- <label for="radio335"><input type="radio" name="radio" id="radio335" /> section 2</label> -->
                                <!-- <label for="radio336"><input type="radio" name="radio" id="radio336" /> section 3</label>                                                   -->
                            <!-- </li> -->
                            <li>
                                <p>题目编号：
           <select class="select">
        @for($i=1;$i<=30;$i++)
                                                <option value="{{{$i}}}">{{{$i}}}</option>
@endfor
                                            </select>

                                </p>
                            </li>                          
                        </ul>
                        <div class="fr">
                            <input class="btn btn-large btn-gray css3" type="submit" value="搜 索" />                    
                        </div>
                        </form>
                    </div><!-- video search -->                      

                    <div class="md-simple">
                        <h4 class="hd-simple">（共{{{$videos->count()}}}条）</h4>
                        <div class="video-list l-black cf">
                            <ul>
@if ($videos->count())
      @foreach ($videos as $video)
                                <li>
                                    <a href="/videos/{{{ $video->id }}}">
                                        <div class="pic-video-normal">
                                            <img src="{{{ $video->overlay }}}" alt="video" />
                                            <i class="icon-play"></i>
                                        </div>
                                    </a>
                                    <dl>
                                        <dt><a href="#">{{{ $video->title }}}</a></dt>
                                        <dd>标签：试题讲解 阅读</dd>
                                        <dd>播放：0</dd>
                                        <dd>评论：{{{Comment::where('video_id','=',$video->id)->count() }}}条</dd>
                                        <!-- <dd>讲师：{{{ $video->author}}}</dd> -->
                                    </dl>
                                </li>

      @endforeach
@else
  There are no videos
@endif
                            </ul>
                        </div>
                    </div><!-- video list -->

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
