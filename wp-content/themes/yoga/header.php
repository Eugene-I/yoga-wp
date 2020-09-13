<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<title>Yoga</title>
		<?php wp_head() ;?>
	</head>
	<body>
		<div id="wrapper">
			<header id="header">
				<div class="container">
					<div>
						<?php wp_nav_menu(array(
							'theme_location' => 'Left menu',
							'container' => false,
							'menu_class' => 'nav'
						)) ;?>
						<ul class="nav">
							<li class="active"><a href="#">About us</a></li>
							<li><a href="#">Reservation</a></li>
							<li><a href="#">Gallery</a></li>
						</ul>
					</div>
					<div class="logo-holder"><strong class="logo"><a href="<?php bloginfo('url') ;?>"><img src="images/logo.png" alt="Yoga" width="68" height="68"></a></strong></div>
					<div>
						<?php wp_nav_menu(array(
							'theme_location' => 'Right menu',
							'container' => false,
							'menu_class' => 'nav'
						)) ;?>
						<ul class="nav">
							<li><a href="#">Blog</a></li>
							<li><a href="#">Elements</a></li>
							<li><a href="#">Shop</a></li>
						</ul>
					</div>
				</div>
			</header>