<?php
/**
 * Template Name: Basic Page
 */
 
get_header(); ?>

<div id="main" class="main clearfix">
	<div class="wrapper container_12">
		<div class="grid_9">
			<?php get_template_part( 'loop', 'page' ); ?>
		</div>
		
		<aside id="right-sidebar" class="grid_3">
			<?php 
				//get_sidebar('Sidebar 1'); 
				em_events( array('limit' => 2,
					'format_header' => '<ul class="sidebar-events-list">',
					'format' => '
								<li>
									<a href="#_EVENTURL">
										<div class="sidebar-event-date">#_EVENTDATES</div>
										<div class="sidebar-event-thumb">#_EVENTIMAGE{100,100}</div>
										<div class="sidebar-event-link">#_EVENTNAME</div>
									</a>
								</li>',
					'format_footer' => '</ul'
				));
			
			?>
		</aside>
	</div>
</div>

<?php get_footer(); ?>