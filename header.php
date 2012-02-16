<!doctype html>  

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
	

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	<title>
		<?php
	
		   global $page, $paged;
		
		   wp_title( '|', true, 'right' );
		
		   bloginfo( 'name' );
		
		   $site_description = get_bloginfo( 'description', 'display' );
		   
		   if ( $site_description && 
		   		( is_home() || is_front_page() ) )
		       		echo " - $site_description";
		?>
	</title>
	<meta name="description" content="">
	<meta name="author" content="">
	
	<meta name="viewport" content="width=960"; initial-scale=1.0">
	
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		
	
	<?php wp_head(); ?>
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />

	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	
	
	<!-- fancybox -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/fancybox/jquery.fancybox.css?v=2.0.4" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fancybox/jquery.fancybox.pack.js?v=2.0.4"></script>
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr.latest.js"></script>
	
	<!--[if lt IE 9]>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/libs/mootools-core-1.4.3.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/libs/selectivizr-min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" />
	<![endif]-->
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/jquery.vector-map/jquery.vector-map.css" />
	
	<script type="text/javascript">
		var templateDir = "<?php bloginfo('template_directory') ?>";
	</script>
	
</head>

<body>
<div id="container">
	<header id="main-header" class="clearfix">
		<div class="wrapper">
			<h1>
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
					<img id="main-logo" src="<?php echo get_bloginfo('template_directory'); ?>/img/logo-header.png">
				</a>
			</h1>
					
			<nav id="main-nav">
				<ul>
					<?php wp_list_pages('title_li=&depth=1&exclude=26,27,28,29,
						144, 166,174');	?>
				</ul>
			</nav>
		</div>
		<span class="clear"></span>
	</header>
