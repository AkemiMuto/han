
<?php get_header(); ?>

<!-- ▼ コンテンツ : 開始-->

<!-- 記事 -->
<?php if (have_posts()): ?>
 		<?php while (have_posts()): ?>
 			<?php the_post(); ?>
<article class="article" <?php post_class(); ?>>

	<div class="thumbnail">
		<img src="../96D0E810-E98B-4626-8D39-073060A2F821.jpg">
	</div>
	<div class="post-contents">
	<h2 class="title"><?php the_title(); ?></h2>
	<p class="category"><?php the_category('&nbsp;'); ?></p>
	<p class="date"><?php the_time('Y/n/j/'); ?></p>

	<div class="contents"><?php the_content(); ?></div>
</div>
	
</article>

<?php get_footer(); ?>