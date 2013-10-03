<div class="container-fluid rodape-bg">
	<div class="container">
		<div class="row">
			<div class="span2 logo-rodape"><img src="<?php bloginfo("template_url"); ?>/images/logo-rodape.png" alt=""></div>
			<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="span12 f-rodape">
			<small>Copyright | © 2013 Constantim.</small>
			<small><a href="http://studiospirit.com.br">STUDIO SPIRIT</a></small>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>