<?php
/*
Template Name: PHP Test
*/
?>

<?php echo 1?>

<div>
大雪压青松，<br>
青松挺且直。<br>
要知松高洁，<br>
待到雪化时。
</div>

<h2>home_url</h2>
<p>返回站点路径：相当于后台设置->常规中的“站点地址（URL）”： <?php echo home_url()?></p>

<h2>site_url</h2>
<p><?php echo site_url();?></p>
<h2>admin_url</h2>
<p><?php echo admin_url();?></p>
<h2>content_url</h2>
<p><?php echo content_url();?></p>
<h2>includes_url</h2>
<p><?php echo includes_url();?></p>
<h2>wp_upload_dir</h2>
<p><?php echo wp_upload_dir();?></p>
<h2>get_theme_root_uri</h2>
<p><?php echo get_theme_root_uri();?></p>
<h2>get_theme_root</h2>
<p><?php echo get_theme_root();?></p>
<h2>get_theme_roots</h2>
<p><?php echo get_theme_roots();?></p>
<h2>get_stylesheet_directory</h2>
<p><?php echo get_stylesheet_directory();?></p>
<h2>get_template</h2>
<p><?php echo get_template();?></p>