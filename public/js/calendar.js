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
  selectable: true, selectHelper: true,
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

