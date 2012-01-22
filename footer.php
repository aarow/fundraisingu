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
					&#169;2012 Fundraising University &#8226; P.O. Box 540314, Omaha, NE 68154 &#8226; 1.800.217.1962 (main) &#8226; 1.800.854.7699 (fax)			
				</p>
			</div>
		</div>
	</footer>
</div> <!-- end of #container -->

<!-- scripts concatenated and minified via ant build script-->
<script src="<?php bloginfo("stylesheet_directory");?>/js/plugins.js"></script>
<script src="<?php bloginfo("stylesheet_directory");?>/js/script.js"></script>
<!-- end concatenated and minified scripts-->

<script type="text/javascript">
	$(document).ready(function() {
		var theElement = $('article h2 span');
		
		var elementHeight = parseInt(theElement.height());
		var elementLineHeight = parseInt(theElement.css('line-height'));
		var elementLineCount = elementHeight / elementLineHeight;
		
		while(elementLineCount > 1) {
		    var currentFontSize = theElement.css('font-size');
		    var currentFontSizeNum = parseFloat(currentFontSize, 10);
		    var newFontSize = currentFontSizeNum*0.9;
		    theElement.css('font-size', newFontSize);
		
		    var elementHeight = parseInt(theElement.height());
		    var elementLineHeight = parseInt(theElement.css('line-height'));
		    var elementLineCount = elementHeight / elementLineHeight;
		}
	});
	
</script>


<!--[if lt IE 7 ]>
<script src="<?php bloginfo("stylesheet_directory");?>/js/libs/dd_belatedpng.js"></script>
<script> DD_belatedPNG.fix('img, .png_bg'); </script>
<![endif]-->

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