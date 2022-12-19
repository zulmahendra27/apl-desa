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
      // let calendarEvent;
      const calendarEvent = [];
      const month = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
        'November', 'December'
      ];
      const dataAgenda = document.getElementById('dataAgenda');
      const demo = document.getElementById("demo");
      // const text = document.getElementById("dataAgenda").innerText;
      // const dateFormatter = new Intl.DateTimeFormat('id', {
      //   day: 'numeric',
      //   month: 'long',
      //   year: "numeric"
      // });

      async function foo() {
        let obj;

        const res = await fetch('/getAgenda');

        obj = await res.json();

        return obj;
      }

      foo();

      // let testData;

      // fetch('/getAgenda')
      //   .then((response) => response.json())
      //   .then((data) => testData = data);

      // let tgl;

      // console.log(text);

      $.ajax({
        type: 'GET',
        url: "/getAgenda",
        dataType: "json",
        success: function(data) {
          // calendarEvent.push(data);
          // console.log(data);

          // for (let i = 0; i < data.length; i++) {
          //   const element = data[i];

          //   testData.push(element);
          // }

          // for (const d of data) {
          //   const tgl = new Date(d.waktu);
          //   tgl.toLocaleString('en-US', {
          //     timeZone: 'Asia/Jakarta'
          //   })

          //   // console.log(tgl);

          //   const id = d.random_id;
          //   const name = d.name;
          //   const date = month[tgl.getMonth()] + '/' + tgl.getDate() + '/' + tgl.getFullYear();
          //   const type = 'event';

          //   const apa = {
          //     "id": id,
          //     "name": name,
          //     "date": date,
          //     "type": type
          //   };

          //   // console.log(apa);

          //   calendarEvent.push(apa);
          // }

          // testData = data.map(e => ({
          //   id: e.random_id
          // }));

          // testData = data.map(e => (
          //   tgl = new Date(e.waktu);

          //   {
          //     id: e.random_id,
          //     name: e.name,
          //     date: tgl.getFullYear(),
          //     type: 'event'
          //   }));
          // // calendarEvent = testData;
          // // dataAgenda.innerHTML = dataEvent;
          // console.log(calendarEvent);
        }
      });

      calendarEvents = [{
          id: 'bHay68s', // Event's ID (required)
          name: "New Year", // Event name (required)
          date: "December/24/2022", // Event date (required)
          type: "event", // Event type (required)
          // everyYear: true // Same event every year (optional)
        },
        {
          id: 'jdkja',
          name: "Vacation Leave",
          badge: "02/13 - 02/15", // Event badge (optional)
          date: ["February/13/2020", "February/15/2020"], // Date range
          description: "Vacation leave for 3 days.", // Event description (optional)
          type: "event",
          color: "#63d867" // Event custom color (optional)
        }
      ];

      // for (const e of calendarEvents) {
      //   calendarEvent.push({
      //     id: e.id,
      //     name: e.name,
      //     date: e.date,
      //     type: 'event'
      //   });
      // }

      calendarEvent = foo();

      // dataAgenda.innerText = testData.toString();
      // demo.innerText = JSON.stringify(calendarEvent);

      // console.log(calendarEvent);
      // console.log(calendarEvents);
      // console.log(testData);
      // console.log(foo());

      $('#calendar').evoCalendar({
        calendarEvents: calendarEvent
      })
    })
  </script>
</body>

</html>
