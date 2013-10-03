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
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery-1.9.1.min.js"></script>	


  

    <script>
    $(document).ready(function() {
      $("#owl-drpr").owlCarousel({
        navigation : true
      });
      
      $("#owl-drpr2").owlCarousel({
        navigation : true
      });
      
      
      $("#owl-drpr3").owlCarousel({
        navigation : true
      });
      
      
      $("#owl-drpr4").owlCarousel({
        navigation : true
      });
      
      
      $("#owl-drpr5").owlCarousel({
        navigation : true
      });
      
      
      $("#owl-drpr6").owlCarousel({
        navigation : true
      });
      
      
      $("#owl-drpr7").owlCarousel({
        navigation : true
      });
      
      
      
      $("#owl-drpr8").owlCarousel({
        navigation : true
      });
      
      
      
      $("#owl-drpr9").owlCarousel({
        navigation : true
      });
      
      
      
      $("#owl-drpr10").owlCarousel({
        navigation : true
      });
      
      
      $("#owl-drpr11").owlCarousel({
        navigation : true
      });
      
      
      $("#owl-drpr12").owlCarousel({
        navigation : true
      });
      
      
      
    });

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
						<?php get_sidebar(); ?>
						<ul class="nav">
							<li><a href="#"><i class="search"></i>SEARCH</a></li>
							<li><a href="#"><i class="buy"></i>WHERE TO BUY</a></li>
							<li><a href="#"><i class="member"></i>BECAME A MEMBER</a></li>
							<li><a href="#"><i class="contact"></i>CONTACT US</a></li>
						</ul>
					</div>

		            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
		            <div class="nav-collapse menu-edit">
						<div style="display: block; width: 610px; height: 30px; float: right; position:relative; top:15px; left:10px;">
						
						
						<ul id="navbar">


<li class="topitem"><a href="#">MEN'S COLLECTION</a>
<ul class="case">


<li class="fstitem"><a href="#">POINTERS</a>
<ul class="case2">
<div id="drpr">
<div id="owl-drpr" class="owl-carousel">
  <div class="item"><a href="http://constantim.eu/produto/po11-sc/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/pointer/pointer01.png" /><p>PO11-SC</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/po12-sc/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/pointer/pointer02.png" /><p>PO12-SC</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/po13-sc/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/pointer/pointer03.png" /><p>PO13-SC</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/po14-sc/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/pointer/pointer04.png" /><p>PO14-SC</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/po15-sc/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/pointer/pointer05.png" /><p>PO15-SC</p></a></div>
</div>
</div><!-- /case -->
</ul><!-- /the megamenu dropdown -->
</li><!-- close the drop LI -->



<li class="fstitem"><a href="#">BOSS</a>
<ul class="case2">
<div id="drpr">
<div id="owl-drpr2" class="owl-carousel">
  <div class="item"><a href="http://constantim.eu/produto/bs11-sm/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/boss/b01.png" /><p>BS11-SM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/bs12-sm/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/boss/b02.png" /><p>BS12-SM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/bs13-sm/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/boss/b03.png" /><p>BS13-SM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/bs14-sm/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/boss/b04.png" /><p>BS14-SM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/bs15-sm/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/boss/b05.png" /><p>BS15-SM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/bs16-sm/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/boss/b06.png" /><p>BS16-SM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/bs17-sm/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/boss/b07.png" /><p>BS17-SM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/bs18-sm/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/boss/b08.png" /><p>BS18-SM</p></a></div>
</div>
</div><!-- /case -->
</ul><!-- /the megamenu dropdown -->
</li><!-- close the drop LI -->



<li class="fstitem"><a href="#">CERAMIC</a>
<ul class="case2">
<div id="drpr">
<div id="owl-drpr3" class="owl-carousel">
  <div class="item"><a href="http://constantim.eu/produto/cm21-dc/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/ceramic/c01.png" /><p>CM21-DC</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cm22-dc/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/ceramic/c02.png" /><p>CM22-DC</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cm23-dc/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/ceramic/c03.png" /><p>CM23-DC</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cm24-dc/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/ceramic/c04.png" /><p>CM24-DC</p></a></div>
</div>
</div><!-- /case -->
</ul><!-- /the megamenu dropdown -->
</li><!-- close the drop LI -->



<li class="fstitem"><a href="#">STUDENGLAS</a>
<ul class="case2">
<div id="drpr">
<div id="owl-drpr4" class="owl-carousel">
  <div class="item"><a href="http://constantim.eu/produto/sg31-ch/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/studenglass/studenglas01.png" /><p>SG31-CH</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/sg32-ch/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/studenglass/studenglas02.png" /><p>SG32-CH</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/sg33-ch/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/studenglass/studenglas03.png" /><p>SG33-CH</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/sg34-ch/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/studenglass/04.png" /><p>SG34-CH</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/sg35-ch/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/studenglass/05.png" /><p>SG35-CH</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/sg36-ch/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/studenglass/06.png" /><p>SG36-CH</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/sg37-ch/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/studenglass/07.png" /><p>SG37-CH</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/sg38-ch/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/studenglass/08.png" /><p>SG38-CH</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/sg39-ch/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/studenglass/09.png" /><p>SG39-CH</p></a></div>
