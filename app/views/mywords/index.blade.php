@extends('layouts.member')

@section('content')

        <div class="grid">

        	<div class="mod">
        		<div class="hd hd-1">
        			<h3>我的生词本</h3>
                    <div class="fr">
                        <input type="button" class="btn btn-normal btn-white css3" value="最小化" />
                    </div>
        		</div>
            	<div class="bd bd-1">

                    <div class="toolbar-search2 pb-30 cf">
                        <ul>
                            <li>
                                <input type="button" class="btn btn-normal btn-white css3" value="显示全部" />
                                <input type="button" class="btn btn-normal btn-white css3" value="按时间顺序排序" />
                            </li>
                            <li>
                                <a href="#">A</a><a href="#">B</a><a href="#">C</a><a href="#">D</a><a class="active" href="#">E</a>
                                <a href="#">F</a><a href="#">G</a><a href="#">H</a><a href="#">I</a><a href="#">J</a>
                                <a href="#">K</a><a href="#">L</a><a href="#">M</a><a href="#">N</a><a href="#">O</a>
                                <a href="#">P</a><a href="#">Q</a><a href="#">R</a><a href="#">S</a><a href="#">T</a>
                                <a href="#">U</a><a href="#">V</a><a href="#">W</a><a href="#">X</a><a href="#">Y</a>
                                <a href="#">Z</a>
                            </li>
                        </ul>
                    </div><!-- search -->
                    
                    <div class="md-simple">
                        <h4 class="hd-simple">生词本</h4>
                        <table class="table table-list">
                            <tbody>
                                <tr>
                                    <td width="5%">1.</td>
                                    <td width="15%">egg</td>
                                    <td width="80%">
                                        <span class="c-blue">蛋；鸡蛋</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="5%">2.</td>
                                    <td width="15%">egg</td>
                                    <td width="80%">
                                        <span class="c-blue">蛋；鸡蛋</span>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td width="5%">3.</td>
                                    <td width="15%">egg</td>
                                    <td width="80%">
                                        <span class="c-blue">蛋；鸡蛋</span>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td width="5%">4.</td>
                                    <td width="15%">egg</td>
                                    <td width="80%">
                                        <span class="c-blue">蛋；鸡蛋</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="5%">5.</td>
                                    <td width="15%">egg</td>
                                    <td width="80%">
                                        <span class="c-blue">蛋；鸡蛋</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="5%">6.</td>
                                    <td width="15%">egg</td>
                                    <td width="80%">
                                        <span class="c-blue">蛋；鸡蛋</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="5%">7.</td>
                                    <td width="15%">egg</td>
                                    <td width="80%">
                                        <span class="c-blue">蛋；鸡蛋</span>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td width="5%">8.</td>
                                    <td width="15%">egg</td>
                                    <td width="80%">
                                        <span class="c-blue">蛋；鸡蛋</span>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td width="5%">9.</td>
                                    <td width="15%">egg</td>
                                    <td width="80%">
                                        <span class="c-blue">蛋；鸡蛋</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="5%">10.</td>
                                    <td width="15%">egg</td>
                                    <td width="80%">
                                        <span class="c-blue">蛋；鸡蛋</span>
                                    </td>
                                </tr>                                                                                              
                            </tbody>
                        </table>
                    </div><!-- question list -->       
                
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


@if ($mywords->count())
			@foreach ($mywords as $myword)
					<td>{{{ $myword->word_id }}}</td>
					<td>{{{ $myword->user_id }}}</td>
                    <td>{{ link_to_route('mywords.edit', 'Edit', array($myword->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('mywords.destroy', $myword->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
			@endforeach
@else
	There are no mywords
@endif

@stop
