
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

	<!-- <div class="bun">This page introduces all posts.</div>
	<div class="bun2">If you are interested in an article, you can click on it.
	</div> -->
	<div class="description">
		<p>This page introduces all posts.</br>
		If you are interested in an article, you can click on it.</p>
	</div>


<!-- 	<ul class = "box">
	    <li><div class="box1"><img src="LVOL7703.jpeg"><p>タイに行った話</p></div></li>
	    <li><div class="box2"><img src="IMG_6188.JPG"><p>北海道に行った話</p></div></li>
	    <li><div class="box3"><img src="IMG_6829.JPG"><p>韓国に行った話</p></div></li>
 	</ul>

 	<ul class = "boxbox">
	    <li><div class="box4"><img src="IMG_0383.JPG"><p>シンガポールに行った話</p></div></li>
	    <li><div class="box5"><img src="BE8DA11F-D326-45E0-938F-CE8094EC72FE.jpeg"><p>NYに行った話</p></div></li>
	    <li><div class="box6"><img src="097FAFEB-795B-4905-8F85-B52201161B42.JPG"><p>香港に行った話</p></div></li>
 	</ul> -->
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
 						<img src="<?php echo esc_url(get_theme_file_uri('images/59774115_220x220.jpg')); ?>" alt=""> 
 						<? endif; //条件分岐終了 ?>
 					</a>
 		</div>
 		<h2 class="post_title"><?php the_title(); ?></h2>
 		<div class="post_content">
 			<p><?php the_time('Y.n.j.'); ?></p>
 			<p class="post_tag_country"><?php the_category('&nbsp'); ?></p>
 		</div>
 	</article>

 <?php endwhile; ?>

 </div>
	


   <!-- <div class="pagination p1">
      <ul>
        <li href="#" class="triangle1"><a href="#"><span></span></a></li>
        <li><a class="is-active" href="#">1</a></li>
        <li><a class="is-active2"　href="#">2</a></li>
        <li><a class="is-active2"　href="#">3</a></li>
        <li href="#" class="curled-box"><a href="#"><span></span></a></li>
        <li href="#" class="curled-box"><a href="#"><span></span></a></li>
        <li href="#" class="curled-box"><a href="#"><span></span></a></li>
        <li href="#" class="triangle2"><a href="#"><span></span></a></li>
        
      </ul>

    </div>
 -->

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
		
	



<!-- ▲ ヘッダー : 終了-->
<!-- ▼ コンテンツ : 開始-->

<!-- ▲ コンテンツ : 終了-->

<!-- ▼ フッター : 開始-->

