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
        sidebarDisplayDefault: false
      })
    }
  });
})