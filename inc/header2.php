

</head>
<body class="animsition">
  <header>
    <div class="header-area">
      <div class="main-header">
        <div class="header-top black-bg d-none d-md-block">
          <div class="container">
            <div class="col-xl-12">
              <div class="row d-flex justify-content-between align-items-center">
                <div class="header-info-left">
                  <ul> 
                    <li>
                         <?php
                        $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?q=Accra,ghana&&Appid=9fcd327828f76eb1832f6eb4e61538e1";

                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_HEADER, 0);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
                        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                        curl_setopt($ch, CURLOPT_VERBOSE, 0);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                        $response = curl_exec($ch);

                        curl_close($ch);
                        $data = json_decode($response);
                        $currentTime = time();
                      ?>

                      <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" alt="" />
                      <?php echo $data->main->temp; ?>ºc, <?php echo $data->weather[0]->description; ?>
                    </li>
                    <li>
                       <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" alt="" />
                      <?php echo date("H:m a l jS F, Y") ?>
                    </li>
                  </ul>
                </div>
                <div class="header-info-right">
                  <ul class="header-social">
                   <?php 
                      for ($i=0; $i < count($accounts); $i++) { 
                        switch ($accounts[$i]["plattform"]) {
                          case 'Facebook':
                            ?>
                              <li>
                                <a href="https://facebook.com/<?php echo $accounts[$i]['account_name'] ?>/" target="_blank">
                                  <i class="fab fa-facebook-f"></i>
                                </a>
                              </li>
                           <?php
                            break;
                         case 'Instagram':
                            ?>
                              <li>
                                <a href="https://instagram.com/<?php echo $accounts[$i]['account_name'] ?>/" target="_blank">
                                  <i class="fab fa-instagram"></i>
                                </a>
                              </li>
                           <?php
                            break;
                          case 'Twitter':
                            ?>
                              <li>
                                <a href="https://twitter.com/<?php echo $accounts[$i]['account_name'] ?>/" target="_blank">
                                  <i class="fab fa-twitter"></i>
                                </a>
                              </li>
                           <?php
                            break;
                          case 'Youtube':
                            ?>
                              <li>
                                <a href="https://www.youtube.com/channel/<?php echo $accounts[$i]['account_name'] ?>/" target="_blank">
                                  <i class="fab fa-youtube"></i>
                                </a>
                              </li>
                           <?php
                            break;
                          default:
                            break;
                        }

                      }
                     ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-mid d-none d-md-block">
          <div class="container">
            <div class="row d-flex align-items-center">
              <div class="col-xl-3 col-lg-3 col-md-3">
                <div class="logo">
                  <a href="../javascript:void(0)"><img src="../assets/img/logo/logo.jpg" alt="" height="62px"
                      style="height: 62px !important" /></a>
                </div>
              </div>
              <div class="col-xl-9 col-lg-9 col-md-9">
                <div class="header-banner f-right">
                  <!-- <img src="../assets/img/hero/header_card.jpg" alt="" /> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-bottom header-sticky">
          <div class="container">
            <div class="row align-items-center">
              <div class=" nav-categories col-md-12 header-flex">
                <div class="sticky-logo">
                  <a href="../javascript:void(0)"><img src="../assets/img/logo/logo.jpg" alt="" height="62px"
                      style="height: 62px !important" /></a>
                </div>
                <div class="main-menu d-none d-md-block">
                  <nav>
                    <ul id="navigation" style="background-color: white">
                      <li><a href="../">Home</a></li>
                      <li><a href="javascript:void(0)">General News</a>
                        <ul class="submenu">
                          <li><a href="../">Latest News</a></li> 
                          <li><a href="../general/Business">Business</a></li>
                          <li><a href="../general/Courts">Courts</a></li>
                          <li><a href="../general/Crime">Crime</a></li>
                          <li><a href="../general/Election+Petition">Election Petition</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Supreme Court</a>
                        <ul class="submenu">
                          <li><a href="../courtnews">News</a></li>
                          <li><a href="../courtdiary">Court Diary</a></li>
                          <li><a href="../justices">Justices</a></li>
                          <li><a href="../history">History</a></li>
                          <li><a href="../resource">Resources</a></li>
                        </ul>
                      </li>
                      <li><a href="../international">International</a>
                        <ul class="submenu">
                          <li><a href="../interviewall/Africa">Africa</a></li>
                          <li><a href="../interviewall/Europe">Europe</a></li>
                          <li><a href="../interviewall/Us">US</a></li>
                          <li><a href="../interviewall/Uk">UK</a></li>
                          <li><a href="../interviewall/Middle+East">Middle East</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Chambers</a>
                        <ul class="submenu">
                          <li><a href="../legalwork.php">Legal Work</a></li>
                          <li><a href="../legalfirms.php">Law Firms</a></li>
                        </ul>
                      </li>
                      <li><a href="../opinions-features">Opinions/Features</a></li>
                      <li><a href="../tech">Tech</a></li>
                      <!-- <li><a href="#">Opinion/Features</a> </li> -->
                      <li><a href="../happilex">Happilex</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <!-- <div class="col-xl-2 col-lg-2 col-md-4">
                <div class="header-right-btn f-right d-none d-lg-block">
                  <i class="fas fa-search special-tag"></i>
                  <div class="search-box">
                    <form action="#">
                      <input type="text" placeholder="Search" />
                    </form>
                  </div>
                </div>
              </div> -->

              <div class="col-12">
                <div class="mobile_menu d-block d-md-none"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>