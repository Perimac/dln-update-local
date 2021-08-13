<footer>
    <div class="footer-area footer-padding fix">
      <div class="container">
        <div class="row d-flex justify-content-between">
          <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
            <div class="single-footer-caption">
              <div class="single-footer-caption">
                <div class="footer-logo">
                  <a href="./"><img src="../assets/img/logo/logo2_footer.png" alt=""
                  style="width: 300px;"/></a>
                </div>
                <div class="footer-tittle">
                  <div class="footer-pera">
                    <p>
                      We are the leading source of breaking legal news in
                      Ghana. We provide updated, reliable, and concise daily
                      legal news, court updates, legal articles, and weekly
                      newsletters. Browse through our website for the latest
                      legal stories in business, technology, election petition
                      coverage, and crime. If it is about the law, we report
                      it with accuracy.
                    </p>
                  </div>
                </div>
                <div class="footer-social">
                 
                  <?php 
                      for ($i=0; $i < count($accounts); $i++) { 
                        switch ($accounts[$i]["plattform"]) {
                          case 'Facebook':
                            ?>                              
                              <a href="https://facebook.com/<?php echo $accounts[$i]['account_name'] ?>/" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                              </a>
                           <?php
                            break;
                         case 'Instagram':
                            ?>
                              <a href="https://instagram.com/<?php echo $accounts[$i]['account_name'] ?>/" target="_blank">
                                <i class="fab fa-instagram"></i>
                              </a>
                           <?php
                            break;
                          case 'Twitter':
                            ?>
                              <a href="https://twitter.com/<?php echo $accounts[$i]['account_name'] ?>/" target="_blank">
                                <i class="fab fa-twitter"></i>
                              </a>
                           <?php
                            break;
                          case 'Youtube':
                            ?>
                              <a href="https://www.youtube.com/channel/<?php echo $accounts[$i]['account_name'] ?>/" target="_blank">
                                <i class="fab fa-youtube"></i>
                              </a>
                           <?php
                            break;
                          default:
                            break;
                        }

                      }
                     ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
            <div class="single-footer-caption mt-60">
              <div class="footer-tittle">
                <h4>Newsletter</h4>
                <p>Subscribe to our news letter for notifications...</p>
                <div class="footer-form">
                  <div id="mc_embed_signup">
                     <form target="_blank" 
                      action="javascript.void(0);"
                      class="subscribe_form relative mail_part">
                      <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                        class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = ' Email Address '" />
                      <div class="form-icon">
                        <button  name="submit" id="newsletter-submit" onclick="postNewsLetter()" class="
                              email_icon newsletter-submit button-contactForm">
                          <img src="../assets/img/logo/form-iocn.png" alt=""id="newsletter-icon"newsletter-/>
                        </button>
                      </div>
                      <div class="mt-10 info"></div>
                     </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  </div>
      </div>
    </div>
    <div class="footer-bottom-area">
      <div class="container">
        <div class="footer-border">
          <div class="row d-flex align-items-center justify-content-between">
            <div class="col-lg-6">
              <div class="footer-copy-right">
                <p>
                  Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  All rights reserved | Dennislaw News
                </p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="footer-menu f-right">
                <ul>
                  <li><a href="../terms">Terms of use</a></li>
                  <li><a href="../policy">Privacy Policy</a></li>
                  <li><a href="../store">Store</a></li>
                  <li><a href="../contact">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
 <script type="text/javascript">
    function postNewsLetter(){
      var mail = $("#newsletter-form-email").val();
      if(mail != ""){
          $.post("../subscribe-news-letter", {email: mail}, function(result){
               var res  = JSON.parse(result);
             $(".info").html(res['msg']);
           });
      }
    } 

    function postNewsLetter2(){
      var mail = $("#email-to-post-to-subscribe").val();
      if(mail != ""){
        $.post("../subscribe-news-letter", {email: mail}, function(result){
                var res  = JSON.parse(result);
              $(".info2").html(res['msg']);
            });
      }
    } 


    function postComment(){
      var comment = $("#commentComment").val();
      var name = $("#commentName").val();
      var email = $("#commentEmail").val();
      var id = <?php echo $id ?>;

      if(comment == "") return alert("Comment is required!");
      if(name == "") return alert("Name is required!");
      if(email == "") return alert("Email is required!");

          $.post("../postComment", {name: name, email: email, comment: comment, newsid: id}, function(result){           
                var res  = JSON.parse(result);
                if(res["error"]){
                $(".resInfo").html(res['msg']);
                }else{
                  var newCom = '<li class="list-group-item"> <strong>'+res["result"]["name"]+'</strong> <br>'+res["result"]["comment"]+'</li>';
                  $('#commentList').prepend(newCom);
                }
            });
    }
 </script>