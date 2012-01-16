<footer id="main-footer">
		<div class="wrapper">
			<div id="footer-widgets">
				<ul class=" container_12">
					<?php dynamic_sidebar('Sidebar 2'); ?>
				</ul>
			</div>
			
			<nav id="footer-nav" class="container_12">
				<ul class="grid_3">
					<?php wp_list_pages('title_li=&depth=1');	?>
				</ul>
			</nav>
					
			<div id="copyright" class="container_12">
				<p class="grid_12">
					&#169;2012 Fundraising University &#8226; P.O. Box 540314, Omaha, NE 68154 &#8226; 1.800.217.1962 (main) &#8226; 1.800.854.7699 (fax)			
				</p>
			</div>
		</div>
	</footer>
</div> <!-- end of #container -->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php bloginfo("stylesheet_directory");?>/js/libs/jquery-1.4.2.js"%3E%3C/script%3E'))</script>


<!-- scripts concatenated and minified via ant build script-->
<script src="<?php bloginfo("stylesheet_directory");?>/js/plugins.js"></script>
<script src="<?php bloginfo("stylesheet_directory");?>/js/script.js"></script>
<!-- end concatenated and minified scripts-->


<!--[if lt IE 7 ]>
<script src="<?php bloginfo("stylesheet_directory");?>/js/libs/dd_belatedpng.js"></script>
<script> DD_belatedPNG.fix('img, .png_bg'); </script>
<![endif]-->

<!-- yui profiler and profileviewer - remove for production -->
<script src="<?php bloginfo("stylesheet_directory");?>/js/profiling/yahoo-profiling.min.js"></script>
<script src="<?php bloginfo("stylesheet_directory");?>/js/profiling/config.js"></script>
<!-- end profiling code -->

<?php wp_footer(); ?>

<!-- change the UA-XXXXX-X to be your site's ID -->
<script>
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