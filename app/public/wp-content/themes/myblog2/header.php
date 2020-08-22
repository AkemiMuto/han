<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title>Han's blog</title>
	<link href="./style.css" rel="stylesheet"/>
	<script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- ▼ ヘッダー : 開始-->
	
<div class="wrapper">
	<header>
		<div class="top">HAN'S TRIP</div>
		<!-- <nav>
			<ul class = "current">
			<li><a href=”<?php echo esc_url(home_url('/'));?>”>HOME</a></li>
			<div class="posts_menu">
			<li><a href=”<?php echo esc_url(home_url('/blog/'));?>”>ALL POST</a></li>
			<li><a href=”<?php echo esc_url(home_url('/archives/category/coutries/'));?>”>COUNTRIES</a>
			<ul>
			<li><a href="<?php echo esc_url(home_url('/archives/category/thailand/'));?>">Thailand</a></li>
			<li><a href="<?php echo esc_url(home_url('/archives/category/japan/'));?>">Japan</a></li>
			<li><a href="<?php echo esc_url(home_url('/archives/category/korean/'));?>">Korea</a></li>
			<li><a href="<?php echo esc_url(home_url('/archives/category/japan/'));?>">HongKong</a></li>
			<li><a href="<?php echo esc_url(home_url('/archives/category/america/'));?>">America</a></li>
			<li><a href="<?php echo esc_url(home_url('/archives/category/japan/'));?>">Shingapore</a></li>
			<li><a href="<?php echo esc_url(home_url('/archives/category/japan/'));?>">Taiwan</a></li>
			</ul>
			</li>
			<li><a href=”<?php echo esc_url(home_url('/archives/category/food/'));?>”>FOOD</a></li>
			<li><a href=”<?php echo esc_url(home_url('/archives/category/sightseeing/'));?>”>SIGHTSEEING</a></li>
			</div>
			<li><a href=”<?php echo esc_url(home_url('/archives/category/profile/'));?>”>ABOUT ME</a></li>
			</ul>
		  </nav> -->
		  
		  <?php wp_nav_menu(
        array(
            'theme_location' => 'globalnav',
			'container' => 'nav',
			'menu_class' => 'current'
        )
		);?>
		
		<div class="header-sp-icon-wrap">
			<div class="header-sp-icon-bar1"></div>
			<div class="header-sp-icon-bar2"></div>
			<div class="header-sp-icon-bar3"></div>
		  </div>

		  <div class="header-sp-nav">
		  <?php wp_nav_menu(
        array(
            'theme_location' => 'globalnav',
			'container' => 'div',
			'menu_class' => 'header-sp-nav-list'
        )
		);?>
		  </div>
		
	</header>