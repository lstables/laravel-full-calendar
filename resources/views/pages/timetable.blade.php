<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='fullcalendar.css' rel='stylesheet' />
<link href='fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='moment.min.js'></script>
<script src='jquery.min.js'></script>
<script src='fullcalendar.js'></script>
<script src='gcal.js'></script>
<script>

    $(document).ready(function() {

        $('#calendar').fullCalendar({

                aspectRatio: 1.6,
                columnFormat: 'ddd D',
                header: {
                    left: 'month,agendaWeek,agendaDay',
                    center: 'title',
                    right: 'prev,today,next'
                },
                dayClick: function(date, jsEvent, view) {
                    // alert('Clicked on: ' + date.format());
                    // alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
                    // alert('Current view: ' + view.name);
                    // change the day's background color just for fun
                    // $(this).css('background-color', 'red');
                },
                scrollTime: '07:00:00',
                defaultView: 'agendaWeek',
                editable: false,
                eventLimit: true, // allow "more" link when too many events
                firstDay: 1,



            timeFormat: 'H:mm',
            titleFormat: 'ddd D MMM YYYY',

            // THIS KEY WON'T WORK IN PRODUCTION!!!
            // To make your own Google API key, follow the directions here:
            // http://fullcalendar.io/docs/google_calendar/
            googleCalendarApiKey: 'AIzaSyBlve07-4seiNChlbqZAMCq4LIz3CL5VOY',
            // 'AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE',

            // US Holidays
            events: 'getwhiteboard.com_k3v3gtt5t8bfd7t76bbuvajujk@group.calendar.google.com',

            eventClick: function(event) {
                // opens events in a popup window
                window.open(event.url, 'gcalevent', 'width=700,height=600');
                return false;
            },

            loading: function(bool) {
                $('#loading').toggle(bool);
            }

        });

    });

</script>
<style>

    body {
        margin: 40px 10px;
        padding: 0;
        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
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
