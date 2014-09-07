<!DOCTYPE html>
<html class="no-js<?php mh_html_class(); ?>" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title('|', true, 'right'); ?></title>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container">
<header class="header-wrap">
	<?php mh_logo(); ?>
	<nav class="top-nav clearfix">
		<div>
		<form role="search" method="get" id="topsearchform" action="<?php echo esc_url(home_url()); ?>/">
		    <fieldset>
			<input type="text" placeholder="<?php _e('输入后按回车键搜索', 'mh'); ?>" onfocus="if (this.value == '<?php _e('To search, type and hit enter', 'mh'); ?>') this.value = ''" name="s" id="s" />
			<input type="submit" id="searchsubmit" value="搜索" />
		    </fieldset>
		</form>
		<!-- <a href='javascropt:window.sidebar.addPanel(【タイトル】,【URL】,"");'>收藏本站</a> -->
		</div>
		<?php wp_nav_menu(array('theme_location' => 'top_nav')); ?>
	</nav><nav class="main-nav clearfix">
		<?php wp_nav_menu(array('theme_location' => 'main_nav')); ?>
	</nav>
</header>