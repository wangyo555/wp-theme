<!-- 根据不同的页面添加不同的描述和关键词 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="wordpress, theme">
    
    <title>
        <?php if(is_home()){
            bloginfo('name'); echo ' - '; bloginfo('description');
        } elseif(is_single() || is_page()){
            single_post_title(); echo ' - '; bloginfo('name');
        } elseif(is_search()){
            echo '搜索结果 - '; bloginfo('name');
        } elseif(is_404()){
            echo '页面未找到！';
        } else{
            wp_title('',true);echo ' - '; bloginfo('name');
        }
        ?> 
    </title>

    <!-- 样式文件 -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!-- 添加订阅 -->
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有文章" href="<?php echo get_bloginfo('rss2_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有评论" href="<?php bloginfo('comments_rss2_url'); ?>"> 

    <?php wp_head(); ?>
</head>

<!-- 提高运行效率 -->
<?php flush(); ?>

<body>

    <div id="header">
        <h1>
            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </h1>
        <p><?php bloginfo('description'); ?></p>
        <!-- 顶部菜单导航 -->
        <ul id="navigation" class="clearfix">
            <?php wp_list_pages('depth=2&title_li=0&sort_column=menu_order'); ?>
            <!-- <li <?php if (is_home()) { echo 'class="current"';} ?>><a title="<?php bloginfo('name'); ?>"  href="<?php echo get_option('home'); ?>/">主页</a></li> -->
</ul>
        </ul>
    </div>
    