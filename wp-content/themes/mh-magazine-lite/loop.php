<?php /* Loop Template used for index/archive/search */
$options = get_option('mh_options'); 
$excerpt_length = empty($options['excerpt_length']) ? '125' : $options['excerpt_length'];
$pdate = types_render_field("pdate");
$department = types_render_field("department");
?>
<article <?php post_class(); ?>>
	<div class="loop-wrap clearfix">		
		<!-- 
		<div class="loop-thumb">
			<a href="<?php the_permalink(); ?>">
				<?php if (has_post_thumbnail()) { the_post_thumbnail('loop'); } else { echo '<img src="' . get_template_directory_uri() . '/images/noimage_174x131.png' . '" alt="No Picture" />'; } ?>
			</a>
		</div>
		 -->
		<header class="loop-data">
			<h3 class="loop-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<p class="meta">
				<?php if( empty($pdate) ):?>
					<?php $date = get_the_date(); echo $date; ?>
				<?php else: ?>
					<span class="department"><?php echo $department; ?>发布</span>
					<span class="pdate"><?php echo $pdate; ?>生效</span>
				<?php endif;?>
				<?php //comments_number(__('0 Comments', 'mh'), __('1 Comment', 'mh'), __('% Comments', 'mh')); ?>
				</p>
		</header>
		<?php //mh_excerpt($excerpt_length); ?>
	</div>
</article>		