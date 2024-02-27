import { Calendar } from '@fullcalendar/core'
import interactionPlugin from '@fullcalendar/interaction'
import dayGridPlugin from '@fullcalendar/daygrid'
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        // Configuration options...
        // Set up your calendar's options here
        // For example, specify the initial view, header, etc.
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: '/events', // URL to fetch events from the backend
        eventColor: 'red', // Default color for events

        eventContent: function(arg) {
            // Customize the content of each event
            return {
                html: '<b>' + arg.timeText + '</b>'
            };
        },

        eventDidMount: function(arg) {
            // Customize individual event appearance
            if (arg.event.extendedProps.unavailable) {
                arg.el.style.backgroundColor = 'red'; // Set background color to red for unavailable events
            }
        }
    });

    calendar.render();
});