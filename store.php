<?php include "inc/meta.php";?>
  <link rel="stylesheet"
    href="assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bticker-style.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-ico" />
    <link rel="stylesheet" href="assets/css/store.css"/>
    <link rel="stylesheet" href="assets/css/style.css" />
    

<?php  include "inc/header.php";?>

<section class="our-client section-padding best-selling">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-xl-5 col-lg-5 col-md-12">
              <div class="section-tittle mb-40">
                <h2>Latest Published items</h2>
              </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12">
              <div class="nav-button mb-40">
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a
                      class="nav-link active"
                      id="nav-one-tab"
                      data-bs-toggle="tab"
                      href="#nav-one"
                      role="tab"
                      aria-controls="nav-one"
                      aria-selected="true"
                      >All</a
                    >
                    <a
                      class="nav-link"
                      id="nav-two-tab"
                      data-bs-toggle="tab"
                      href="#nav-two"
                      role="tab"
                      aria-controls="nav-two"
                      aria-selected="false"
                      >Books</a
                    >
                    <a
                      class="nav-link"
                      id="nav-three-tab"
                      data-bs-toggle="tab"
                      href="#nav-three"
                      role="tab"
                      aria-controls="nav-three"
                      aria-selected="false"
                      >T-Shirts</a
                    >
                    <a
                      class="nav-link"
                      id="nav-four-tab"
                      data-bs-toggle="tab"
                      href="#nav-four"
                      role="tab"
                      aria-controls="nav-four"
                      aria-selected="false"
                      >Mugs</a
                    >
                    <a
                      class="nav-link"
                      id="nav-five-tab"
                      data-bs-toggle="tab"
                      href="#nav-five"
                      role="tab"
                      aria-controls="nav-five"
                      aria-selected="false"
                      >Wigs</a
                    >
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="tab-content" id="nav-tabContent">
            
           <div
              class="tab-pane fade show active"
              id="nav-one"
              role="tabpanel"
              aria-labelledby="nav-one-tab">

                <div class="row">
                    <?php
                        for ($i=0; $i < 10; $i++) { 
                            ?>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="properties pb-30">
                            <div class="properties-card">
                            <div class="properties-img">
                                <a href="book-details.html"
                                ><img
                                    src="assets/img/gallery/xbest_selling7.jpg.pagespeed.ic.I1tWDKCBJ-.jpg"
                                    alt=""
                                /></a>
                            </div>
                            <div class="properties-caption properties-caption2">
                                <h3><a href="book-details.html">Moon Dance</a></h3>
                                <p>J. R Rain</p>
                                <div
                                class="
                                    properties-footer
                                    d-flex
                                    justify-content-between
                                    align-items-center
                                "
                                >
                                <div class="review">
                                    <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <p>(<span>120</span> Review)</p>
                                </div>
                                <div class="price">
                                    <span>$50</span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                            <?php
                        }
                    ?>
                </div>
           </div>

            <div
              class="tab-pane fade"
              id="nav-two"
              role="tabpanel"
              aria-labelledby="nav-two-tab">

               <div class="row">
                <?php 
                    for ($i=0; $i < 10; $i++) { 
                        echo '
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.html"
                          ><img
                            src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.SS9XjNMbIy.jpg"
                            alt=""
                        /></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.html">Moon Dance</a></h3>
                        <p>J. R Rain</p>
                        <div
                          class="
                            properties-footer
                            d-flex
                            justify-content-between
                            align-items-center
                          "
                        >
                          <div class="review">
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                          </div>
                          <div class="price">
                            <span>$50</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                        
                        ';
                    }
                
                ?>

              </div>

            </div>

    
         <div
              class="tab-pane fade"
              id="nav-three"
              role="tabpanel"
              aria-labelledby="nav-three-tab">
            <div class="row">
               <?php 
                 for ($i=0; $i < 4; $i++) { 
                     echo '
                     <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                     <div class="properties pb-30">
                       <div class="properties-card">
                         <div class="properties-img">
                           <a href="book-details.html"
                             ><img
                               src="assets/img/gallery/xbest_selling9.jpg.pagespeed.ic.t9lNibrWVM.jpg"
                               alt=""
                           /></a>
                         </div>
                         <div class="properties-caption properties-caption2">
                           <h3><a href="book-details.html">Moon Dance</a></h3>
                           <p>J. R Rain</p>
                           <div
                             class="
                               properties-footer
                               d-flex
                               justify-content-between
                               align-items-center
                             "
                           >
                             <div class="review">
                               <div class="rating">
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star-half-alt"></i>
                               </div>
                               <p>(<span>120</span> Review)</p>
                             </div>
                             <div class="price">
                               <span>$50</span>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                     
                     ';
                  }
               
               ?>

              
                
            </div>


         </div>


        <div
            class="tab-pane fade"
            id="nav-four"
            role="tabpanel"
            aria-labelledby="nav-four-tab">

            <div class="row">
                <?php
                for ($i=0; $i < 6 ; $i++) { 
                    echo '
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="properties pb-30">
                        <div class="properties-card">
                        <div class="properties-img">
                            <a href="book-details.html"
                            ><img
                                src="assets/img/gallery/xbest_selling7.jpg.pagespeed.ic.I1tWDKCBJ-.jpg"
                                alt=""
                            /></a>
                        </div>
                        <div class="properties-caption properties-caption2">
                            <h3><a href="book-details.html">Moon Dance</a></h3>
                            <p>J. R Rain</p>
                            <div
                            class="
                                properties-footer
                                d-flex
                                justify-content-between
                                align-items-center
                            "
                            >
                            <div class="review">
                                <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                </div>
                                <p>(<span>120</span> Review)</p>
                            </div>
                            <div class="price">
                                <span>$50</span>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    ';
                }
                ?>

            </div>
        </div>

    
        <div
              class="tab-pane fade"
              id="nav-five"
              role="tabpanel"
              aria-labelledby="nav-five-tab">
              <div class="row">
                  <?php 
                    for ($i=0; $i < 10; $i++) { 
                        echo '
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="properties pb-30">
                          <div class="properties-card">
                            <div class="properties-img">
                              <a href="book-details.html"
                                ><img
                                  src="assets/img/gallery/xbest_selling5.jpg.pagespeed.ic.EAW_m0sR2a.jpg"
                                  alt=""
                              /></a>
                            </div>
                            <div class="properties-caption properties-caption2">
                              <h3><a href="book-details.html">Moon Dance</a></h3>
                              <p>J. R Rain</p>
                              <div
                                class="
                                  properties-footer
                                  d-flex
                                  justify-content-between
                                  align-items-center
                                "
                              >
                                <div class="review">
                                  <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                  </div>
                                  <p>(<span>120</span> Review)</p>
                                </div>
                                <div class="price">
                                  <span>$50</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>  
                        ';
                    }
                  ?>
              
              </div>
         </div>





          </div>
    
        </div>


    </section>



    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js%2bbootstrap.min.js.pagespeed.jc.RMqsw48A_a.js"></script>
    <script>
        eval(mod_pagespeed_usVz_HYIFh);
    </script>
    <script>
        eval(mod_pagespeed_64J4x1U9Lt);
    </script>

    <script src="assets/js/owl.carousel.min.js%2bslick.min.js.pagespeed.jc.8p3VYxlcxb.js"></script>
    <script>
        eval(mod_pagespeed_2b_kILWYuf);
    </script>
    <script>
        eval(mod_pagespeed_YcgqpOO3k2);
    </script>
    <script src="assets/js/jquery.slicknav.min.js%2bwow.min.js%2bjquery.magnific-popup.js%2bjquery.nice-select.min.js%2bjquery.counterup.min.js%2bwaypoints.min.js.pagespeed.jc.gxrxPo5MLt.24.delay"></script>
    <script>
        eval(mod_pagespeed_W070UA44Fy);
    </script>

    <script>
        eval(mod_pagespeed_HHFEHFyfva);
    </script>
    <script>
        eval(mod_pagespeed_He4JmNoJSL);
    </script>
    <script>
        eval(mod_pagespeed_Vq55GYBaD4);
    </script>
    <script>
        eval(mod_pagespeed_urzCQ$ljEK);
    </script>
    <script>
        eval(mod_pagespeed_yBL9chaY8Z);
    </script>
    <script src="assets/js/price_rangs.js%2bcontact.js.pagespeed.jc.JVG_0UpWoX.js"></script>
    <script>
        eval(mod_pagespeed_6gHvth7EP8);
    </script>

    <script>
        eval(mod_pagespeed_gVyWNPnP1a);
    </script>
    <script src="assets/js/jquery.form.js%2bjquery.validate.min.js%2bmail-script.js%2bjquery.ajaxchimp.min.js%2bplugins.js%2bmain.js.pagespeed.jc.FlL1_wvPXx.js"></script>
    <script>
        eval(mod_pagespeed_WxueWYkioV);
    </script>
    <script>
        eval(mod_pagespeed_JeTX5oy9W7);
    </script>
    <script>
        eval(mod_pagespeed_Dfx$DMKuSV);
    </script>
    <script>
        eval(mod_pagespeed_In2a_xtXil);
    </script>

    <script>
        eval(mod_pagespeed_ADDajFRwXo);
    </script>
    <script>
        eval(mod_pagespeed_R473QNJAOB);
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"66b09d963c8003ba","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.6.0","si":10}'></script>


    <?php include './inc/footer.php' ?>

    </body>
    </html>
    
