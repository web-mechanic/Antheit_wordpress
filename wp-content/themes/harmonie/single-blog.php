<?php get_header(); ?>

<div class="main">
	 <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
	<section class="blogContainer">
	<h2><? the_title();?></h2>
	<? the_post_thumbnail('singleBlog'); ?> 
	<?php the_content(); ?>
	</section>
		<?php endwhile; ?>
	<?php endif; ?>
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