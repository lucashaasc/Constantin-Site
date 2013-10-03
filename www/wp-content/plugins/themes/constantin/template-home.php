<?php 
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
			<?php echo do_shortcode('[mega-slider id="11"/]'); ?>
		</div>
	</div>

	<div class="container titulo-conteudo">
		<div class="row">
			<div class="span8">
				<h3>NEWS</h3>
			</div>
			<div class="span4">
				<h3>BECAME A MEMBER</h3>
				<small>of our special club</small>
			</div>
		</div>
	</div>

	<div class="container conteudo-home">
		<div class="row">
			<div class="span12">
				<ul class="thumbnails">
		            <li class="span4">
		                <div class="thumbnail">
		                	<img src="<?php bloginfo("template_url"); ?>/images/aa.png" alt="">
		                	<div class="caption">
		                    	<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
		                    	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		                    	<p><a class="btn btn-primary" href="#">READ MORE</a></p>
		                	</div>
		                </div>
		            </li>
		            <li class="span4">
		                <div class="thumbnail">
		                	<img src="<?php bloginfo("template_url"); ?>/images/bb.png" alt="">
		                	<div class="caption">
		                    	<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
		                    	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		                    	<p><a class="btn btn-primary" href="#">READ MORE</a></p>
		                	</div>
		                </div>
		            </li>
		            <li class="span4">
	                	<div class="caption">
	                		<form action="">
		                    	<input type="text" placeholder="name">
		                    	<input type="text" placeholder="email">
		                    	<p><a class="btn btn-primary" href="#">JOIN</a></p>
	                    	</form>
	                  	</div>

		                <h3>WHERE TO BUY</h3>
		                <img src="<?php bloginfo("template_url"); ?>/images/cc.png" alt="">
		            </li>
	            </ul>
	        </div>
		</div>
	</div>

	<div class="container-fluid video-conteudo">
		<div class="container">
			<div class="row">
				<div class="span7">
					<iframe width="551.9" height="340" src="//www.youtube.com/embed/yaBNjTtCxd4" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="span5 text-video">
					<h4><span class="red">GERMAN</span> <span class="black">TECHNOLOGY</span> <span class="white-up">SWISS</span> <span class="red-up">MOVIMENT</span></h4>
					<p>
						Phasellus luctus libero venenatis lobortis posuere. Vivamus lobortis venenatis fringilla. Vestibulum pellentesque ipsum et ligula auctor, in tincidunt dui imperdiet. Sed quis mattis massa, ut aliquet dolor. Nulla tortor elit, ultrices ut tempor sed, eleifend in lacus. Nunc ut dolor vulputate urna ullamcorper vestibulum quis at lorem. Nulla malesuada felis aliquam sodales ultricies.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid since-conteudo">
		<div class="container">
			<div class="row">
				<div class="span12">
					<h4>1892 SEAL OF QUALITY <br/><span class="small-since">SECURITY AND TECHNOLOGY</span></h4>
					<p>
						Our watches bring quality seal 1892. This means that, where do you find these numbers, you're sure to have complete control over time thanks to the certification of the highest quality standards.
					</p>
					<a class="btn btn-primary" href="#">KNOW MORE</a>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>