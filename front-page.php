<div class="row no_margin">
	<div class="container">
		<div class="carousel col-md-pull-2"> 

		    <!-- Carousel
		    ================================================== -->
		    <div id="myCarousel" class="slide">

		<div class="carousel-inner">
				 
			<!-- // for demo only -->	
				<div class="item active"><!-- don't forget "active" -->
				<!-- pasted -->
							
								<div class="s_image">
									<img src="http://placehold.it/1140x400"/>
								</div>
								
								<div class="container">
									<div class="carousel-caption">
										<div class="s_image-tex">
											<h1>The Evolution of Telehealth:<br/>Predictions for 2014 and Beyond</h1>
											<h4>Sharam Partovi, M.D.,Emerge, MD Founder</h4>
											<a href=""><h6>Read the Entire Article in Becker's Hospital Review</h6></a>
										</div>
									</div>
								</div>
							
				<!-- /pasted -->	
				</div>
		

			
			<!-- // for demo only -->	
				<div class="item">
				<!-- pasted -->
							
								<div class="s_image">
									<img src="http://placehold.it/1140x400"/>
								</div>
								
								<div class="container">
									<div class="carousel-caption">
										<div class="s_image-tex">
											<h1>The Evolution of Telehealth:<br/>Predictions for 2014 and Beyond</h1>
											<h4>Sharam Partovi, M.D.,Emerge, MD Founder</h4>
											<a href=""><h6>Read the Entire Article in Becker's Hospital Review</h6></a>
										</div>
									</div>
								</div>
							
				<!-- /pasted -->	
				</div>

						  
				  
			<?php  /* Production code. 
			$c = 0;

			query_posts('cat=3');
			while (have_posts()) : the_post(); 

			$class_a = '';
			$c++;

			if ( $c == 1 ) $class_a .= ' active';

			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'slider-img');
			?>
			
			<div class="item <?php echo $class_a; ?>">
			  <img src="<?php echo $large_image_url[0] ?>" alt="" />
			  <div class="container">
			    <div class="carousel-caption">
					<h1 class="cc"><?php the_title(); ?></h1>
			    </div>
			  </div>
			</div>

<?php endwhile; ?>

<?php wp_reset_query(); */ ?>
		      </div>
		      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
		    </div><!-- /.carousel -->
		</div>

		
	</div>
</div> <!-- row -->
<div class="row no_margin sub_slide">
	<div class="container">

		<div class=""></div>
		
	</div>

</div>

<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
