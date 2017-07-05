<?php include '../inc/config.php' ?>


        <div id="ajax-content" class="page page--menu">
            <div  class="menu-content">
<img src="assets/img/home/uova.jpg" style="
    width: 100%;
    height: 230px;
">
  <?php 
 		$m = "SELECT * FROM manakish where manakish_active = 1";
		$s = "SELECT * FROM sambousek where sambousa_active = 1";
 		$f = "SELECT * FROM acote where acote_active = 1";
		$cb = "SELECT * FROM cheesy where cheesy_active = 1";
 		$de = "SELECT * FROM dessert where dessert_active = 1";
 		$sl = "SELECT * FROM salade where salade_active = 1";


      	$resultm = mysqli_query($mysqli, $m);
		$results = mysqli_query($mysqli, $s);
		$resultf = mysqli_query($mysqli, $f);
		$resultcb = mysqli_query($mysqli, $cb);
		$resultde = mysqli_query($mysqli, $de);
		$resultsl = mysqli_query($mysqli, $sl);

       	$vegcount = mysqli_num_rows($resultm);
		$vcount = mysqli_num_rows($results);
		$fcount = mysqli_num_rows($resultf);
		$cbcount = mysqli_num_rows($resultcb);
		$decount = mysqli_num_rows($resultde);
		$slcount = mysqli_num_rows($resultsl);
       
      $a = 0;
	        $b = 0;
			      $c = 0;
				  $d = 0;
				  $e = 0;
				  $sl = 0;

     ?>
<main class="o-main">
  <div class="o-container">
    <div class="o-section">
	
				<div id="tabs" class="tabs">
				<nav>
					<ul>
						<li><a href="#section-1" class="icon-food"><span>Manakish</span></a></li>
						<li><a href="#section-2" class="icon-food"><span>Sambousek</span></a></li>
						<li><a href="#section-3" class="icon-food"><span>Cheesy Bread</span></a></li>
						<li><a href="#section-4" class="icon-food"><span>Salade</span></a></li>
						<li><a href="#section-5" class="icon-food"><span>Dessert</span></a></li>
						<li><a href="#section-6" class="icon-cup"><span>Side Order</span></a></li>
					</ul>
				</nav>
				<div class="content">
					<section id="section-1">
					<?php
      foreach( $resultm as $item ):
     $a++;
     // Closing PHP tag follows
     ?>
						<div class="mediabox">
							<img src="assets/img/menu/3.jpg" alt="img01" />
							<h3><?php echo $item["manakish_name"]; ?></h3>
							<p><?php echo $item["manakish_description"]; ?></p>
							<p>1 PCE: $<?php echo $item["manakish_price_pce"]; ?> | 6 PCE: $<?php echo $item["manakish_price_pces"]; ?></p>
						</div>	
     <?php
     if($a % $vegcount == 0) echo '<div class="mediabox">'; 
   endforeach; ?>
					</section>
					<section id="section-2">
					<?php

      foreach( $results as $itemb ):
     $b++;
     // Closing PHP tag follows
     ?>
						<div class="mediabox">
							<img src="assets/img/menu/4.jpg" alt="img01" />
							<h3><?php echo $itemb["sambousa_name"]; ?></h3>
							<p><?php echo $itemb["sambousa_description"]; ?></p>
							<p>6 PC: $<?php echo $itemb["sambousa_price"]; ?></p>
     </div>
	 <?php
     if($b % $vcount == 0) echo '<div class="mediabox">'; 
   endforeach; ?>

					</section>
					<section id="section-3">
					<?php
      foreach( $resultcb as $itemd ):
     $d++;
     // Closing PHP tag follows
     ?>
						<div class="mediabox">
							<img src="assets/img/menu/5.jpg" alt="img01" />
								<h3><?php echo $itemd["cheesy_name"]; ?> </h3>
								  <p><?php echo $itemd["cheesy_description"]; ?> </p>
								  <p>$<?php echo $itemd["cheesy_price"]; ?> </p>
     </div>
	 <?php
     if($d % $cbcount == 0) echo '<div class="mediabox">'; 
   endforeach; ?>
					</section>
					<section id="section-4">
					<?php
      foreach( $resultsl as $itemsl ):
     $sl++;
     // Closing PHP tag follows
     ?>
						<div class="mediabox">
							<img src="assets/img/menu/6.jpg" alt="img01" />
								<h3><?php echo $itemsl["salade_name"]; ?> </h3>
								  <p><?php echo $itemsl["salade_description"]; ?> </p>
								  <p>$<?php echo $itemsl["salade_price"]; ?> </p>
     </div>
	 <?php
     if($sl % $slcount == 0) echo '<div class="mediabox">'; 
   endforeach; ?>
					</section>
					<section id="section-5">
					<?php
      foreach( $resultde as $iteme ):
     $e++;
     // Closing PHP tag follows
     ?>
						<div class="mediabox">
							<img src="assets/img/menu/7.jpg" alt="img01" />
								<h3><?php echo $iteme["dessert_name"]; ?> </h3>
								  <p><?php echo $iteme["dessert_description"]; ?> </p>
								  <p>$<?php echo $iteme["dessert_price"]; ?> </p>
								  </div>
    <?php
     if($e % $decount == 0) echo '<div class="mediabox">'; 
   endforeach; ?>
					</section>
					<section id="section-6">
					<?php
      foreach( $resultf as $itemc ):
     $c++;
     // Closing PHP tag follows
     ?>
						<div class="mediabox">
							<img src="assets/img/menu/8.jpg" alt="img01" />
								  <h3><?php echo $itemc["acote_name"]; ?> </h3>
								  <p><?php echo $itemc["acote_description"]; ?> </p>
								  <p>$<?php echo $itemc["macote_price"]; ?> </p>
								  </div>
    <?php
     if($c % $fcount == 0) echo '<div class="mediabox">'; 
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
