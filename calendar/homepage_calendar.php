<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />

<link href='packages/core/main.css' rel='stylesheet' />
<link href='packages/daygrid/main.css' rel='stylesheet' />
<link href='packages/timegrid/main.css' rel='stylesheet' />
<script src='packages/core/main.js'></script>
<script src='packages/interaction/main.js'></script>
<script src='packages/daygrid/main.js'></script>
<script src='packages/list/main.js'></script>
<script src='packages/google-calendar/main.js'></script>
<script src='packages/timegrid/main.js'></script>

<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {

      plugins: [ 'interaction', 'dayGrid', 'list', 'googleCalendar', 'timeGrid'],
      editable:false,
      selectable:false,
      selectHelper:false,
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth, timeGridWeek,'
      },

      googleCalendarApiKey: 'AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE',

      eventSources: [    
          'load_calendar.php',          
          {
            googleCalendarId: 'en.philippines#holiday@group.v.calendar.google.com',
            color: 'red'
          }
        
      ],
    });

    calendar.render();
  });

</script>
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #loading {
    display: none;
    position: absolute;
    top: 10px;
    right: 10px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>
</head>
<body>

  <div id='loading'>loading...</div>

  <div id='calendar'></div>

</body>
</html>




  