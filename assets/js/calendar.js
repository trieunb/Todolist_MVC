$(document).ready(function() {
  $('#calendar').fullCalendar({
    editable:true,
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay'
    },
    eventSources: [
      // your event source
      {
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
        // color: 'black',     // an option!
        // textColor: 'yellow' // an option!
      }
      // any other event sources...
    ]
  });
});