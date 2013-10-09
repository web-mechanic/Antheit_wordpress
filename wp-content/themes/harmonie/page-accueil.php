<?php get_header(); ?>

<div class="full">
	<h2 class="hiddenTitle">Blog</h2>
	<ul class="slider">
<? $loop = new WP_Query( array( 'post_type' => 'blog', 'posts_per_page' => 5 ) ); 
	if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>		
		<li>
			<a href="<?php echo get_permalink(); ?>">
				<? the_post_thumbnail('frontBlog'); ?>
				<div>
					<h3><? the_title(); ?></h3>
					<p><? the_excerpt();?></p>
				</div>
			</a>
		</li>
<?php endwhile; ?>
<?php endif; ?>
	</ul>
</div>
<div class="main">
	<div class="picAcc">
	<h2>Photos</h2>
		<ul class="gallerie">
		<? $loop = new WP_Query( array( 'post_type' => 'gallerie', 'posts_per_page' => 3 ) ); 
		while ( $loop->have_posts() ) : $loop->the_post(); ?>		
			<li>
				<a href="<?php echo get_permalink(); ?>">
					<? the_post_thumbnail('galAcc'); ?>
				</a>
			</li>
		<?php endwhile; ?>
		</ul>
	</div>
</div>

<div class="sb">
	<div class="agAcc">
	<h2>Agenda</h2>
	<ul class="agenda">
<?php
        //Order a query by ACF date picker
        $event = get_posts(array(
            'post_type' => 'agenda',
            'posts_per_page' => 4,
            'meta_key' => 'date', // name of custom field
            'orderby' => 'meta_value_num',
            'order' => 'ASC'
                ));
        if ($event) {
            foreach ($event as $post) {
                setup_postdata($post);
                ?>
		<li>
			<a href="<?php echo get_permalink(); ?>">
				
				<div>
					<h3><? the_title(); ?></h3>
					<p>Le <?php the_field('date'); ?> - <? the_field('prix');?>€</p>

				</div>
			</a>
		</li>
            <?php
            }
            wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
        }
        ?>
</ul>
</div>
<div class="social">
	<h2>Facebook</h2>
<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fharmoniedantheit&amp;width=259&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:259px; height:258px;" allowTransparency="true"></iframe>
</div>
</div>
<?php get_footer(); ?>