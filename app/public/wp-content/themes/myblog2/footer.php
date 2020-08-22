<footer>
 <div class="footer">
      <h1 class="left">HAN'S TRIP</h1>
      <div class="right">
		<!-- <nav>
			<ul class = "right1">
			<li><a href=”<?php echo esc_url(home_url('/'));?>”>HOME</a></li>
			<div class="posts_menu">
			<li><a href=”<?php echo esc_url(home_url('/blog/'));?>”>ALL POST</a></li>
			<li><a href=”<?php echo esc_url(home_url('/food/'));?>”>FOOD</a></li>
			<li><a href=”<?php echo esc_url(home_url('/sightseeing/'));?>”>SIGHTSEEING</a></li>
			</div>
			<li><a href=”<?php echo esc_url(home_url('/profile/'));?>”>ABOUT ME</a></li>
			</ul>
		</nav> -->
		<?php wp_nav_menu(
        array(
            'theme_location' => 'footernav',
			'container' => 'nav',
			'menu_class' => 'right1'
        )
		);?>
      </div>
    </div>
</footer>
</div>
<?php wp_footer();?>
<!-- ▲ フッター : 終了-->
</body>
</html>