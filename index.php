<?php get_header(); ?>

<div class="content">

	<?php get_template_part('inc/page-title'); ?>

	<div class="pad group">
		
		<?php get_template_part('inc/featured'); ?>
		
		<?php if ( have_posts() ) : $post = $posts[0]; $c=0; ?>
			
			<?php if ( ot_get_option('blog-standard') == 'on' ): ?>
				<?php while ( have_posts() ): the_post(); ?>
					
					<?php
						if ( $wp_query->post_count > 1 ) {
							$c++; 
							if( !$paged && $c == 1) echo '<div class="post-row">'; 
						}
					?>			
					<?php get_template_part('content-standard'); ?>
					<?php 
						if( !$paged && $c == 2 ) echo '</div>';
					?>
				<?php endwhile; ?>
			<?php else: ?>
			<div class="post-list group">
				<?php $i = 1; echo '<div class="post-row">'; while ( have_posts() ): the_post(); ?>
					<?php get_template_part('content'); ?>
				<?php if($i % 2 == 0) { echo '</div><div class="post-row">'; } $i++; endwhile; echo '</div>'; ?>
			</div><!--/.post-list-->
			<?php endif; ?>
			
			<?php get_template_part('inc/pagination'); ?>
			
		<?php endif; ?>
		
	</div><!--/.pad-->
	
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>