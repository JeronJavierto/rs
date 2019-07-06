<?php
//index.php




?>
<!DOCTYPE html>
<html>
 <head>
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <script>
   
  $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({
    eventLimit: true,
    navLinks: true,
    nowIndicator: true,
    windowResize: function(view) {
    },
    businessHours: {          
        daysOfWeek: [ 1, 2, 3, 4, 5, 6 ], 
        startTime: '8:00', 
        endTime: '18:00', 
    },
    editable:true,
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay'
    },    
    events: 'load_calendar.php',
    selectable:true,
    selectHelper:true,
    select: function(start, end, allDay)
    {
     var title = prompt("Enter Event Name:");
     var facility = prompt("Facility: ");
     var participants = prompt("Estimated participants: ");

     if(title && facility && participants)
     {
      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm");
      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm");
      $.ajax({
       url:"insert_calendar.php",
       type:"POST",
       data:{title:title, facility:facility, participants:participants, start:start, end:end},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Added Successfully");
       }
      })
     }
    },
    editable:true,
    eventResize:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"update_calendar.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function(){
       calendar.fullCalendar('refetchEvents');
       alert('Event Update');
      }
     })
    },
   });
  });
   
  </script>
 </head>
 <body>
  <br />  
  <br />
  <div class="container">
   <div id="calendar"></div>
  </div>
 </body>
</html>