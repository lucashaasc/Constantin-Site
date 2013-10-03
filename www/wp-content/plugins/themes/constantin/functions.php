<?php function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_bloginfo( 'template_directory' ) ?>/images/logo.png);
            padding-bottom: 190px;
            background-size: inherit !important;
        }
        body.login div#login {
        	padding: 34px 0 0;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Constantin';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

?>
<?php

if ( ! isset( $content_width ) )
	$content_width = 940;

function constantin_setup() {

	load_theme_textdomain( 'constantin', get_template_directory() . '/languages' );
	add_editor_style();
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );
	register_nav_menu( 'primary', __( 'Primary Menu', 'constantin' ) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'e6e6e6',
	) );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 );
}
add_action( 'after_setup_theme', 'constantin_setup' );

/********************************
**** OPÇÕES ADMINISTRATIVAS *****
*********************************/

require( get_template_directory() . '/inc/custom-header.php' );
require( get_template_directory() . '/inc/bootstrap-menu.php' );

/********************************
****** TAMANHOS DE IMAGEM *******
*********************************/



/********************************
***** REGISTRO DE JS E CSS ******
*********************************/
function constantin_scripts_styles() {
	global $wp_styles;


	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0', true );


	wp_enqueue_style( 'constantin-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'constantin_scripts_styles' );

/*function add_this_script_footer(){

	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js' );
	wp_enqueue_script( 'bootstrap' );

}
add_action('wp_footer', 'add_this_script_footer');


function constantin_scripts_basic()  
{  
    wp_register_script( 'jquery-1.8.1.min', get_template_directory_uri() . '/js/jquery-1.8.1.min.js' );
	wp_register_script( 'jquery.nicescroll.min', get_template_directory_uri() . '/js/jquery.nicescroll.min.js' );
	
    wp_enqueue_script( 'jquery-1.8.1.min' );
	wp_enqueue_script( 'jquery.nicescroll.min' );

}  
add_action( 'wp_enqueue_scripts', 'constantin_scripts_basic' );*/

/********************************
***** REGISTRO DE WIDGETS *******
*********************************/

function constantin_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'constantin' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'constantin' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'First Front Page Widget Area', 'constantin' ),
		'id' => 'sidebar-2',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'constantin' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Second Front Page Widget Area', 'constantin' ),
		'id' => 'sidebar-3',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'constantin' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'constantin_widgets_init' );


/********************************
*********** NAVEGAÇÃO ***********
*********************************/

if ( ! function_exists( 'constantin_content_nav' ) ) :
/**
 * Displays navigation to next/previous pages when applicable.
 *
 * @since Twenty Twelve 1.0
 */
function constantin_content_nav( $html_id ) {
	global $wp_query;

	$html_id = esc_attr( $html_id );

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'constantin' ); ?></h3>
			<div class="nav-previous alignleft"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'constantin' ) ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'constantin' ) ); ?></div>
		</nav><!-- #<?php echo $html_id; ?> .navigation -->
	<?php endif;
}
endif;

/********************************
***** COMENTÁRIOS WORDPRESS *****
*********************************/

// desativa sistema de comentários
function _comments_close( $open, $post_id ) {
	return false;
}
add_filter( 'comments_open', '_comments_close', 10, 2 );

// esconde comentários anteriores
function _empty_comments_array( $open, $post_id ) {
	return array();
}
add_filter( 'comments_array', '_empty_comments_array', 10, 2 );

// remove opção no menu de administrador em /wp-admin/
function _remove_admin_menus() {
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', '_remove_admin_menus' );

// remove opção da barra de administração
function _admin_bar_render() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', '_admin_bar_render' );

/********************************
*********** META DATA ***********
*********************************/

if ( ! function_exists( 'constantin_entry_meta' ) ) :
/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own constantin_entry_meta() to override in a child theme.
 *
 * @since Twenty Twelve 1.0
 */
function constantin_entry_meta() {
	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'constantin' ) );

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'constantin' ) );

	$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'constantin' ), get_the_author() ) ),
		get_the_author()
	);

	// Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
	if ( $tag_list ) {
		$utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'constantin' );
	} elseif ( $categories_list ) {
		$utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'constantin' );
	} else {
		$utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'constantin' );
	}

	printf(
		$utility_text,
		$categories_list,
		$tag_list,
		$date,
		$author
	);
}
endif;

/********************************
***** CUSTOMIZAÇÃO SO TEMA ******
*********************************/

function constantin_customize_preview_js() {
	wp_enqueue_script( 'constantin-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20120827', true );
}
add_action( 'customize_preview_init', 'constantin_customize_preview_js' );


