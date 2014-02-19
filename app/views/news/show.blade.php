@extends('layouts.main')

@section('content')
        <div class="grid">

            <div class="mod">
                <div class="hd hd-1">
                    <h3>资讯列表</h3>
                </div>
                <div class="bd bd-1">
                    <div class="details-wrap cf">

                        <div class="grid-250 fl">

                            <div class="news-list l-black f-16">
                                <ul>
			                            @foreach ($newsarr as $newsone)
                                    <li ><a href="/news/{{{ $newsone->id }}}}">{{{ $newsone->title }}}</a></li>
			                            @endforeach
                                </ul>
                            </div><!-- list -->


                        </div><!-- news list -->

                        <div class="grid-730 fr">
                            <div class="details news-details">
                                <div class="details-title">
                                    <h1>{{{ $news->title }}}</h1>
                                    <p>{{{ $news->author }}}--{{{ $news->created_at }}}</p>
                                </div>
                                <div class="details-cont">
                                  <?php echo $news->body; ?>
                                </div>
                            </div>
                        </div><!-- news details -->

                    </div>
                </div>
            </div><!-- mod -->        

        </div>
    </div><!-- //container -->
    <div class="footer-push"><!-- 有用不能删除 --></div>


@stop
