<?php get_header(); ?>
    <div class="main">
        <!-- 容器 -->
        <div id="container">   
            <h2>文章详情</h2>
        <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                <!-- 文章 -->
                <div class="post" id="post-<?php the_ID(); ?>">

                    <!-- 标题 -->
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

                    <!-- 内容 -->
                    <div class="entry">
                        <?php the_content(); ?>
                        <?php link_pages(); ?>
                        <p class="postmetadata">
                            分类：<?php the_category(','); ?>
                            作者：<?php the_author(); ?>
                        </p>                    
                    </div>

                </div>
                <?php endwhile; ?>
        <?php else: ?>
        <h2>No Posts Found!</h2>
        <?php endif; ?>

            <!-- 导航 -->
            <div class="navigation">
                上一篇：<?php previous_post_link('%link'); ?><br>
                下一篇：<?php next_post_link('%link'); ?>
            </div>

            <!-- 评论 -->
            <div class="comments-template">
                <p>
                    <a href="<?php echo get_option('home'); ?>" class="button float" ><< 返回首页</a>
                </p>
                <?php comments_template(); ?>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
    
    <?php get_footer(); ?>
