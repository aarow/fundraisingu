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
						<h2><?php print_custom_field('member_name'); ?></h2>
					</header>				
					<div class="the_content grid_9">
						<div class="member_picture">
							<img src="<?php print_custom_field('member_picture:to_image_src'); ?>" class="shadow-box" />
						</div>
						
						<div class="member_info">
							<div class="member_name">
								<?php print_custom_field('member_name'); ?>
							</div>
							<div class="member_title">
								<?php print_custom_field('member_title'); ?>
							</div>
							<div class="member_phone">
								<?php print_custom_field('member_phone'); ?>
							</div>
							<div class="member_email">
								<a href="mailto:<?php print_custom_field('member_email'); ?>">
									<?php print_custom_field('member_email'); ?>
								</a>
							</div>
							<div class="memberprofile">
								<?php print_custom_field('memberprofile'); ?>
							</div>
							<div class="memberprofile">
								<?php print_custom_field('member_picture_extra'); ?>
							</div>
						</div>
					</div>
				</article>
			<?php endwhile; // end of the loop. ?>
		</div>				
		<?php get_template_part( 'sidebar', 'events' ); ?>
	</div>
</div>

<?php get_footer(); ?>