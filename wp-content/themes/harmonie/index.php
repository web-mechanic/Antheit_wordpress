<?php get_header(); ?>

<div class="full">
	
	<ul class="slider">
<? $loop = new WP_Query( array( 'post_type' => 'blog', 'posts_per_page' => 5 ) ); 
	while ( $loop->have_posts() ) : $loop->the_post(); ?>		
		<li><a href="<?php echo get_permalink(); ?>"><? the_post_thumbnail('frontBlog'); ?></a></li>
<?php endwhile; ?>
	</ul>
</div>
<div class="main">
	
	
</div>

<?php get_footer(); ?>