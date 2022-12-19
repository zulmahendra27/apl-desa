<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Test Calendar</title>

  <!-- Add the evo-calendar.css for styling -->
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/css/evo-calendar.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap"
    rel="stylesheet">
  <style>
    #calendar {
      font-family: 'Source Sans Pro', sans-serif;
    }
  </style>
</head>

<body>
  <div id="calendar"></div>

  <div id="dataAgenda"></div>

  <div id="demo"></div>

  <!-- Add jQuery library (required) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

  <!-- Add the evo-calendar.js for.. obviously, functionality! -->
  <script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/js/evo-calendar.min.js"></script>

  <script>
    $(document).ready(function() {
      const month = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
        'November', 'December'
      ];

      $.ajax({
        type: 'GET',
        url: "/getAgenda",
        dataType: "json",
        success: function(data) {
          const calendarEvent = [];

          for (const d of data) {
            const tgl = new Date(d.waktu);
            const jam = tgl.getHours() + '.' + (tgl.getMinutes() < 10 ? '0' : '') + tgl.getMinutes() + ' WIB';
            const color = '#' + (Math.random() * 0xFFFFFF << 0).toString(16).padStart(6, '0');

            calendarEvent.push({
              id: d.random_id,
              name: d.name,
              date: month[tgl.getMonth()] + '/' + tgl.getDate() + '/' + tgl.getFullYear(),
              description: '(Waktu : ' + jam + ') ' + d.name,
              color: color
            })
          }

          $('#calendar').evoCalendar({
            calendarEvents: calendarEvent,
            todayHighlight: true,
            format: 'mm/dd/yyyy'
          })
        }
      });
    })
  </script>
</body>

</html>
