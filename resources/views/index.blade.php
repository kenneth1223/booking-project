<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('header')
    <style>
        .custom-column {
            width: 10rem;
            /* Set width to 5 units */
            height: 18rem;
            /* Set height to 10 units */
            background-color: lightblue;
            /* Optional: Add background color for visibility */
        }

        .rounded-custom {
            border-radius: 15px;
        }
    </style>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js'></script>
</head>

<body>
    <!-- 
    <div class="container-fluid vh-100 bg-success py-3 px-4">
        <h3 class="py-3">hello world</h3>
        <button>CLikc</button>
        <div class="row">
            <div class="container-fluid bg-danger h-75 mt-1 rounded p-5">
                <h1>Explore the world</h1>
                <div class="row">
                    <div class="col-md-3 rounded-custom">
                        <img src="https://via.placeholder.com/400" class="img-fluid rounded-custom" alt="Sample Image">
                    </div>


                    <div class="col">
                        <div class="custom-column rounded-custom">
                            <img src="https://via.placeholder.com/400" class="img-fluid rounded-custom" alt="Sample Image">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid vh-100 bg-fdanger py-5 px-3">
        <div class="container-fluid bg-danger h-100 rounded p-5">
            <h1>Explore the world</h1>

        </div>
    </div> -->

    <div id="calendar-container"></div>
    <form action="" method="post">
        <input type="text" placeholder="name">
    </form>
    <!-- Input field for selected date -->
    <input type="text" id="selected-date" placeholder="Selected Date" readonly>

    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     var calendarEl = document.getElementById('calendar-container');
        //     var selectedDateInput = document.getElementById('selected-date');
        //     var calendar = new FullCalendar.Calendar(calendarEl, {
        //         // Calendar configuration options
        //         // Customize as needed
        //         initialView: 'dayGridMonth',
        //         selectable: true, // Enable date selection
        //         select: function(info) {
        //             // When a date is selected
        //             var selectedDate = info.startStr; // Get the selected date as a string
        //             selectedDateInput.value = selectedDate; // Set the input field value to the selected date
        //         },
        //         events: [
        //             // Event data
        //             // Add your event data here
        //         ]
        //     });

        //     calendar.render();
        // });
    </script>
</body>

</html>