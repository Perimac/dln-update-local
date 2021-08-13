
<?php include './inc/meta.php' ?>
  <link rel="stylesheet"
    href="assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-icons.css%2bflaticon.css%2bslick.css%2b" />
  <link rel="stylesheet" href="assets/css/contact.css" />

<?php include './inc/header.php' ?>

  <section class="contact-section">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">

      </div>
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="javascript:void()"
            method="post" id="contactForm" novalidate>
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                    placeholder=" Enter Message"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" />
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email address'" placeholder="Email" />
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject" />
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" onclick="sendContact()" class="button button-contactForm boxed-btn">
                Send
              </button>
            </div>
          </form>
        </div>

        <script type="text/javascript">
            function sendContact() {
              var message = $("#message").val();
              var name = $("#name").val();
              var email = $("#email").val();
              var subject = $("#subject").val();

              if (message == "") return alert("Please enter contact message.");
              if (name == "") return alert("Please enter contact name.");
              if (email == "") return alert("Please enter contact email.");
              if (subject == "") return alert("Please enter contact subject.");
            }
        </script>
        
        <div class="col-lg-3 offset-lg-1">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Achimota, Accra.</h3>
              <p>26 Mile 7, GE-362-2887</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>+233 030 291 4988</h3>
              <p>Mon to Fri 8am to 5pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>
                <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__"
                  data-cfemail="c1b2b4b1b1aeb3b581a2aeadaeb3ada8a3efa2aeac">info@dennislawgh.com</a>
              </h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include './inc/footer.php' ?>

  <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>

  <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="assets/js/popper.min.js%2bbootstrap.min.js%2bjquery.slicknav.min.js.pagespeed.jc.epBjwZ89Tg.js"></script>
  <script>
    eval(mod_pagespeed_4nGgYbBuKl);
  </script>
  <script>
    eval(mod_pagespeed_MYwjFiBhoh);
  </script>

  <script>
    eval(mod_pagespeed_8dMeJ$fKf0);
  </script>

  <script src="assets/js/owl.carousel.min.js%2bslick.min.js.pagespeed.jc.C9lwCMouga.js"></script>
  <script>
    eval(mod_pagespeed_kysOFmBYz0);
  </script>
  <script>
    eval(mod_pagespeed_WVz9W0_PJE);
  </script>

  <script
    src="assets/js/wow.min.js%2banimated.headline.js%2bjquery.scrollUp.min.js%2bjquery.nice-select.min.js%2bjquery.sticky.js%2bjquery.magnific-popup.js%2bcontact.js.pagespeed.jc.arB9Iq"></script>
  <script>
    eval(mod_pagespeed_XSuyaatwCS);
  </script>
  <script>
    eval(mod_pagespeed_Nax9iaH80E);
  </script>

  <script>
    eval(mod_pagespeed_I8FZK1Iy_n);
  </script>
  <script>
    eval(mod_pagespeed_$aJx4wnzwS);
  </script>
  <script>
    eval(mod_pagespeed_gAQaQdO285);
  </script>
  <script>
    eval(mod_pagespeed_DpT5oROG0V);
  </script>

  <script>
    eval(mod_pagespeed_wg1t4mIVJJ);
  </script>
  <script
    src="assets/js/jquery.form.js%2bjquery.validate.min.js%2bmail-script.js%2bjquery.ajaxchimp.min.js%2bplugins.js%2bmain.js.pagespeed.jc.YiS43bJnCg.js"></script>
  <script>
    eval(mod_pagespeed_f5Aq3z2Ny$);
  </script>
  <script>
    eval(mod_pagespeed_4WKIvRsmuU);
  </script>
  <script>
    eval(mod_pagespeed_1DarRkbL2Z);
  </script>
  <script>
    eval(mod_pagespeed_ii9L4qqqqd);
  </script>

  <script>
    eval(mod_pagespeed_pZZk9$_GbN);
  </script>
  <script>
    eval(mod_pagespeed_EZFCf6D9t2);
  </script>

<?php include './inc/footer-meta.php' ?>