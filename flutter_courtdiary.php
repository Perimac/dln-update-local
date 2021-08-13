<?php
include "inc/meta.php";
$dairies = $dbfunc->getCourtDairy();
print_r($dairies);
echo date("m/d/Y", $dairies[0]["diary_date"]);
?>
<link rel="stylesheet" href="assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico" />

<link rel="icon" type="image/png" href="images/icons/xfavicon.png.pagespeed.ic.0zk7TR-Xxr.png" />
<link rel="stylesheet" type="text/css" href="mytech.css" />

<!-- Add the evo-calendar.css for styling -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/css/evo-calendar.min.css" />
<link rel="stylesheet" href="assets/css/style.css" />
<style type="text/css">
    .calendar-sidebar {
        background-color: #006eab;
        color: #fff;
        -webkit-box-shadow: 5px 0 18px -3px #006eab;
        box-shadow: 5px 0 18px -3px #006eab;
    }

    .calendar-sidebar>span#sidebarToggler {
        background-color: #006eab;
        -webkit-box-shadow: 5px 0 18px -3px #006eab;
        box-shadow: 5px 0 18px -3px #006eab;
    }

    #eventListToggler {
        background-color: #006eab;
        -webkit-box-shadow: 5px 0 18px -3px #006eab;
        box-shadow: 5px 0 18px -3px #006eab;
    }

    .calendar-sidebar>.month-list>.calendar-months>li.active-month {
        background-color: #105F8D;
    }

    .event-list>.event-empty {
        padding: 15px 10px;
        background-color: rgba(135, 115, 193, .15);
        border: 1px solid #006eab;
    }

    .event-list>.event-empty>p {
        margin: 0;
        color: #006eab;
    }

    th[colspan="7"] {
        color: #006eab;
    }

    tr.calendar-body .calendar-day .day.calendar-today:hover {
        background-color: #105F8D;
    }

    tr.calendar-body .calendar-day .day.calendar-today {
        background-color: #006eab;
    }

    p {
        color: #ffffff;
    }

    .calendar-sidebar>.calendar-year {
        background-color: #006eab;
    }

    .calendar-sidebar>.month-list {
        background-color: #006eab;
    }
</style>


<div class="container">
    <div id="calendar" style="margin-top: 30px; margin-bottom:30px;"></div>
</div>


<!-- Add jQuery library (required) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

<!-- Add the evo-calendar.js for.. obviously, functionality! -->
<script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/js/evo-calendar.min.js"></script>

<script>
    $('#calendar').evoCalendar({
        theme: 'Orange Coral',
        eventListToggler: true,
        eventDisplayDefault: true,
        sidebarToggler: true,
        sidebarDisplayDefault: true,
        todayHighlight: true,
        language: "en",
        firstDayOfWeek: 1,
        eventHeaderFormat: 'MM d, yyyy',
        titleFormat: 'MM yyyy',
        format: 'mm/dd/yyyy',
        calendarEvents: [

            <?php

            for ($i = 0; $i < count($dairies); $i++) {
            ?> {
                    id: 'bHay68s', // Event's ID (required)
                    name: '<?php echo $dairies[$i]["diary_title"] ?>', // Event name (required)
                    date: '<?php echo date("m/d/Y", $dairies[$i]["diary_date"]); ?>', // Date range
                    description: "<?php echo html_entity_decode($dairies[$i]["diary_note"]) ?>", // Date range
                    type: "event",
                    color: "#006eab" // Same event every year (optional)
                },
            <?php
            }
            ?>


        ]
    })
</script>

<?php include './inc/footer-meta.php' ?>