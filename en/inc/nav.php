	<header>
		<div id="logo"><img src="assets/img/cd-logo.png" style=" width: 40px;" alt="Homepage"></div>
		<div id="cd-hamburger-menu"><a class="cd-img-replace" href="#0">Menu</a></div>
		<div id="cd-cart-trigger"><a class="cd-img-replace" href="#0">Cart</a></div>
	</header>

	<nav id="main-nav" ng-controller="MyCtrl">
		<ul>
			<li><a ng-class="{active:isActive('/home')}" href="home" >Home</a></li>
			<li><a ng-class="{active:isActive('/pizza')}" href="pizza" >Pizza</a></li>
			<li><a ng-class="{active:isActive('/extra')}" href="extra" >Extra</a></li>
		    <li><a ng-class="{active:isActive('/offre')}" href="offre" >Deals</a></li>
			<li><a ng-class="{active:isActive('/about')}"href="about" >About</a></li>
			<li><a ng-class="{active:isActive('/contact')}" href="contact" >Contact</a></li>
		</ul>
	</nav>