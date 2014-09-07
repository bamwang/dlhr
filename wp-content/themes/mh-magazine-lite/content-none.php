<?php /** The template for displaying a "No posts found" message. */ ?>
<div class="entry sb-widget">
<?php if (is_search()) { ?>
	<div class="box alert">
		<p><?php echo __('对不起，未找到所搜索的内容。请尝试其他关键词。', 'mh'); ?></p>
	</div>
<?php } else { ?>
	<div class="box alert">
		<p><?php echo __('对不起，未找到相关内容。请尝试搜索。', 'mh'); ?></p>
	</div>
<?php } ?>
<h4 class="widget-title"><?php _e('搜索', 'mh'); ?></h4>
<?php get_search_form(); ?>
</div>
<div class="404-recent-articles home-wide"><?php
	$instance = array('title' => __('最新文章', 'mh'), 'postcount' => '6', 'sticky' => 1);
	$args = array('before_widget' => '<div class="sb-widget">', 'after_widget' => '</div>', 'before_title' => '<h4 class="widget-title">', 'after_title' => '</h4>');
	the_widget('mh_custom_posts_widget', $instance , $args); ?>
</div>