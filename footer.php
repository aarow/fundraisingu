<footer id="main-footer" class="clearfix">
		<div class="wrapper">
			<div id="map-usa">
			</div>
		
		
		
			<div id="footer-widgets" class="clearfix">
				<ul class="container_12">
					<?php dynamic_sidebar('Sidebar 2'); ?>
				</ul>
			</div>
			<nav id="footer-nav" class="">
				<ul class="">
					<?php wp_list_pages('title_li=&depth=1');	?>
				</ul>
			</nav>
					
			<div id="copyright" class="container_12 clearfix">
				<p class="grid_12">
					&#169;2012 Fundraising University &#8226; P.O. Box 540314, Omaha, NE 68154 &#8226; 1.800.217.1962 (main) &#8226; 1.800.854.7699 (fax)	span		
				</p>
			</div>
			
		</div>
	</footer>
</div> <!-- end of #container -->

<div class="abenity_ribbon">
	<a href="https://www.abenity.com/FundraisingU/register?registration_code=RC402" target="_blank" class="abenity_ribbon_link">Go to Abenity</a>
</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.vector-map/jquery.vector-map.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.vector-map/jquery.usa-en.js"></script>

<!-- scripts concatenated and minified via ant build script-->
<script src="<?php bloginfo("stylesheet_directory");?>/js/plugins.js"></script>
<script src="<?php bloginfo("stylesheet_directory");?>/js/script.js"></script>
<!-- end concatenated and minified scripts-->

<!--[if lt IE 7 ]>
<script src="<?php bloginfo("stylesheet_directory");?>/js/libs/dd_belatedpng.js"></script>
<script> DD_belatedPNG.fix('img, .png_bg'); </script>
<![endif]-->

<?php wp_footer(); ?>


<script>

//<!-- change the UA-XXXXX-X to be your site's ID -->
var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
(function(d, t) {
var g = d.createElement(t),
s = d.getElementsByTagName(t)[0];
g.async = true;
g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
s.parentNode.insertBefore(g, s);
})(document, 'script');


</script>
</body>
</html>