<!-- 侧边栏 -->
<div id="sidebar">
    <ul>
        <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar()): else: ?>

        <!-- 搜索框 -->
        <li id="search">
            <h2>搜索</h2>
            <?php include(TEMPLATEPATH.'/searchform.php'); ?>
        </>
        <li id="calendar">
            <h2>日历</h2>
            <?php get_calendar(); ?>
        </li>
        <li>
            <h2>分类：</h2>
            <ul>
                <!-- 分类目录 -->
                <?php wp_list_categories('show_count=1'); ?>
            </ul>
        </li>
        <li>
            <h2>归档</h2>
            <ul>
                <!-- 归档列表 -->
                <?php wp_get_archives('show_post_count=1'); ?>
            </ul>
        </li>
        <li>
            <h2>标签云</h2>
            <p><?php wp_tag_cloud('smallest=8&largest=22'); ?></p>
        </li>
        <li>
            <h2>最新文章</h2>
            <ul>
                <?php
                    $posts = get_posts('numberposts=6&orderby=post_date');
                    foreach($posts as $post) {
                        setup_postdata($post);
                        echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                    }
                    $post = $posts[0];
                ?>
            </ul>
        </li>
        <li>
            <h2>友情链接</h2>
            <ul>
               <!-- 友情链接列表 -->
               <?php get_links_list(); ?>
            </ul>
        </li>
        <li>
            <h2>功能</h2>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </li>

        <?php endif; ?>
    </ul>
</div>