</div>
</div><!-- /case -->
</ul><!-- /the megamenu dropdown -->
</li><!-- close the drop LI -->




<li class="fstitem"><a href="#">CLASSICAL</a>
<ul class="case2">
<div id="drpr">
<div id="owl-drpr5" class="owl-carousel">
  <div class="item"><a href="http://constantim.eu/produto/cl41-mp/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/classical/classic01.png" /><p>CL41-MP</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cl42-mp/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/classical/classic02.png" /><p>CL42-MP</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cl43-mp/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/classical/classic03.png" /><p>CL43-MP</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cl44-mp/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/classical/classic04.png" /><p>CL44-MP</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cl45-mp/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/classical/classic05.png" /><p>CL45-MP</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cl46-mp/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/classical/classic06.png" /><p>CL46-MP</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cl47-mp/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/classical/classic07.png" /><p>CL47-MP</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cl48-mp/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/classical/classic08.png" /><p>CL48-MP</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cl49-mp/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/classical/classic09.png" /><p>CL49-MP</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cl491-mp/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/classical/classic10.png" /><p>CL49-MP</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cl492-mp/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/classical/classic11.png" /><p>CL491-MP</p></a></div>

</div>
</div><!-- /case -->
</ul><!-- /the megamenu dropdown -->
</li><!-- close the drop LI -->



<li class="fstitem"><a href="#">NAVIGATOR</a>
<ul class="case2">
<div id="drpr">
<div id="owl-drpr6" class="owl-carousel">
  <div class="item"><a href="http://constantim.eu/produto/na01to/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/navigator/navigator01.png" /><p>NA01-TO</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/na02to/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/navigator/navigator02.png" /><p>NA02-TO</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/na03to/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/navigator/navigator03.png" /><p>NA03-TO</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/na04to/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/navigator/navigator04.png" /><p>NA04-TO</p></a></div>
</div>
</div><!-- /case -->
</ul><!-- /the megamenu dropdown -->
</li><!-- close the drop LI -->


<li class="fstitem"><a href="#">KONIG</a>
<ul class="case2">
<div id="drpr">
<div id="owl-drpr7" class="owl-carousel">
  <div class="item"><a href="http://constantim.eu/produto/kn61-ta/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/konig/konig01.png" /><p>KN61-TA</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/kn62-ta/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/konig/konig02.png" /><p>KN62-TA</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/kn63-ta/"><img src="<?php bloginfo('template_url'); ?>/images/watches/m/konig/konig03.png" /><p>KN63-TA</p></a></div>
</div>
</div><!-- /case -->
</ul><!-- /the megamenu dropdown -->
</li><!-- close the drop LI --> 
		
 
</ul>
</li><!-- /SUPERMENU DROP END -->






<li class="topitem"><a href="#">WOMAN'S COLLECTION</a>
<ul class="case">


<li class="fstitem"><a href="#">POINTERS</a>
<ul class="case2">
<div id="drpr">
<div id="owl-drpr8" class="owl-carousel">
  <div class="item"><a href="http://constantim.eu/produto/po11-om/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/pointers/pointersf01.png" /><p>PO11-OM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/po12-om/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/pointers/pointersf02.png" /><p>PO12-OM</p></a></div>
</div>
</div><!-- /case -->
</ul><!-- /the megamenu dropdown -->
</li><!-- close the drop LI -->



<li class="fstitem"><a href="#">CERAMIC</a>
<ul class="case2">
<div id="drpr">
<div id="owl-drpr9" class="owl-carousel">
  <div class="item"><a href="http://constantim.eu/produto/cm21-xm/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/ceramic/ceramicf01.png" /><p>CM21-XM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cm22-xm/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/ceramic/ceramicf02.png" /><p>CM22-XM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cm23-xm/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/ceramic/ceramicf03.png" /><p>CM23-XM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cm24-xm/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/ceramic/ceramicf04.png" /><p>CM24-XM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cm25-xm/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/ceramic/ceramicf05.png" /><p>CM25-XM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cm26-xm/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/ceramic/ceramicf06.png" /><p>CM26-XM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cm26-xm/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/ceramic/ceramicf07.png" /><p>CM26-XM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cm27-xm/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/ceramic/ceramicf08.png" /><p>CM26-XM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/cm28-xm/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/ceramic/ceramicf09.png" /><p>CM26-XM</p></a></div>
