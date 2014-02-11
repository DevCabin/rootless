<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>


<?php if ( in_category( 'gallery' )) { ?>

      <div class="row">
			<?php while (have_posts()) : the_post(); 
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'category-full');
			?>
		
				<div class="col-md-4 col-xs-6 thumb">
				  <a title="<?php echo get_the_content();?>" data-toggle="lightbox" data-type="image" class="thumbnail" href="<?php echo $large_image_url[0] ?>">
					  <?php the_post_thumbnail('category-thumb');?>
				  </a>
				</div>
			<?php endwhile; ?>
      </div>
   
<?php } else { ?>
	
<?php 
global $wp_query;
			query_posts(
				array_merge(
					array('cat' => -27), // have to exclude slides!
					$wp_query->query
				)
			);
			
while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_format()); ?>
<?php endwhile; ?>
	
<?php } ?>


<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
