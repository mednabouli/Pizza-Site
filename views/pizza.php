<?php include '../inc/config.php' ?>


        <div id="ajax-content" class="page page--menu">
            <div  class="menu-content">
<img src="assets/img/home/uova.jpg" style="
    width: 100%;
    height: 230px;
">
<main class="o-main">
  <div class="o-container">
    <div class="o-section">
	
	  <?php 
 		$veg = "SELECT * FROM pizza where pizza_category_id = 1 and pizza_active = 1";
		$v = "SELECT * FROM pizza where pizza_category_id = 2 and pizza_active = 1";
 		$f = "SELECT * FROM pizza where pizza_category_id = 3 and pizza_active = 1";
		$chef = "SELECT * FROM pizza where pizza_category_id = 4 and pizza_active = 1";

      	$resultveg = mysqli_query($mysqli, $veg);
		$resultv = mysqli_query($mysqli, $v);
		$resultf = mysqli_query($mysqli, $f);
		$resultchef = mysqli_query($mysqli, $chef);

       	$vegcount = mysqli_num_rows($resultveg);
		$vcount = mysqli_num_rows($resultv);
		$fcount = mysqli_num_rows($resultf);
		$chefcount = mysqli_num_rows($resultchef);

       
      $a = 0;
	        $b = 0;
			      $c = 0;
				  $d = 0;

     ?>

	 <div id="tabs" class="tabs">
				<nav>
					<ul>
						<li><a href="#section-1" class="icon-food"><span>Pizza V&eacute;g&eacute;tarienne</span></a></li>
						<li><a href="#section-2" class="icon-food"><span>Pizza Viandes&Poulets</span></a></li>
						<li><a href="#section-3" class="icon-food"><span>Pizza Fruits de mers</span></a></li>
						<li><a href="#section-4" class="icon-food"><span>Calzone</span></a></li>
					</ul>
				</nav>
				<div class="content">
					<section id="section-1">
					<?php
      foreach( $resultveg as $item ):
     $a++;
     // Closing PHP tag follows
     ?>
						<div class="mediabox">
							<img src="assets/img/menu/1.jpg" alt="img01" />
							<h3><?php echo $item["pizza_name"]; ?></h3>
							<p><?php echo $item["pizza_description"]; ?></p>
						    <p>$<?php echo $item["pizza_price_ps"]; ?> | $<?php echo $item["pizza_price_m"]; ?> | $<?php echo $item["pizza_price_gl"]; ?> | $<?php echo $item["pizza_price_tgxl"]; ?> | $<?php echo $item["pizza_price_f"]; ?> </p>
						</div>	
     <?php
     if($a % $vegcount == 0) echo '<div class="mediabox">'; 
   endforeach; ?>
					</section>
					<section id="section-2">
<?php

      foreach( $resultv as $itemb ):
     $b++;
     // Closing PHP tag follows
     ?>
						<div class="mediabox">
							<img src="assets/img/menu/1.jpg" alt="img01" />
								  <h3><?php echo $itemb["pizza_name"]; ?></h3>
								  <p><?php echo $itemb["pizza_description"]; ?> </p>
								  <p>$<?php echo $itemb["pizza_price_ps"]; ?> | $<?php echo $itemb["pizza_price_m"]; ?> | $<?php echo $itemb["pizza_price_gl"]; ?> | $<?php echo $itemb["pizza_price_tgxl"]; ?> | $<?php echo $itemb["pizza_price_f"]; ?> </p>
     </div>

     <?php
     if($b % $vcount == 0) echo '<div class="mediabox">'; 
   endforeach; ?>

					</section>
					<section id="section-3">
<?php
      foreach( $resultf as $itemc ):
     $c++;
     // Closing PHP tag follows
     ?>
						<div class="mediabox">
							<img src="assets/img/menu/1.jpg" alt="img01" />
								  <h3><?php echo $itemc["pizza_name"]; ?> </h3>
								  <p><?php echo $itemc["pizza_description"]; ?> </p>
								  <p>$<?php echo $itemc["pizza_price_ps"]; ?> | $<?php echo $itemc["pizza_price_m"]; ?> | $<?php echo $itemc["pizza_price_gl"]; ?> | $<?php echo $itemc["pizza_price_tgxl"]; ?> | $<?php echo $itemc["pizza_price_f"]; ?> </p>
     </div>
     <?php
     if($c % $fcount == 0) echo '<div class="mediabox">'; 
   endforeach; ?>
					</section>
					<section id="section-4">
<?php
      foreach( $resultchef as $itemchef ):
     $d++;
     // Closing PHP tag follows
     ?>
						<div class="mediabox">
							<img src="assets/img/menu/2.jpg" alt="img01" />
								  <h3><?php echo $itemchef["pizza_name"]; ?> </h3>
								  <p><?php echo $itemchef["pizza_description"]; ?> </p>
								  <p>$<?php echo $itemchef["pizza_price_ps"]; ?> </p>
								  </div>
     <?php
     if($d % $chefcount == 0) echo '<div class="mediabox">'; 
   endforeach; ?>
					</section>

				</div><!-- /content -->
			</div><!-- /tabs -->
	
	

    </div>
  </div>
</main>


  
            </div>
        </div>

		<script>
			new Tabs( document.getElementById( 'tabs' ) );
		</script>
