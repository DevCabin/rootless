<footer class="content-info" role="contentinfo" id="footer_main">
	<div class="container">
	  <div class="row">
	    <div class="col-lg-12">
		<div class="col-md-4">
	       	 <?php dynamic_sidebar('sidebar-footer'); ?>
		</div>
		<div class="col-md-4">
		<?php dynamic_sidebar('sidebar-footer-2'); ?>
		</div>
		<div class="col-md-4">		
		<?php dynamic_sidebar('sidebar-footer-3'); ?>
		</div>
		<div class="col-md-12">
			 <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
		</div>
	     
	    </div>
	  </div>
	</div>
</footer>

<script>
/* // To replace placeholder text in sidebar search field
$(document).ready(function(){ 
  $('.sidebar').find(".search-field").each(function(ev)
  {
      if(!$(this).val()) { 
     $(this).attr("placeholder", "");
  }
  });
});
*/
$(function(){
    $('.carousel').carousel({
      interval: 2000
    });
});
</script>

<?php wp_footer(); ?>
