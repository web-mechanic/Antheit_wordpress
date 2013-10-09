<?php get_header(); ?>
<div class="main">
	<div class="agContainer">
		<h2>Agenda de la société</h2>
		<ul>
<?php
        //Order a query by ACF date picker
        $event = get_posts(array(
            'post_type' => 'agenda',
            'posts_per_page' => 100,
            'meta_key' => 'date', // name of custom field
            'orderby' => 'meta_value_num',
            'order' => 'ASC'
                ));
        if ($event) {
            foreach ($event as $post) {
                setup_postdata($post);
                ?>
				<li>
					<? the_post_thumbnail('pageAgenda'); ?>
					<div class="baseInfo">
					<h3><?the_title();?></h3>
					<p><span><? the_field('date'); ?> - </span><span><? the_field('localite'); ?></span></p>
					</div>
					<a class="button moreAg" href="<? the_permalink(); ?>">Plus d'info</a>
				</li>				

  <?php
            }
            wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
        }
        ?>
		</ul>
	
	</div>
</div>

<div class="sb">

<div class="social">
	<h2>Facebook</h2>
<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fharmoniedantheit&amp;width=259&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:259px; height:258px;" allowTransparency="true"></iframe>
</div>

<div class="lastArticles">
	<h2>Derniers articles</h2>
		<ul>
	<? $loop = new WP_Query( array( 'post_type' => 'blog', 'posts_per_page' => 5 ) ); 
	if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>	
		<li><a  href="<? echo get_permalink(); ?>"><? the_title(); ?></a></li>
		

	<?php endwhile; ?>
	<?php endif; ?>	
		</ul>	
</div>
</div>
<?php get_footer(); ?>