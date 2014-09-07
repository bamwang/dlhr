<?php $options = get_option('mh_options'); 
$pdate = types_render_field("pdate");
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="wrapper clearfix">
	<div class="content <?php mh_content_class(); ?>"><?php 
		mh_before_post_content();
		if (is_attachment()) {
			get_template_part('content', 'attachment');	
		} else {
			get_template_part('content', get_post_format());
		}
		echo $pdata;
		mh_after_post_content();
		endwhile;
		//comments_template();
		endif; 		
		?>
	</div>
	<aside class="sidebar <?php mh_sb_class(); ?>">
    	<?php dynamic_sidebar('sidebar'); ?>     
	</aside>
</div> 
<?php get_footer(); ?>