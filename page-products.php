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
							<div class="calculator-box clearfix">
								<div class="calculator-desc">
									<p>Enter the number of students in your group in the box below to calculate how much profit you could make with any fundraiser:</p>
								</div>
								<div class="calculator-form">
									<form name="myform" >
										<p>
											<input type="text" name="iput" id="calculator-input" /> 
										= $<span id="moneyraised">50000</span>
										</p>
										<p>
											<input class="calculator-button" type="button" value="Calculate" onclick="document.getElementById('moneyraised').innerHTML= calcDough(document.myform.iput.value);" />
										</p>
									</form>
									<script type="text/javascript">
										function calcDough(input) {
											return input * 150.00;
										}
									</script>
								</div>
							</div>
						</div>
						<div class="products grid_3 pull_6">
							<ul class="product_list shadow-box-container">
								<?php
									$args = array( 'post_type' => 'product', 'order'=> 'ASC', 'orderby' => 'sort_index', );
									$postslist = get_posts( $args );
									foreach ($postslist as $post) :  setup_postdata($post); 
								?> 
									<li class="shadow-box">
										<a href="<?php print get_permalink(); ?>">
											<img class="product_list_image" 
											title="<?php print_custom_field('product_name'); ?>"
											src="<?php print_custom_field('product_image_thumbnail');
											?>" />
										</a>
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
	//calculate dollars based upon number of students
	function calcDough(input) {
		return input * 150.00;
	}
</script>

<?php get_footer(); ?>