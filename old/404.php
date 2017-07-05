<?php include 'inc/head.php' ?>
<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



        <!-- Parallax Elements -->
        <img class="parallax-el item1" src="img/parallax/1.png" alt="Parallax Element">
        <img class="parallax-el item2" src="img/parallax/2.png" alt="Parallax Element">
        <img class="parallax-el item3" src="img/parallax/3.png" alt="Parallax Element">
        <img class="parallax-el item4" src="img/parallax/4.png" alt="Parallax Element">
        <img class="parallax-el item5" src="img/parallax/5.png" alt="Parallax Element">
        <img class="parallax-el item7" src="img/parallax/7.png" alt="Parallax Element">
        <img class="parallax-el item8" src="img/parallax/8.png" alt="Parallax Element">
        <img class="parallax-el item9" src="img/parallax/9.png" alt="Parallax Element">
        <img class="parallax-el item10" src="img/parallax/splat.png" alt="Parallax Element">

        
        

        <!-- Header -->
<?php include 'inc/header.php' ?>






        <div class="content-error">
          <img src="img/404.png" height="239" width="467" alt="Error Image">
          <a href="#">Retour</a>
        </div>
      











        <!-- jQuery Library -->
        <script src="js/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>

        <!-- Essential Scripts -->
        <script src="js/bootstrap.js" type="text/javascript"></script>


        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script>
        function goBack()
          {
          window.history.back()
          }


          $('.content-error a').click(function(event) {
            event.preventDefault();

            goBack();
          });



          $(window).load(function() {
            $('img.parallax-el').addClass('parallax-animation');
          });
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='http://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
