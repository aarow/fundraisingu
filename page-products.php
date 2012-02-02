<?php
/**
 * Template Name: Products Page
 */
 
get_header(); ?>

<div id="main" class="main clearfix">
	<div class="wrapper container_12">
		<div class="">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
						<?php if ( !(is_front_page()) ) { ?>
							<h2><span><?php the_title(); ?></span></h2>
						<?php } ?>
					</header>			
						<div class="grid_6 push_3">
							<?php the_content(); ?>
							<div class="calculator-box clearfix box">
								<div class="calculator-desc">
									<p>Enter the number of students in your group in the box to calculate how much profit you could make with any fundraiser:</p>
								</div>
								<div class="calculator-form">
									<form name="myform" >
										<p>
											<input type="text" name="iput" id="calculator-input" value="10" /> 
										= $<span id="moneyraised">1,500</span>
										</p>
										<p>
											<a class="calculator-button button" href="#">Calculate</a>
										</p>
									</form>
								</div>
							</div>
						</div>
						<div class="grid_3 pull_6">
							<h3 class="sidebar-header">Products</h3>
						
							<ul class="product_list shadow-box-container">
								<?php
									$args = array( 
										'post_type' => 'product',
										'order'		=> 'ASC', 
										'orderby' 	=> 'sort_index',
										'numberposts' => -1
									);
									$postslist = get_posts( $args );
									foreach ($postslist as $post) :  setup_postdata($post); 
								?> 
									<li class="shadow-box bubbleInfo ">
										<a href="<?php print get_permalink(); ?>" class="product_list_anchor trigger" >
											<img class="product_list_image" src="<?php print_custom_field('product_image_thumbnail'); ?>" />
										</a>
										<div class="popup">
											<span>
												<?php print_custom_field('product_name'); ?>
											</span>
										</div>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>			
					</article>
				
			<?php endwhile; ?>
				
		<?php get_template_part( 'sidebar', 'events' ); ?>
		</div>
	</div>
</div>

<script type="text/javascript">		
	$('.calculator-button').click(function() {
		var dollars = 0;
		var students = $('#calculator-input').val();
		//test integer and multiply
		if((parseFloat(students) == parseInt(students)) && !isNaN(students)){
		 	var dollars = 150 * students;
		 	dollars = addCommas(dollars);	
		}
		$('#moneyraised').html(dollars);
		return false;
	});
	
	function addCommas(nStr)
	{
		nStr += '';
		x = nStr.split('.');
		x1 = x[0];
		x2 = x.length > 1 ? '.' + x[1] : '';
		var rgx = /(\d+)(\d{3})/;
		while (rgx.test(x1)) {
			x1 = x1.replace(rgx, '$1' + ',' + '$2');
		}
		return x1 + x2;
	}
</script>

<?php get_footer(); ?>