<?php get_header(); ?>

<div class="main">
	<section class="blogContainer">
	<h2>Blog</h2>

	<ul class="blogList">

	
	<? $loop = new WP_Query( array( 'post_type' => 'blog', 'posts_per_page' => 10 ) ); 
		if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>	
		<li>
			<a href="<? echo get_permalink(); ?>">
	<article>

	<? the_post_thumbnail('galAcc'); ?>
	<h3><? the_title();?></h3>
	<div class="meta">
	<span class="entry-date"><?php echo get_the_date(); ?> - </span> <span> <?php comments_number( 'Pas de commentaires', 'Un commentaire', '% commentaires' ); ?> - </span> <span><? the_author();?></span>
	</div>
	<p><? the_excerpt();?></p>
	</article>
	</li>
	</a>
	<?php endwhile; ?>
	<?php endif; ?>

	</ul>
	</section>
</div>

<div class="sb">
<div class="search">
<h2>Recherche</h2>
<?php get_search_form(); ?>
</div>
<div class="social">
	<h2>Facebook</h2>
<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fharmoniedantheit&amp;width=259&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:259px; height:258px;" allowTransparency="true"></iframe>
</div>
</div>
<?php get_footer(); ?>