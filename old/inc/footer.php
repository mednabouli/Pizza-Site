 <!-- Footer -->
        <div class="container-fluid footer-wrapper">
          <div class="container">
            <div class="row-fluid">
              <div class="span12">

              </div>

              <div class="row-fluid footer-features">
			    <div class="span4">
                      <img src="img/footer-logo.png" alt="California Logo" width="150" height="150">
                </div>
                <div class="span4 aboutInfo">
                  <div class="row-fluid">
                    <div class="span8">
                    <p>La Pizzéria <strong>"La Pâte D'OR"</strong> est bien connue à Verdun pour sa pizza sans égale et pour ses délicieuses pâtes.</p>
                      <a href="about.php">Lire Plus</a>
                    </div>
                  </div>
                </div>
                <div class="span4 working-schedule">
                  <h5>Heures Ouvert</h5>
                  <ul id="schedule">
                    <li>
                      <span class="day">Lundi</span>
                      <span class="dtime">11:00 am - 10:00 pm</span>
                    </li>
                    <li>
                      <span class="day">Mardi</span>
                      <span class="dtime">11:00 am - 10:00 pm</span>
                    </li>
                    <li>
                      <span class="day">Mercredi</span>
                      <span class="dtime">11:00 am - 10:00 pm</span>
                    </li>
                    <li>
                      <span class="day">Jeudi</span>
                      <span class="dtime">11:00 am - 10:00 pm</span>
                    </li>
                    <li>
                      <span class="day">Vendredi</span>
                      <span class="dtime">11:00 am - 10:00 pm</span>
                    </li>
                    <li>
                      <span class="day">Samedi</span>
                      <span class="dtime">12:00 am - 10:00 pm</span>
                    </li>
                    <li>
                      <span class="day">Dimanche</span>
                      <span class="dtime">12:00 am - 10:00 pm</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="row-fluid bottom-footer">
                <div class="span6">
                  <a class="goTop" href="#">Top</a>
                </div>
                <div class="span6">
                  <a href="http://mednabouli.ca" target="_blank">Website by Med Nabouli</a>
                </div>
              </div>
            </div>
          </div>
        </div>










<!-- Essential Scripts -->
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/smoothscroll.js" type="text/javascript"></script>
        <script src="js/jquery.timeago.js" type="text/javascript"></script>
        <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
        <script src="js/menu.js" type="text/javascript"></script>
        <script src="js/browserDetection.js" type="text/javascript"></script>
        <script src="js/waypoints.min.js" type="text/javascript"></script>
        <script src="js/slick.min.js" type="text/javascript"></script>


        <!--
      ##############################
       - ACTIVATE THE BANNER HERE -
      ##############################
      -->
      <script type="text/javascript">

        var tpj=jQuery;
        tpj.noConflict();

        tpj(window).load(function() {

        if (tpj.fn.cssOriginal!=undefined)
          tpj.fn.css = tpj.fn.cssOriginal;

          tpj('.fullscreenbanner').revolution(
            {
              delay:10000000,
              startwidth:1170,
              startheight:600,

              onHoverStop:"on",           // Stop Banner Timet at Hover on Slide on/off

              thumbWidth:100,             // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
              thumbHeight:50,
              thumbAmount:3,

              hideThumbs:0,
              navigationType:"bullet",        // bullet, thumb, none
              navigationArrows:"solo",        // nexttobullets, solo (old name verticalcentered), none

              navigationStyle:"round",        // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


              navigationHAlign:"left",        // Vertical Align top,center,bottom
              navigationVAlign:"bottom",          // Horizontal Align left,center,right
              navigationHOffset:30,
              navigationVOffset:30,

              soloArrowLeftHalign:"left",
              soloArrowLeftValign:"center",
              soloArrowLeftHOffset:20,
              soloArrowLeftVOffset:0,

              soloArrowRightHalign:"right",
              soloArrowRightValign:"center",
              soloArrowRightHOffset:20,
              soloArrowRightVOffset:0,

              touchenabled:"on",            // Enable Swipe Function : on/off


              stopAtSlide:-1,             // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
              stopAfterLoops:-1,            // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

              hideCaptionAtLimit:0,         // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
              hideAllCaptionAtLilmit:0,       // Hide all The Captions if Width of Browser is less then this value
              hideSliderAtLimit:0,          // Hide the whole slider, and stop also functions if Width of Browser is less than this value


              fullWidth:"on",             // Same time only Enable FullScreen of FullWidth !!
              fullScreen:"on",            // Same time only Enable FullScreen of FullWidth !!

              shadow:0                //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

            });




      });
      </script>


        <script type="text/javascript">

        jQuery(document).ready(function() {
          jQuery('.carousel_slider').slick();
        });

          if (jQuery(window).width() < 1600) {
            jQuery('body').prepend('<img class="aitem a1" src="img/parallax/8.png" alt="Featured Image">');
            jQuery('body').prepend('<img class="aitem a2" src="img/parallax/splat.png" alt="Featured Image">');
            jQuery('body').prepend('<img class="aitem a4" src="img/parallax/1.png" alt="Featured Image">');
            jQuery('body').prepend('<img class="aitem a7" src="img/parallax/11.png" alt="Featured Image">');
            jQuery('body').prepend('<img class="aitem a3" src="img/parallax/4.png" alt="Featured Image">');
            jQuery('body').prepend('<img class="aitem a5" src="img/parallax/7.png" alt="Featured Image">');
          }

        </script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='http://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>