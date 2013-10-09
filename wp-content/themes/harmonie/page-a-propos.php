<?php get_header(); ?>
<div class="main">
	<div class="apContainer">
	<? $loop = new WP_Query( array( 'post_type' => 'a-propos', 'posts_per_page' => 1 ) ); 
	if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>	
		<h2>A propos de l'harmonie d'Antheit</h2>
		<h3>Qui sommes-nous&nbsp;?</h3>
		<?php $image = wp_get_attachment_image_src(get_field('image_de_lorchestre'), 'singleBlog'); ?>
			<img class="ochPic" src="<?php echo $image[0]; ?>" alt="<? echo get_the_title(get_field('image_de_lorchestre')) ?>" />
		
		<? the_field('a_propos_de_lharmonie'); ?>


		<h3>Le chef</h3>

		<?php $image = wp_get_attachment_image_src(get_field('photo_du_chef'), 'galAcc'); ?>
		<img class="chefPic" src="<?php echo $image[0]; ?>" alt="<? echo get_the_title(get_field('photo_du_chef')) ?>" />
	
		<? the_field('biographie_du_chef'); ?>

	<?php endwhile; ?>
	<?php endif; ?>

	<h3>Le comité</h3>
	<? $loop = new WP_Query( array( 'post_type' => 'comite', 'posts_per_page' => 6 ) ); 
	if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>	


	<?php endwhile; ?>
	<?php endif; ?>

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