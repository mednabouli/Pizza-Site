

        <div id="ajax-content" class="page page--offre">
            <div class="offre-content">
		<div id="offre-slider" class="swipe">
          <div class="swipe-wrap">
            <div class="slide">
              <div class="content-body">
                <div class="content-body-images">
                  <a href="pdf/menu.pdf" target="_blank"><img src="assets/img/offres/1.png" alt="offre-pizza" class="to-anim"></a>
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="content-body">
                <div class="content-body-images offre-pizza">
                  <a href="pdf/menu.pdf" target="_blank"><img src="assets/img/offres/2.png" alt="offre-pizza" class="to-anim"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-slider="offreSlider" class="content-arrow content-arrow-right"><img src="assets/img/arrow_right.png" alt="Go forward"></div>
        <div data-slider="offreSlider" class="content-arrow content-arrow-left"><img src="assets/img/arrow_left.png" alt="Go back"></div>
            </div>
        </div>
<script src="assets/js/jquery.hammer.min.js"></script>

<script>
	// Slider
jQuery(document).ready(function($){
	var slider = new Hammer('slider');

  $(".content-arrow-right").hammer().on('tap',function(e){
    e.preventDefault();
    slider = eval($(this).data('slider'));
    slider.next();
  });

  $(".content-arrow-left").hammer().on('tap',function(e){
    e.preventDefault();
    slider = eval($(this).data('slider'));
    slider.prev();
  });
  
  window.offreSlider = Swipe(document.getElementById('offre-slider'), {
  speed: 1000,
  transitionEnd: function(index, elem) {
    $(elem).siblings('.active-slide').removeClass('active-slide');
    $(elem).addClass('active-slide');
  }
});
});
</script>

