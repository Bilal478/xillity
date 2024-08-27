<? require("./global.php");

if (isset($_POST['create_package'])) {
    $timeAdded = time();
    $actionId = escape(($_POST['actionId']));
    $title = escape($_POST['title']);
    $category = escape($_POST['category']);
    $start_time = date("Y-m-d H:i:s", strtotime($_POST["start_time"]));
    $end_time = date("Y-m-d H:i:s", strtotime($_POST["end_time"]));
    if ($actionId == "") {
        $id = generateRandomString();
        $actionId = $id;
        $query = "insert into  " . $g_projectSlug . "_calendar_reminders set id='$id' , title='$title', apptTime='$start_time',endTime='$end_time', color='$category', timeAdded='$timeAdded', userId='$session_userId' ";
    } else {
        $query = "update  " . $g_projectSlug . "_calendar_reminders set id='$actionId' , title='$title', apptTime='$start_time',endTime='$end_time', color='$category' where id='$actionId'";
    }
    // echo $query;
    // exit;
    $stmt = $con->prepare($query);
    if (!$stmt) {
        echo "err: <code>$query</code>";
    }
    if (!$stmt->execute()) {
        echo "err: <code>$query</code>";
    }

    $rStr = "";
    if (isset($_GET['id'])) {
        $rStr .=  "&id=" . $_GET['id'];
    }
    header("Location: ?m=Data was saved successfully!" . $rStr);
}



if (isset($_GET['delete-record'])) {
    $id = mb_htmlentities($_GET['delete-record']);
    $stmt = $con->prepare("delete from " . $g_projectSlug . "_calendar_reminders where id=?");
    $stmt->bind_param("s", $id);
    if (!$stmt->execute()) {
        echo "err";
    }
}

?>

<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>
    <? include("./includes/views/head2.php"); ?>




    <link rel="stylesheet" href="assets/vendor/css/fullCalendar/main.min.css">

    <link rel="stylesheet" href="assets/vendor/css/fullCalendar/daygrid.min.css">

    <link rel="stylesheet" href="assets/vendor/css/fullCalendar/timegrid.min.css">
    <link rel="shortcut icon" href="favicon.png">

    <link rel="stylesheet" href="assets/vendor/css/all.min.css">

    <link rel="stylesheet" href="assets/vendor/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" id="primaryColor" href="assets/css/blue-color.css">

    <link rel="stylesheet" id="rtlStyle" href="#">



</head>

