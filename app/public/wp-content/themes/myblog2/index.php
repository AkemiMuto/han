
<?php get_header(); ?>

<div class="header">
  <?php if ( is_home() ): ?>
  <img src="<?php echo esc_url(get_theme_file_uri('images/DSC00231.JPG')); ?>">
  <p>ALL POST</p>
 <?php else: ?>
	<img src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>">
	<?php the_archive_title('<p>','</p>'); ?>
	<?php endif; ?>
 </div>

<div class="description">
	<p>This page introduces all posts.</br>
	If you are interested in an article, you can click on it.</p>
</div>

<div class="posts">

 <?php if (have_posts()): ?>
	 <?php while (have_posts()): ?>
		 <?php the_post(); ?>

 <article class="post">
	 <div class="post_thumbnail">
		 <a href="<?php the_permalink(); ?>">
			 <?php if(has_post_thumbnail()): //もしアイキャッチ画像の設定があれば ?>
				 <?php the_post_thumbnail(); //アイキャッチ画像を表示 ?>
				 <?php else: //もしアイキャッチ画像の設定がなかったら ?>
					 <img src="<?php echo esc_url(get_theme_file_uri('images/gray.jpg')); ?>" alt="">
					 <? endif; //条件分岐終了 ?>
				 </a>
	 </div>
	 <a href="<?php the_permalink(); ?>"><h2 class="post_title"><?php the_title(); ?></h2></a>
	 <div class="post_content">
		 <p><?php the_time('Y.n.j.'); ?></p>
		 <p class="post_tag_country"><?php the_category('&nbsp'); ?></p>
	 </div>
 </article>

<?php endwhile; ?>

</div>

 <?php the_posts_pagination(array('screen_reader_text'=>' ',
 'prev_next' => true,
 'prev_text' => '<span class="triangle1"></span>',
 'next_text' => '<span class="triangle2"></span>',
 'type'      => 'list',
 'end_size'           => '1', //最初と最後に何個数字を表示するか
	'mid_size'           => '1',//現在のページの数字の前後に何個数字を表示するか
) ); ?>

<?php else: ?>
	<p class="no-content">当てはまる情報はありません。</p>
<?php endif; ?>


<?php get_footer(); ?>	
	


