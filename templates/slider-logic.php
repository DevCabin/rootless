<div class="row top_head no_margin">
	<div class="container">
		<div class="col-lg-12">
			<div class="col-md-4">
	 			  <a title="<?php bloginfo('name'); ?>" class="brand" href="<?php echo home_url(); ?>/">
	<!--img src="logo.png" alt="Logo for <?php bloginfo('name'); ?>" style="" /-->
				  </a>
			</div>
			<div class="col-md-4"><!-- empty --></div>
			<div class="col-md-4 searchform"><?php get_search_form(); ?></div>
		</div>
	</div>
</div>
<?php if (is_home()||is_front_page()) { ?>

<div class="row no_margin">
	<div class="container">
		<div class="col-md-12">

		    <!-- Carousel
		    ================================================== -->
		    <div id="myCarousel" class="carousel slide">
			<ol class="carousel-indicators">
			  <li data-target="#" data-slide-to="0" class="active"></li>
			  <li data-target="#" data-slide-to="1"></li>
			  <!--li data-target="#" data-slide-to="2"></li-->
			</ol>

		      <div class="carousel-inner">
				 
			<!-- // for demo only -->	
			<div class="item active"><!-- don't forget "active" -->
			  <img src="http://placehold.it/1170x450&text=Slide One" alt="">
			  <div class="container">
			    <div class="carousel-caption">
				<h1 class="cc">Twice a headline.</h1>
			    </div>
			  </div>
			</div>
			<div class="item">
			  <img src="http://placehold.it/1170x450&text=Slide Two" alt="">
			  <div class="container">
			   <div class="carousel-caption">
				<h1 class="cc">Thrice a headline.</h1>
			    </div>
			  </div>
			</div>
						  
				  
			<?php  /* Production code. 
			$c = 0;

			query_posts('cat=27');
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

		<!-- Demo Styles only -->

		<div class="row">
					
				<div class="col-md-4 col-xs-6 thumb">
				  <a title="woot" data-toggle="lightbox" data-type="image" class="thumbnail" href="http://masoncity.724webdevelopment.com/wp-content/uploads/2012-03-04-09.11.19-650x487.jpg">
					  <img width="300" height="225" src="http://masoncity.724webdevelopment.com/wp-content/uploads/2012-03-04-09.11.19-300x225.jpg" class="attachment-category-thumb wp-post-image" alt="SAMSUNG">				  </a>
				</div>
					
				<div class="col-md-4 col-xs-6 thumb">
				  <a title="El Description" data-toggle="lightbox" data-type="image" class="thumbnail" href="http://masoncity.724webdevelopment.com/wp-content/uploads/2012-03-04-11.12.52-650x487.jpg">
					  <img width="300" height="225" src="http://masoncity.724webdevelopment.com/wp-content/uploads/2012-03-04-11.12.52-300x225.jpg" class="attachment-category-thumb wp-post-image" alt="Ze Pic">				  </a>
				</div>
					
				<div class="col-md-4 col-xs-6 thumb">
				  <a title="Briefly describe the image here please." data-toggle="lightbox" data-type="image" class="thumbnail" href="http://masoncity.724webdevelopment.com/wp-content/uploads/2012-03-04-09.11.31-e1388420089148.jpg">
					  <img width="300" height="225" src="http://masoncity.724webdevelopment.com/wp-content/uploads/2012-03-04-09.11.31-e1388420089148.jpg" class="attachment-category-thumb wp-post-image" alt="SAMSUNG">				  </a>
				</div>
		</div>
		
	</div>

</div>
<?php } else { /* */ } ?>

