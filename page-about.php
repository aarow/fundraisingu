<?php
/**
 * Template Name: About Page
 */
 
get_header(); ?>

<div id="main" class="main clearfix">
	<div class="wrapper container_12">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>
				<?php if ( !(is_front_page()) ) { ?>
					<h2><?php the_title(); ?></h2>
				<?php } ?>
			</header>			
			
			<div class="the_content about grid_6 push_3 alpha">
				<?php the_content(); ?>
			</div>
			
			<div class="team grid_3 pull_6">
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
								<img src="<?php print_custom_field('member_picture:to_image_src'); ?>" />
								<span><?php print_custom_field('member_name'); ?></span>
							</a>
						</div>
						<div class="member_list_item_body">
							<div class="member_list_item_title"><?php print_custom_field('member_title'); ?></div>
							<div class="member_list_item_phone"><?php print_custom_field('member_phone'); ?></div>
							<div class="member_list_item_email">
								<a href="mailto:<?php print_custom_field('member_email'); ?>" >
									<?php print_custom_field('member_email'); ?>
								</a>
							</div>										
							<div class="member_list_item_profile">
								<a href="<?php print get_permalink(); ?>" class="" >View Profile</a>
							</div>
						</div>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</article>
		<?php get_template_part( 'sidebar', 'events' ); ?>
		<?php endwhile; ?>
	</div>	
</div>
<script type="text/javascript">
	$('.member_list_item_header').click(function(){
		$('.member_list_item_header')
			.removeClass('member_list_item_header_active');
		$('.member_list_item_body').hide();
		$(this).addClass('member_list_item_header_active').next().toggle();
		return false;
	
});
</script>

<span class="clear"></span>
<?php get_footer(); ?>