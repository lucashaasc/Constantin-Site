<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery-1.8.1.min.js"></script>	
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.nicescroll.min.js"></script>
<script>
	$(document).ready(
		function() {
			$("html").niceScroll();
		}
	);
</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
	    <div class="container">

	        <div class="navbar navbar-inverse">
	          	<div class="navbar-inner">
	            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
		            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>
		            <div class="logo">
			            <?php $header_image = get_header_image();
						if ( ! empty( $header_image ) ) : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
						<?php endif; ?>
					</div>
					
					<div class="nav-collapse menu-member">
						<ul class="nav">
							<li><a href="#"><i class="search"></i>SEARCH</a></li>
							<li><a href="#"><i class="buy"></i>WHERE TO BUY</a></li>
							<li><a href="#"><i class="member"></i>BECAME A MEMBER</a></li>
							<li><a href="#"><i class="contact"></i>CONTACT US</a></li>
						</ul>
					</div>

		            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
		            <div class="nav-collapse menu-edit">
						<?php wp_nav_menu( array( 
							'container' => 'div',
							'container_class' => 'nav-collapse collapse',
							'theme_location' => 'primary',
							'menu_class' => 'nav',
							'before' => '<span></span>',
							'link_after' => '',
							'walker' => new Bootstrap_Walker(),									
							) );
						?>
					</div>
	          	</div><!-- /.navbar-inner -->
	        </div><!-- /.navbar -->
	    </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->