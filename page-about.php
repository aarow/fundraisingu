<?php
/**
 * Template Name: About Page
 */
 
get_header(); ?>

<div id="main" class="main clearfix">
	<div class="wrapper container_12">
		<div class="">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
						<?php if ( !(is_front_page()) ) { ?>
							<h2><?php the_title(); ?></h2>
						<?php } ?>
					</header>				
					<div class="the_content grid_9">
						<?php the_content(); ?>
						
						<ul class="team_member_list">
							<?php
								$args = array( 	'post_type' => 'team_member', 
												'order'=> 'ASC', 
												'orderby' => 'sort_index', 
												'numberposts' => -1 );
								$postslist = get_posts( $args );
								foreach ($postslist as $post) :  setup_postdata($post); 
							?> 
							<li>
								<div class="member_list_item_header">
									<a href="<?php print get_permalink(); ?>">
										<?php print_custom_field('member_picture:to_image_tag','thumbnail'); ?>
										<?php print_custom_field('member_name'); ?>
									</a>
								</div>
								<div class="member_list_item_body">
									<div class="member_list_item_title"><?php print_custom_field('member_title'); ?></div>
									<div class="member_list_item_phone"><?php print_custom_field('member_phone'); ?></div>
									<div class="member_list_item_email"><?php print_custom_field('member_email'); ?></div>
												
									<?php 
										/* produce exerpt of profile */
										
										$max_word_cnt = 100;
										$theLink = get_permalink();
										$output = get_custom_field('memberprofile');
										$output = preg_replace('/\s\s+/', ' ', $output);
										$output = strip_tags($output);
										$words_array = explode(' ', $output);
										$output = implode(' ', array_slice($words_array, 0, $max_word_cnt - 1)) . '<a href="' . $theLink . '">[&#0133;]</a>';
									?>
										
								<div class="member_list_item_profile">
									<?php 
										print $output;
										//print_custom_field('memberprofile:excerpt', 100); 
									?>
								</div>
								
							</div>
						</li>
					<?php endforeach; ?>
					</ul>
					</div>			
					<footer>
						<?php edit_post_link( __( 'Edit' ), '<p>', '</p>' ); ?>
					</footer>
				</article>
				
			<?php endwhile; ?>
				
		<?php get_template_part( 'sidebar', 'events' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>