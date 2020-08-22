
<?php get_header(); ?>

<!-- ▼ コンテンツ : 開始-->

<!-- 記事 -->
<?php if (have_posts()): ?>
 		<?php while (have_posts()): ?>
 			<?php the_post(); ?>
<article class="article" <?php post_class(); ?>>

	<div class="thumbnail">
	<?php if(has_post_thumbnail()): //もしアイキャッチ画像の設定があれば ?>
				 <?php the_post_thumbnail(); //アイキャッチ画像を表示 ?>
				 <?php else: //もしアイキャッチ画像の設定がなかったら ?>
					 <!-- <img src="<?php echo esc_url(get_theme_file_uri('images/img-default.png')); ?>" alt=""> -->
					 <? endif; //条件分岐終了 ?>
	</div>
	<div class="post-contents">
	<h2 class="title"><?php the_title(); ?></h2>
	<p class="post-category"><?php the_category('&nbsp;'); ?></p>
	<p class="date"><?php the_time('Y/n/j/'); ?></p>

	<div class="contents"><?php the_content(); ?></div>
</div>
	
</article>
		<?php endwhile; ?>
<?php the_post_navigation(); ?>
<?php endif; ?>


<?php get_footer(); ?>