<?php
include "inc/meta.php";
$dairies = $dbfunc->getCourtDairy();
?>

<link rel="stylesheet" href="assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico" />
<link rel="icon" type="image/png" href="images/icons/xfavicon.png.pagespeed.ic.0zk7TR-Xxr.png" />
<link rel="stylesheet" href="assets/css/style.css" />
<link rel="stylesheet" href="assets/css/other.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-basic.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-glass.css" />

<style>
    .notedive {
        background: #f3f6f9;
        text-align: center;
        border: 0.5px solid rgb(95, 94, 94);
        padding-top: 30px;
        border-radius: 20px;
    }

    .title {
        background: #006eab;
        color: #f3f6f9;
        text-align: center;
        padding: 10px;
        font-size: 14px;
        line-height: 20px;
        margin-bottom: 20px;
    }

    @media(max-width:900px) {
        .caldive {
            margin: 20px;
        }

        .notedive {
            margin: 20px;
        }
    }
</style>
<?php include "inc/header.php"; ?>



<section class="whats-news-area pt-50 pb-20">
    <div class="container">
    </div>
</section>

<section class="bg0 p-t-70 p-b-55">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-80" style="display:flex">
                <div class="row">


                    <div class="col-lg-6 caldiv">
                        <div id="color-calendar"></div>
                    </div>

                    <div class="col-lg-6 notedive">
                        <div class="col-xl-12 demo">
                            <div class="white_card">
                                <div class="white_card_header">
                                    <div class="box_header m-0">
                                        <div class="main-title">
                                            <h3 class="m-0" style="text-align: center; color:#006eab;">Today In Court</h3>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="white_card_body events-display">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<br>














<?php include './inc/footer.php' ?>
<!-- <script src="./vendor/jquery/jquery-3.2.1.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/color-calendar/dist/bundle.min.js"></script>

<script>
    var allevents = [
        <?php
        for ($i = 0; $i < count($dairies); $i++) {
            $string = preg_replace('/\s+/', ' ', html_entity_decode($dairies[$i]['diary_note'], ENT_QUOTES));
        ?> {
                start: '<?php echo  date('Y/m/d', $dairies[$i]['diary_date']); ?>',
                end: '<?php echo  date('Y/m/d', $dairies[$i]['diary_date']); ?>',
                name: '<?php echo html_entity_decode($dairies[$i]['diary_title'], ENT_QUOTES) ?>',
                desc: '<?php echo $string ?>',
            },
        <?php
        }
        ?>
    ];
</script>
<script>
    let mycalender = new Calendar({
        id: '#color-calendar',
        calendarSize: 'large',
        theme: 'glass',
        primaryColor: '#fd7e14',
        calendarSize: 'large',
        headerBackgroundColor: '#006eab',
        dateChanged: (currentDate, events) => {
            const events_display = document.querySelector('.events-display');
            let events_html = '';
            events.forEach(event => {
                events_html += `

                            <p class="title">${event.name}</p>
                            <div class="Activity_timeline">
                                <ul>
                                    <li>
                                        <div class="activity_bell"></div>
                                        <div class="timeLine_inner d-flex align-items-center">
                                            <div class="activity_wrap">
                                                <p style="text-align: start;">${event.desc}</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                                 `
            });
            if (events_html) {
                events_display.innerHTML = events_html;
            } else {
                events_display.innerHTML = '<div class="no-events-text">No events on this day :(</div>';
            }
        }
    })
    mycalender.addEventsData(allevents);
</script>

<?php include './inc/footer-meta.php' ?>