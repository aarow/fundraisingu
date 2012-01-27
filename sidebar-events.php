<aside id="right-sidebar" class="grid_3 omega">
	<h3 class="sidebar-header"><a href="index.php?page_id=26">Events</a></h3>
	<?php 
		//get_sidebar('Sidebar 1'); 
		em_events( array('limit' => 2,
			'format_header' => '<ul class="sidebar-events-list shadow-box-container">',
			'format' => '
						<li class="shadow-box">
							<a href="#_EVENTURL">
								<div class="sidebar-event-date">
									<span class="sidebar-event-month">#M</span>
									<span class="sidebar-event-day">#d</span>
									<!-- #_EVENTDATES -->
								</div>
								<div class="sidebar-event-thumb">#_EVENTIMAGE{100,100}</div>
								<div class="sidebar-event-link">#_EVENTNAME</div>
							</a>
						</li>',
			'format_footer' => '</ul'
		));
	
	?>
</aside>
