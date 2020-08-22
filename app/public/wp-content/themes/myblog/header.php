<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title>Han's blog</title>
    <link href="./style.css" rel="stylesheet"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- ▼ ヘッダー : 開始-->
	

	<header>
		<div class="top">HAN'S TRIP</div>
		<nav>
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
  		</nav>
		
	</header>