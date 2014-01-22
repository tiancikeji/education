@extends('layouts.member')
@section('content')
        <div class="grid">

          <div class="mod">
            <div class="hd hd-1">
              <h3>我的计划</h3>
            </div>
              <div class="bd bd-2">
@if(count(Exam::where("user_id",'=',Session::get('current_user')->id)->get()) == 0)
                    <div class="tips tips-1">
                        <p>
                            您尚未进行SAT水平测试（测试后可查看SAT水平分析），是否现在开始？ 
                        </p>
                    </div>
                    <p class="ac pb-50">
                        <a href="/exams/create"><input class="btn btn-large btn-blue css3" type="button" value="开 始" /></a>
                    </p>

@endif
                    <div class="tips tips-1">
@if(count(Payment::where("user_id",'=',Session::get('current_user')->id)->get()) > 0)
                        <p>

  @if(count(Userplan::where("user_id",'=',Session::get('current_user')->id)->get()) > 0)
          <p>
                <div id="calendar"> </div><!-- calendar -->
          </p>
  @else
          您当前没有日程计划
  @endif
                          </p>

                    @else
                        
         您当前没有日程计划，这是因为日程计划属于我们的付费服务之一，您可以<span class="l-blue l-line"><a href="/upgrade">升级为付费版</a></span>使用


                      @endif


                    </div>  

              </div>
          </div><!-- mod -->

        </div>




<script src="/js/jquery/jquery.tools.min.js"></script>

<!-- 日历 -->
<link rel="stylesheet" href="/js/jquery/fullcalendar/fullcalendar.css" />
<link rel="stylesheet" href="/js/jquery/fullcalendar/fullcalendar.print.css" media='print' />
<script src="/js/jquery/jquery-ui.js"></script>
<script src="/js/jquery/fullcalendar/fullcalendar.js"></script>
<script>
$(document).ready(function() {
  var date = new Date();
  var d = date.getDate();
  var m = date.getMonth();
  var y = date.getFullYear();
  var calendar = $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
            },
            selectable: true,
            selectHelper: true,
            select: function(start, end, allDay) {
              var title = prompt('我要做的事:');
              if (title) {
                calendar.fullCalendar('renderEvent',
              {
                title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                        },
                        true // make the event "stick"
                      );
                }
                calendar.fullCalendar('unselect');
            },

              editable: true,

              events: [
              {
                title: '完成作业',
                  start: new Date(y, m, 1)
                },
              {
                title: '学习生词',
                  start: new Date(y, m, d-5),
                    end: new Date(y, m, d-2)
                },
              {
                id: 999,
                  title: '学习生词',
                  start: new Date(y, m, d-3, 16, 0),
                    allDay: false
                },
              {
                id: 999,
                  title: '学习生词',
                  start: new Date(y, m, d+4, 16, 0),
                    allDay: false
                },
                ]
        });
    });
</script>



@stop