<body class="body-padding body-p-top">

    <!-- preloader start -->

    <div class="preloader d-none">

        <div class="loader">

            <span></span>

            <span></span>

            <span></span>

        </div>

    </div>
    <!-- preloader end -->

    <!-- header start -->
    <? include("./includes/views/navbar.php"); ?>
    <!-- header end -->


    <!-- profile right sidebar start -->

    <? include("./includes/views/rightsidebar.php"); ?>
    <!-- right sidebar end -->

    <!-- main sidebar start -->
    <? include("./includes/views/leftmenu2.php"); ?>
    <!-- main sidebar end -->

    <!-- main content start -->
    <div class="main-content">
        <a href="#" class="btn btn-primary btn-elevate btn-icon-sm" id="btn-new-event" data-toggle="modal" data-target="#create_record_modal">
            <i class="la la-plus"></i>
            New Record
        </a>
        <div class="row">
            <div class="col-xxl-9 col-lg-8">
                <div class="panel">
                    <div class="panel-body">
                        <div id="calendar1"></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 calendar-sidebar">
                <div class="panel mb-25 d-none">
                    <div class="panel-header">
                        <h5>Reserved Event</h5>
                    </div>
                    <div class="panel-body">
                        <div id="external-events" class="sidebar-event-list">
                            <div class="fc-event">My Event 1</div>
                            <div class="fc-event">My Event 1</div>
                            <div class="fc-event">My Event 1</div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="drop-remove">
                                <label for="drop-remove" class="form-check-label">Remove after drop</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-header">
                        <h5>Upcoming Events</h5>
                    </div>
                    <div class="panel-body">
                        <div class="upcoming-event-list sidebar-event-list"></div>
                    </div>
                </div>


                <div class="panel">
                    <div class="panel-header">
                        <h5>
                            <a class="btn btn-primary" data-toggle="modal" id="btn-new-event" data-target="#create_record_modal">New Record</a>


                        </h5>
                    </div>

                </div>


            </div>
        </div>
        <!-- footer start -->

        <? include("./includes/views/footer.php"); ?>

        <!-- footer end -->

    </div>
    <div class="modal fade" id="delete_record" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background:#fd2752">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                    <button type="button" class="btn btn-danger close-model" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-0">This action cannot be reversed.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-model" data-dismiss="modal">No</button>
                    <a href="#sd" id="delete-project">
                        <button type="button" class="btn btn-danger">Yes</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- main content end -->

    <div class="modal fade" id="create_record_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe1l">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Add Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form class="kt-form" action="" method="Post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div>
                                        <label class="control-label form-label">Event Name</label>
                                        <input class="form-control" placeholder="Insert Event Name" type="text" name="title" id="event-title" required>
                                        <div class="invalid-feedback">Please provide a valid event name</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div>
                                        <label class="control-label form-label">Start Time</label>
                                        <input class="form-control" type="datetime-local" name="start_time" id="start_event" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div>
                                        <label class="control-label form-label">End Time</label>
                                        <input class="form-control" type="datetime-local" name="end_time" id="end_event" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="control-label form-label">Category</label>
                                        <select class="form-control" name="category" id="event-category" required>
                                            <option value="">Select a category</option>
                                            <option value="bg-primary">Primary</option>
                                            <option value="bg-danger">Danger</option>
                                            <option value="bg-success">Success</option>
                                            <option value="bg-info">Info</option>
                                            <option value="bg-dark">Dark</option>
                                            <option value="bg-warning">Warning</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid event category</div>
                                    </div>
                                </div>
                                <input type="text" name="actionId" id="action_id" hidden>
                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div>
                                        <input type="submit" name="create_package" value="Submit" class="btn btn-primary" id="submitBtn">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancel_btn">Cancel</button>
                                        <!-- <button  class="btn btn-danger" id="delate_btn" style="display: none;"> Delete</button> -->
                                        <input type="submit" name="delete_package" value="Delete" id="btn-delete-event" class="btn btn-danger">
                                        <input type="submit" name="create_package" value="Update" class="btn btn-success" id="updateBtn" style="display: none;">
                                    </div>



                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- event modal start -->
    <div class="modal fade" id="event-modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <form method="post" id="form-event">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">Event</h5>
                        <button type="button" class="btn btn-sm btn-icon btn-outline-primary" data-dismiss="modal" aria-label="Close"><i class="fa-light fa-xmark"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <div>
                                    <label class="control-label form-label">Event Name</label>
                                    <input class="form-control" placeholder="Insert Event Name" type="text" name="title" id="event-title" required>
                                    <div class="invalid-feedback">Please provide a valid event name</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div>
                                    <label class="control-label form-label">Start Time</label>
                                    <input class="form-control" type="datetime-local" name="start_time" id="start_event" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div>
                                    <label class="control-label form-label">End Time</label>
                                    <input class="form-control" type="datetime-local" name="end_time" id="end_event" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="control-label form-label">Category</label>
                                    <select class="form-control" name="category" id="event-category" required>
                                        <option value="">Select a category</option>
                                        <option value="bg-primary">Primary</option>
                                        <option value="bg-danger">Danger</option>
                                        <option value="bg-success">Success</option>
                                        <option value="bg-info">Info</option>
                                        <option value="bg-dark">Dark</option>
                                        <option value="bg-warning">Warning</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a valid event category</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <button type="button" name="delete_record" class="btn btn-sm btn-danger">Delete</button>
                            </div>
                            <div class="col-6 text-end">
                                <button type="button" class="btn btn-sm btn-light me-1" data-dismiss="modal">Close</button>
                                <input type="submit" name="create_package" class="btn btn-sm btn-success" value="Save">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <? include("./includes/views/footerjs.php"); ?>
    <!-- event modal end -->

    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>

    <script src="assets/vendor/js/jquery-ui.min.js"></script>

    <script src="assets/vendor/js/jquery.overlayScrollbars.min.js"></script>

    <script src="assets/vendor/js/fullCalendar/main.min.js"></script>

    <script src="assets/vendor/js/fullCalendar/interaction.min.js"></script>

    <script src="assets/vendor/js/fullCalendar/daygrid.min.js"></script>

    <script src="assets/vendor/js/fullCalendar/timegrid.min.js"></script>


    <!-- <script src="assets/vendor/js/bootstrap.bundle.min.js"></script> -->

    <!-- <script src="assets/js/main.js"></script> -->


    <script src="assets/js/calendar-init1.js"></script>


    <?php

    $sql = "select * from " . $g_projectSlug . "_calendar_reminders";
    $result = $con->query($sql);


    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $events[] = [
                'id' => $row['id'],
                'title' => $row['title'],
                'start' => $row['apptTime'],
                'end' => $row['endTime'],
                'className' => $row['color'], // You can customize this as needed
            ];
        }
    } else {
        echo "No events found in the database.";
    }

    ?>




    <script>
        (function(l) {

            "use strict";



            var Calendar = FullCalendar.Calendar;

            var Draggable = FullCalendarInteraction.Draggable;



            var containerEl = document.getElementById('external-events');

            var calendarEl = document.getElementById('calendar1');

            var checkbox = document.getElementById('drop-remove');



            // initialize the external events

            // -----------------------------------------------------------------



            new Draggable(containerEl, {

                itemSelector: '.fc-event',

                eventData: function(eventEl) {

                    return {

                        title: eventEl.innerText

                    };

                }

            });







            function e() {

                (this.$body = l("body")),

                (this.$modal = new bootstrap.Modal(document.getElementById("create_record_modal"), {
                    backdrop: "static"
                })),

                (this.$calendar = l("#calendar1")),

                (this.$formEvent = l("#form-event")),

                (this.$btnNewEvent = l("#btn-new-event")),

                (this.$btnDeleteEvent = l("#btn-delete-event")),
                (this.$btnCancelEvent = l("#cancel_btn")),

                (this.$btnSaveEvent = l("#btn-save-event")),

                (this.$modalTitle = l("#modal-title")),
                (this.$updateBtn = l("#updateBtn")),
                (this.$submitBtn = l("#submitBtn")),

                (this.$calendarObj = null),

                (this.$selectedEvent = null),

                (this.$newEventData = null);

            }

            e.prototype.onEventClick = function(e) {
                this.$formEvent[0].reset();
                this.$formEvent.removeClass("was-validated");
                this.$newEventData = null;
                this.$btnDeleteEvent.show();
                this.$modalTitle.text("Edit Event");

                this.$updateBtn.show();
                this.$submitBtn.hide(); // Hide the Submit button
                this.$modal.show();
                this.$selectedEvent = e.event;
                $("#event-title").val(this.$selectedEvent.title);
                $("#event-category").val(this.$selectedEvent.classNames[0]);

                // Format start and end times for input[type="datetime-local"]
                function formatDateForInput(date) {
                    const year = date.getFullYear();
                    const month = String(date.getMonth() + 1).padStart(2, '0');
                    const day = String(date.getDate()).padStart(2, '0');
                    const hours = String(date.getHours()).padStart(2, '0');
                    const minutes = String(date.getMinutes()).padStart(2, '0');
                    return `${year}-${month}-${day}T${hours}:${minutes}`;
                }

                $("#start_event").val(formatDateForInput(new Date(this.$selectedEvent.start)));
                $("#end_event").val(formatDateForInput(new Date(this.$selectedEvent.end)));

                // Uncomment the following line if you need to set action_id
                $("#action_id").val(this.$selectedEvent.id);

                console.log('Check calendar database date and time with other field');
                console.table(e);
            };



            (e.prototype.onSelect = function(e) {

                this.$formEvent[0].reset(),

                    this.$formEvent.removeClass("was-validated"),

                    (this.$selectedEvent = null),

                    (this.$newEventData = e),

                    this.$btnDeleteEvent.hide(),
                    this.$updateBtn.hide(),
                    this.$submitBtn.show(),
                    this.$modalTitle.text("Add New Event"),

                    this.$modal.show(),

                    this.$calendarObj.unselect();

            }),

            (e.prototype.init = function() {

                var e = new Date(l.now());

                var t = <?php echo json_encode($events); ?>,

                    a = this;

                (a.$calendarObj = new FullCalendar.Calendar(a.$calendar[0], {

                    plugins: ['interaction', 'dayGrid', 'timeGrid'],

                    slotDuration: "00:15:00",

                    slotMinTime: "08:00:00",

                    slotMaxTime: "19:00:00",

                    themeSystem: "bootstrap",

                    bootstrapFontAwesome: !1,

                    buttonText: {
                        today: "Today",
                        month: "Month",
                        week: "Week",
                        day: "Day",
                        prev: "Prev",
                        next: "Next"
                    }, //list: "List"//

                    initialView: "dayGridMonth",

                    handleWindowResize: !0,

                    height: l(window).height() - 200,

                    header: {
                        left: "prev,next today",
                        center: "title",
                        right: "dayGridMonth,timeGridWeek,timeGridDay"
                    }, //,listMonth

                    events: t,

                    editable: true,

                    droppable: true,

                    selectable: !0,

                    dateClick: function(e) {
                        var startDate = new Date(e.date.getTime() + (24 * 60 * 60 * 1000));
                        a.onSelect({
                            date: startDate,
                            allDay: !0
                        });

                        var currentTime = new Date();
                        currentTime.setHours(currentTime.getHours() + 5);

                        var formattedCurrentTime = currentTime.toISOString().slice(11, 16);

                        var startTimeValue = startDate.toISOString().slice(0, 11) + formattedCurrentTime;

                        // Set the start time input value with the combined date and time
                        l("#start_event").val(startTimeValue);
                        l("#end_event").val('');
                        l("#event-title").val('');
                        l("#event-category").val('');
                        console.log('check calendar current date and time');
                        // $('#create_record_modal').modal('show');

                    },

                    eventClick: function(e) {

                        a.onEventClick(e);

                    },

                    drop: function(info) {

                        $('.upcoming-event-list').empty();

                        setTimeout(function() {

                            console.log(document.querySelectorAll('.fc-widget-content .fc-day-grid-event').length);

                            $('.fc-widget-content .fc-day-grid-event').clone().appendTo('.upcoming-event-list');

                            if (checkbox.checked) {

                                info.draggedEl.parentNode.removeChild(info.draggedEl);

                            }

                        }, 100);

                    }

                })),

                a.$calendarObj.render(),

                    a.$btnNewEvent.on("click", function(e) {

                        a.onSelect({
                            date: new Date(),
                            allDay: !0
                        });

                    }),

                    $("#btn-new-event").on("click", function(e) {
                        $("#event-title").val('');
                        $("#start_event").val('');
                        $("#end_event").val('');
                        $("#event-category").val('');
                        // $("#create_record_modal").modal("show");
                        this.$updateBtn.hide();
                        this.$submitBtn.show();
                    });

                a.$formEvent.on("submit", function(e) {

                        e.preventDefault();

                        var t,

                            n = a.$formEvent[0];

                        n.checkValidity()

                            ?
                            (a.$selectedEvent

                                ?
                                (a.$selectedEvent.setProp("title", l("#event-title").val()), a.$selectedEvent.setProp("classNames", [l("#event-category").val()]))

                                :
                                ((t = {
                                    title: l("#event-title").val(),
                                    start: a.$newEventData.date,
                                    allDay: a.$newEventData.allDay,
                                    end: a.$newEventData.date,
                                    allDay: a.$newEventData.allDay,
                                    className: l("#event-category").val()
                                }), a.$calendarObj.addEvent(t)),

                                a.$modal.hide())

                            :
                            (e.stopPropagation(), n.classList.add("was-validated"));

                        $('.upcoming-event-list').empty();

                        $('.fc-widget-content .fc-day-grid-event').clone().appendTo('.upcoming-event-list');

                    }),

                    l(

                        // a.$btnDeleteEvent.on("click", function(e) {
                        $('#delete-project').on("click", function(e) {
                            e.preventDefault();

                            if (a.$selectedEvent) {

                                a.$selectedEvent.remove();

                                $.ajax({
                                    url: 'delete_event.php',
                                    type: 'POST',
                                    data: {
                                        event_id: a.$selectedEvent.id
                                    },
                                    success: function(response) {
                                        $('#delete_record').modal('hide');
                                        console.log(response);
                                    },
                                    error: function(xhr, status, error) {

                                        console.error(xhr, status, error);
                                    }
                                });

                                a.$modal.hide();

                                a.$selectedEvent = null;

                                $('.upcoming-event-list').empty();
                                $('.fc-widget-content .fc-day-grid-event').clone().appendTo('.upcoming-event-list');
                            }

                        })

                    );

                l(

                    a.$btnCancelEvent.on("click", function(e) {
                        e.preventDefault();

                        if (a.$selectedEvent) {





                            a.$modal.hide();


                        }

                    })

                );

            }),

            (l.CalendarApp = new e()),

            (l.CalendarApp.Constructor = e);

        })(jQuery),

        (function() {

            "use strict";

            $(document).ready(function() {
                var calendarApp = new CalendarApp();
                calendarApp.init();
                $('.fc-view-harness').find('table').addClass('table mb-0 table-bordered');
                $('.fc-toolbar-chunk .btn').addClass('btn-sm');
                $('.fc-button-group').addClass('btn-group').find('button').addClass('btn btn-sm btn-primary').removeClass('fc-button fc-button-primary');
                $('.fc-today-button').addClass('btn btn-sm btn-primary').removeClass('fc-button fc-button-primary');
                $('.fc-day-grid-event').clone().appendTo('.upcoming-event-list');
            });

        })();
    </script>

    <script>
        $(document).ready(function() {
            $('.close-model').on('click', function() {
                
                $('#delete_record').modal('hide');
                location.reload(); // Refresh the page
            });

            $("#delete_record").on('click', function(e) {
                $('#create_record_modal').modal('hide');
            });
            // Handle delete button click
            $('.btn-danger').on('click', function(event) {
                event.preventDefault();
                $('#create_record_modal').modal('hide').removeClass('show').css('display', 'none');

                $('#delete_record').modal("show"); // Show the warning modal
            });


        });
    </script>

</body>

</html>