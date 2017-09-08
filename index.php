<?php get_header(); ?>
    <div class="main">
        <!-- 容器 -->
        <div id="container">   
            <!-- <h2>文章列表</h2> -->
        <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                <!-- 文章 -->
                <div class="post" id="post-<?php the_ID(); ?>">

                    <!-- 标题 -->
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

                    <!-- 内容 -->
                    <div class="entry">
                        <?php the_excerpt(); ?>

                        <!-- 如果添加了More标签 -->
                        <?php
                            /* the_content('阅读全文...')*/ 
                        ?>


                        <!-- 元数据附加信息 -->
                        <p class="postmetadata">
                            <span>分类：<?php the_category(','); ?></span>
                            <span>作者：<?php the_author(); ?></span>
                            <span><?php the_tags(); ?></span>
                            <span><?php the_time('Y年n月j日') ?></span>
                            <span><?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?></span>
                            <span><a href="<?php the_permalink(); ?>" class="button right">阅读全文</a></span>
                            <?php edit_post_link('编辑', ' • ', ''); ?>
                        </p>                    
                    </div>

                </div>
                <?php endwhile; ?>
        <?php else: ?>
        <h2>No Posts Found!</h2>
        <?php endif; ?>

            <!-- 导航 -->
            <div class="navigation">
                <?php posts_nav_link(); ?>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>

    <?php get_footer(); ?>
