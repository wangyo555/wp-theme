<?php get_header(); ?>
    <div class="main">
        
        <!-- 容器 -->
        <div id="container">   
            <h2>分类列表</h2>
        <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                <!-- 文章 -->
                <div class="post" id="post-<?php the_ID(); ?>">

                    <!-- 标题 -->
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

                    <!-- 内容 -->
                    <div class="entry">
                        <!-- <?php the_excerpt(); ?> -->
                        <p class="postmetadata">
                            <span>分类：<?php the_category(','); ?></span> 
                            <span>作者：<?php the_author(); ?></span> 
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
            <div class="tips">
                <p>如果不存在category.php，则分类将使用archive.php模板！</p>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>

    <?php get_footer(); ?>
