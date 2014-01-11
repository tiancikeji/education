@extends('layouts.admin')

@section('main')

<h1>Create Plan</h1>

{{ Form::open(array('route' => 'admin.plans.store')) }}
	<ul>
        <li>
            {{ Form::label('event', 'Event:') }}
            {{ Form::text('event') }}
        </li>

        <li>
            {{ Form::label('event_date', 'Event_date:') }}
            {{ Form::text('event_date') }}
        </li>

        <li>
            {{ Form::label('status', 'Status:') }}
            {{ Form::text('status') }}
        </li>

        <li>
            {{ Form::label('user_id', 'User_id:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('type', 'Type:') }}
            {{ Form::text('type') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif



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

      <div id="calendar"> </div><!-- calendar -->

@stop
