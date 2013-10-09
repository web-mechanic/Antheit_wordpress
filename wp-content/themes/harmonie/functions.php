<?php 

remove_filter('the_excerpt','wpautop');
add_action( 'init', 'create_post_type' );
add_action( 'widgets_init', 'portfolio_sidebars' );
add_action('init', 'build_taxonomies');
add_action('after_setup_theme', 'portfolio_setup');
remove_action('wp_head', 'wp_generator');


/*Menus*/
function my_wp_nav_menu_args( $args = '' )
{
    $args['container'] = false;
    return $args;
} // function

add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );



/*Gestion des scripts*/

function add_ie_html5_shim () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>';
    echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');

/* Ajoute HTML5 SHIV */



function my_enqueue_scripts(){



wp_deregister_script('jquery');

if (  is_page(5)){


	wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
	wp_enqueue_script('jquery');
	// 	//wpcf7_enqueue_scripts();
	// 	//wpcf7_enqueue_styles();

	wp_register_script('responsive-nav', get_template_directory_uri() . '/js/nav.js', array(),'2', true);
	wp_enqueue_script('responsive-nav');

	wp_register_script('slider', get_template_directory_uri() . '/js/main.js', array(),'1', true);
	wp_enqueue_script('slider');
	 }
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');



if(!function_exists(portfolio_sidebars)){
    function portfolio_sidebars(){
        register_sidebar( array(
		'id' => 'primary',
                'name' => __( 'Primary' ),
		'description' => __( 'Une description de la sidebar' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
                'id' => 'secondary',
		'name' => __( 'Secondary' ),
		'description' => __( 'A short description of the sidebar' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
    }

}

if(!function_exists(portfolio_setup)){
    function portfolio_setup(){
        add_theme_support('post-thumbnails');
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'agendaAccueil', 290, 290, true);
    add_image_size( 'frontBlog', 1280, 400, true);
    add_image_size( 'galAcc', 284, 284, true);
    add_image_size( 'singleBlog', 882, 320, true);
    add_image_size( 'pageAgenda', 185, 128, true);
    
     // on vérifie que la fonction existe, puis on crée la nouvelle taille d'image. Le dernier paramètre à true indique qu'il faut rogner l'image pour qu'elle s'adapte aux dimensions
}

add_filter('image_size_names_choose', 'my_image_sizes'); // le filtre qui permet d'ajouter la nouvelle taille au gestionnaire de médias
function my_image_sizes($sizes) {
        $addsizes = array(
                "ptfAccueil"=>__("Prtfolio-accueil"),

                );

        $newsizes = array_merge($sizes, $addsizes);
        return $newsizes;
}
        register_nav_menu('header-menu',__('Header Menu','titi'));

    }
    
}

if(!function_exists('create_post_type')){
	function create_post_type() {

//PostType de la page d'accueil
		register_post_type( 'agenda',
			array(
				'labels' => array(
					'name' => __( 'Agenda' ),
				),
				'public' => true,
				'supports' => array('title','thumbnail','excerpt','editor'),
				'has_archive' => true,
				'rewrite' => array('slug' => 'agenda'),
				'has_archive' => true
			)
		);

		register_post_type( 'blog',
			array(
				'labels' => array(
					'name' => __( 'Blog' ),
				),
				'public' => true,
				'supports' => array('title','thumbnail','editor','excerpt','taxonomies'),
				'has_archive' => true,
				'rewrite' => array('slug' => 'blog'),
				'has_archive' => false
			)
		);

		register_post_type( 'musiciens',
			array(
				'labels' => array(
					'name' => __( 'Musiciens' ),
				),
				'public' => true,
				'supports' => array('title','thumbnail','excerpt'),
				'has_archive' => true,
				'rewrite' => array('slug' => 'musiciens'),
				'has_archive' => true
			)
		);	

		register_post_type( 'gallerie',
			array(
				'labels' => array(
					'name' => __( 'Gallerie' ),
				),
				'public' => true,
				'supports' => array('title','thumbnail'),
				'has_archive' => true,
				'rewrite' => array('slug' => 'gallerie'),
				'has_archive' => true
			)
		);	
		register_post_type( 'a-propos',
			array(
				'labels' => array(
					'name' => __( 'A propos' ),
				),
				'public' => true,
				'supports' => array('title','thumbnail'),
				'has_archive' => true,
				'rewrite' => array('slug' => 'a-propos'),
				'has_archive' => true
			)
		);	

		register_post_type( 'comite',
			array(
				'labels' => array(
					'name' => __( 'Le comité' ),
				),
				'public' => true,
				'supports' => array('title','thumbnail','editor'),
				'has_archive' => true,
				'rewrite' => array('slug' => 'comite'),
				'has_archive' => true
			)
		);				

	}
};

function my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Rechercher' ) .'" />
    </div>
    </form>';

    return $form;
}

add_filter( 'get_search_form', 'my_search_form' );