</div>
</div><!-- /case -->
</ul><!-- /the megamenu dropdown -->
</li><!-- close the drop LI -->



<li class="fstitem"><a href="#">ELEGANCY</a>
<ul class="case2">
<div id="drpr">
<div id="owl-drpr10" class="owl-carousel">
  <div class="item"><a href="http://constantim.eu/produto/ey31-me/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/elegancy/elegancyf01.png" /><p>EY31-ME</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ey32-me/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/elegancy/elegancyf02.png" /><p>EY32-ME</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ey33-me/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/elegancy/elegancyf03.png" /><p>EY33-ME</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ey34-me/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/elegancy/elegancyf04.png" /><p>EY34-ME</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ey35-me/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/elegancy/elegancyf05.png" /><p>EY35-ME</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ey36-me/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/elegancy/elegancyf06.png" /><p>EY36-ME</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ey37-me/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/elegancy/elegancyf07.png" /><p>EY37-ME</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ey38-me/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/elegancy/elegancyf08.png" /><p>EY38-ME</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ey39-me/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/elegancy/elegancyf09.png" /><p>EY39-ME</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ey401-me/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/elegancy/elegancyf10.png" /><p>EY401-ME</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ey402-me/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/elegancy/elegancyf11.png" /><p>EY402-ME</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ey403-me/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/elegancy/elegancyf12.png" /><p>EY403-ME</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ey404-me/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/elegancy/elegancyf13.png" /><p>EY404-ME</p></a></div>

</div>
</div><!-- /case -->
</ul><!-- /the megamenu dropdown -->
</li><!-- close the drop LI -->



<li class="fstitem"><a href="#">CASTLE</a>
<ul class="case2">
<div id="drpr">
<div id="owl-drpr11" class="owl-carousel">
  <div class="item"><a href="http://constantim.eu/produto/ca51-ym/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/castle/castlef01.png" /><p>CA51-YM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ca52-ym/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/castle/castlef02.png" /><p>CA52-YM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ca53-ym/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/castle/castlef03.png" /><p>CA53-YM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ca54-ym/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/castle/castlef04.png" /><p>CA54-YM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ca55-ym/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/castle/castlef05.png" /><p>CA55-YM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ca56-ym/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/castle/castlef06.png" /><p>CA56-YM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ca57-ym/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/castle/castlef07.png" /><p>CA57-YM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ca58-ym/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/castle/castlef08.png" /><p>CA58-YM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ca59-ym/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/castle/castlef09.png" /><p>CA59-YM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ca591-ym/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/castle/castlef10.png" /><p>CA591-YM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ca592-ym/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/castle/castlef11.png" /><p>CA592-YM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ca593-ym/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/castle/castlef12.png" /><p>CA593-YM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ca594-ym/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/castle/castlef13.png" /><p>CA594-YM</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ca595-ym/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/castle/castlef16.png" /><p>CA595-YM</p></a></div>
</div>
</div><!-- /case -->
</ul><!-- /the megamenu dropdown -->
</li><!-- close the drop LI -->




<li class="fstitem"><a href="#">PRINCESS</a>
<ul class="case2">
<div id="drpr">
<div id="owl-drpr12" class="owl-carousel">
  <div class="item"><a href="http://constantim.eu/produto/ps61-mv/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/princes/princes01.png" /><p>PS61-MV</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ps62-mv/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/princes/princes02.png" /><p>PS62-MV</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ps63-mv/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/princes/princes03.png" /><p>PS63-MV</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ps64-mv/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/princes/princes04.png" /><p>PS64-MV</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ps65-mv/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/princes/princes05.png" /><p>PS65-MV</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ps66-mv/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/princes/princes06.png" /><p>PS66-MV</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ps67-mv/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/princes/princes07.png" /><p>PS67-MV</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ps68-mv/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/princes/princes08.png" /><p>PS68-MV</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ps69-mv/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/princes/princes09.png" /><p>PS69-MV</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ps691-mv/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/princes/princes10.png" /><p>PS691-MV</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ps692-mv/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/princes/princes11.png" /><p>PS692-MV</p></a></div>
  <div class="item"><a href="http://constantim.eu/produto/ps693-mv/"><img src="<?php bloginfo('template_url'); ?>/images/watches/f/princes/princes12.png" /><p>PS693-MV</p></a></div>
</div>
</div><!-- /case -->
</ul><!-- /the megamenu dropdown -->
</li><!-- close the drop LI -->




		
 
</ul>
</li><!-- /SUPERMENU DROP END -->



       
<li><a href="#">ABOUT US</a></li>
<li><a href="#">NEWS</a></li>
<li><a href="#">CUSTOMER</a></li>
</ul><!-- /end of navbar -->
						
						
						
						</div>
						
						
						
						
					</div>
	          	</div><!-- /.navbar-inner -->
	        </div><!-- /.navbar -->
	    </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->