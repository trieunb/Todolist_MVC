$(document).ready(function() {
  $('#calendar').fullCalendar({
    editable:true,
    header:{
      left:'prev,next today',
      center:'title',
      right:'month,agendaWeek,agendaDay'
    },
    eventRender: function(event, $el) {
      var date = moment(event.start).format('YYYY/MM/DD');
      var content   =   'Start Date: ' + date.toLocaleString() 
          content  +=   '; Status: ' + event.status ;
      $el.popover({
        title: event.title,
        content: content,
        trigger: 'hover',
        placement: 'top',
        container: 'body'
      });
    },
    events: function(start, end, timezone, callback) {
        $.ajax({
          type: 'GET',
          url: 'index.php?controller=calendar&action=getDataCalendar',
          dataType: 'json',
          success: function(res) {
            var events = res.events;
            callback(events);
         }
        });
    }
  });
});