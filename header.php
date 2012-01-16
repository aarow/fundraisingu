<!doctype html>  

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
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
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_directory");?>/css/style.css?v=2">
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_directory");?>/style.css">
	<?php wp_head(); ?>
</head>

<body>
<div id="container">
	<header id="main-header">
		<div class="wrapper">
			<h1>
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
					<img id="main-logo" src="<?php echo get_bloginfo('template_directory'); ?>/images/main-logo.png">
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
