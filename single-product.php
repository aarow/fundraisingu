<?php
/**
 * Template Name: Team Member Page
 */
 
get_header(); ?>

<div id="main" class="main clearfix">
	<div class="wrapper container_12">
		<div class="">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<article>
					<header>
						<h2><?php print_custom_field('product_name'); ?></h2>
					</header>				
					<div class="the_content grid_9">
						<ul class="product-image-list grid_6 alpha">
							<?php 
								$array_of_images = get_custom_field('product_image:to_array');					
								foreach ($array_of_images as $img_id) {
							?>
							<li>
							   	<?php $src = CCTM::filter($img_id, 'to_image_src'); ?>
								<img src="<?php print $src; ?>" />
							</li>
						<?php } ?>
						</ul>
						
						<div class="product-description grid_3 omega">
							<?php print_custom_field('product_description'); ?>
							<div class="file-container">
								<?php 
									$array_of_media = get_custom_field('product_file:to_array');
									foreach ($array_of_media as $med_id) {
									   $file = CCTM::filter($med_id, 'to_image_src');
								?>
								<a href="<?php echo $file; ?>" class="file-download <?php if(strpos($file,'.pdf')){ echo 'pdf-icon';} ?>" >Download Brochure</a>
								<?php } ?>
							</div>
						</div>>
					</div>
				</article>
			<?php endwhile; // end of the loop. ?>
		</div>				
		<?php get_template_part( 'sidebar', 'events' ); ?>
	</div>
</div>

<script type="text/javascript">
	$('.product-image-list')
	
</script>


<?php get_footer(); ?>