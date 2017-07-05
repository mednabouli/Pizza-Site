<?php include 'inc/head.php' ?>

        <style type="text/css">

          #wrapper {
            position: relative;
            width: 100%;
          }
          #carousel-wrapper {
            padding-bottom: 10px;
            position: relative;
          }
          #carousel, #thumbs {
            overflow: hidden;
          }

          #carousel-wrapper {
            padding-left: 50px;
            padding-right: 50px;
          }

          #carousel-wrapper .caroufredsel_wrapper {
            -webkit-box-shadow: 10px 10px 10px 15px rgba(0,0,0, 0.4);
            box-shadow: 10px 10px 10px 15px rgba(0,0,0, 0.4);
          }

          #carousel span, #carousel img,
          #thumbs a, #thumbs img  {
            display: block;
            float: left;
          }
          #carousel span, #carousel a,
          #thumbs span, #thumbs a {
            position: relative;
          }
          #carousel img,
          #thumbs img {
            border: none;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
          }
          #carousel img.glare,
          #thumbs img.glare {
            width: 102%;
            height: auto;
          }

          #carousel span {
            width: 554px;
            height: 313px;
            border: 10px solid white;
          }


          #thumbs-wrapper {
            -webkit-box-shadow: 10px 10px 15px 15px rgba(0,0,0, 0.3);
            box-shadow: 10px 10px 15px 15px rgba(0,0,0, 0.3);
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0);
            padding: 20px 40px;
            position: relative;
          }
          #thumbs a {
            width: 150px;
            height: 100px;
            margin: 0 10px;
            overflow: hidden;
          }
          #thumbs a:hover, #thumbs a.selected {
            border-color: #566;
          }
          
          #wrapper img#shadow {
            width: 100%;
            position: absolute;
            bottom: 0;
          }

          #prev {
            background-image: url(img/back.png);
          }

          #next {
            background-image: url(img/forward.png);
          }

          #prev, #next {
            background-repeat: no-repeat;
    display: block;
    width: 50px;
    height: 50px;
    margin-top: -7px;
    position: absolute;
    top: 45%;
          }
          #prev {
            left: 25px;
          }
          #next {
            right: 25px;
          }     
          #prev.disabled, #next.disabled {
            display: none !important;
          }
          
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        
        <!-- Animation Elements -->
        <img class="aitem a1" src="img/parallax/8.png" alt="Featured Image">
        <img class="aitem a2" src="img/parallax/splat.png" alt="Featured Image">
        <img class="aitem a3" src="img/parallax/7.png" alt="Featured Image">
        <img class="aitem a4" src="img/parallax/1.png" alt="Featured Image">
        <img class="aitem a5" src="img/parallax/3.png" alt="Featured Image">
        <img class="aitem a7" src="img/parallax/11.png" alt="Featured Image">

        <!-- Header -->
<?php include 'inc/header.php' ?>

        

        <!-- Navigation -->
<?php include 'inc/nav.php' ?>
        



        

      <div class="container single-gallery">
        <div class="row-fluid">
          <div id="wrapper">
            <div id="carousel-wrapper">
              <img id="shadow" src="img/gui/carousel_shadow.png" />
              <div id="carousel">
                <span id="slide-1"><img src="img/gallery/1.jpg" alt="La Pâte D'OR" /></span>
                <span id="slide-2"><img src="img/gallery/2.jpg" alt="La Pâte D'OR" /></span>
                <span id="slide-3"><img src="img/gallery/3.jpg" alt="La Pâte D'OR" /></span>
                <span id="slide-4"><img src="img/gallery/4.jpg" alt="La Pâte D'OR" /></span>
                <span id="slide-5"><img src="img/gallery/5.jpg" alt="La Pâte D'OR" /></span>
                <span id="slide-6"><img src="img/gallery/6.jpg" alt="La Pâte D'OR" /></span>
                <span id="slide-7"><img src="img/gallery/7.jpg" alt="La Pâte D'OR" /></span>
                <span id="slide-8"><img src="img/gallery/8.jpg" alt="La Pâte D'OR" /></span>
                <span id="slide-9"><img src="img/gallery/9.jpg" alt="La Pâte D'OR" /></span>
                <span id="slide-10"><img src="img/gallery/10.jpg" alt="La Pâte D'OR" /></span>
              </div>
            </div>
            <div id="thumbs-wrapper">
              <div id="thumbs">
                <a href="#slide-1" class="selected"><img src="img/gallery/1.jpg" alt="La Pâte D'OR" /></a>
                <a href="#slide-2"><img src="img/gallery/2.jpg" alt="La Pâte D'OR" /></a>
                <a href="#slide-3"><img src="img/gallery/3.jpg" alt="La Pâte D'OR" /></a>
                <a href="#slide-4"><img src="img/gallery/4.jpg" alt="La Pâte D'OR" /></a>
                <a href="#slide-5"><img src="img/gallery/5.jpg" alt="La Pâte D'OR" /></a>
                <a href="#slide-6"><img src="img/gallery/6.jpg" alt="La Pâte D'OR" /></a>
                <a href="#slide-7"><img src="img/gallery/7.jpg" alt="La Pâte D'OR" /></a>
                <a href="#slide-8"><img src="img/gallery/8.jpg" alt="La Pâte D'OR"  /></a>
                <a href="#slide-9"><img src="img/gallery/9.jpg" alt="La Pâte D'OR" /></a>
                <a href="#slide-10"><img src="img/gallery/10.jpg" alt="La Pâte D'OR" /></a>
              </div>
              <a id="prev" href="#"></a>
              <a id="next" href="#"></a>
            </div>
          </div>
        </div>
      </div>



  

        


        <!-- Gallery & Testimonials -->
<?php include 'inc/gt.php' ?>  






        


      

        <!-- Footer -->
<?php include 'inc/footer.php' ?>
        <script src="js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>

        <script type="text/javascript">
		jQuery.noConflict();
          jQuery( document ).ready(function( $ ) {

            jQuery('#carousel').carouFredSel({
              responsive: true,
              circular: false,
              auto: false,
              items: {
                visible: 1,
                width: 200,
                height: '56%'
              },
              scroll: {
                fx: 'directscroll'
              }
            });

            jQuery('#thumbs').carouFredSel({
              responsive: true,
              circular: false,
              infinite: false,
              auto: false,
              prev: '#prev',
              next: '#next',
              items: {
                visible: {
                  min: 2,
                  max: 4
                },
                width: 202,
                height: '66%'
              }
            });

            jQuery('#thumbs a').click(function() {
              jQuery('#carousel').trigger('slideTo', '#' + this.href.split('#').pop() );
              jQuery('#thumbs a').removeClass('selected');
              jQuery(this).addClass('selected');
              return false;
            });

          });
        </script>
    </body>
</html>
