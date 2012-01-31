<footer id="main-footer" class="clearfix">
		<div class="wrapper">
			<div id="footer-widgets" class="clearfix">
				<ul class="container_12">
					<?php dynamic_sidebar('Sidebar 2'); ?>
				</ul>
			</div>
			<nav id="footer-nav" class="">
				<h3>Site Links</h3>
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

<!-- scripts concatenated and minified via ant build script-->
<script src="<?php bloginfo("stylesheet_directory");?>/js/plugins.js"></script>
<script src="<?php bloginfo("stylesheet_directory");?>/js/script.js"></script>
<!-- end concatenated and minified scripts-->

<script type="text/javascript">
	maxHeight = parseFloat($('article header h2').css('max-height'));

	$('article header h2').each(function () {
        while ($(this).outerHeight() > maxHeight) {
            var currentFontSize = $(this).css("font-size");
            $(this).css("font-size", (parseFloat(currentFontSize) - 1) + "px");
        }
	});
</script>


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