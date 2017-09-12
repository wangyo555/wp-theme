### 要求：
1. 能编写简单的php函数，了解wordpress常用的內建函数
2. 熟悉wordpress的文件结构和基本工作方式
3. 专业术语：Template、Template file、Theme、Post、Page

### 文件结构：
```
- home.php
- index.php // 首页
- single.php    // 文章
- page.php  // 页面
- archive.php   // 调用你网站的所有分类目录
- category.php  // 调用某一个id的分类目录
- tag.php   // 标签
- date.php  // 日期页面
- author.php    // 显示作者资料
- search.php    // 搜索结果
- searchform.php    // 搜索表单
- author.php    // 作者
- attachment.php    // 附件
- link.php  // 友情链接
- sidebar.php   // 侧边栏
- MIME_type.php // 附件，可以是任何MIME类型 (image.php, video.php, audio.php, application.php 或者其他).
- 404.php
- functions.php //功能、参数等配置文件
```
![image](http://note.youdao.com/yws/public/resource/1c8e12bea839c2ffb70556ca855ea4e4/xmlnote/B67994CEA6DF4301AC1E722B036EA3F2/26909)

### 其他
1. **single-{post_type}.php**  
如果文章类型是videos（即视频），WordPress就会去查找single-videos.php（WordPress 3.0及以上版本支持）。  
2. **page-{slug}.php**  
如果页面的缩略名是news，WordPress将会查找 page-news.php（WordPress 2.9及以上版本支持）。  
3. **page-{id}.php**  
如果页面ID是6，WordPress将会查找page-6.php。  
**category.php、tag.php用法同上**
4. **author-{nicename}.php**  
如果作者的昵称为rami，WordPress将会查找author-rami.php（WordPress 3.0及以上版本支持）。    
5. **author-{id}.php**  
如果作者ID为6，WordPress将会查找author-6.php（WordPress 3.0及以上版本支持）。  

### 基本条件判断Tag
```
is_home() : 是否为主页  
is_single() : 是否为内容页(Post)  
is_page() : 是否为内容页(Page)  
is_category() : 是否为Category/Archive页  
is_tag() : 是否为Tag存档页  
is_date() : 是否为指定日期存档页  
is_year() : 是否为指定年份存档页  
is_month() : 是否为指定月份存档页  
is_day() : 是否为指定日存档页  
is_time() : 是否为指定时间存档页  
is_archive() : 是否为存档页   
is_search() : 是否为搜索结果页  
is_404() : 是否为 “HTTP 404: Not Found” 错误页  
is_paged() : 主页/Category/Archive页是否以多页显示  
```

### Header部分常用到的PHP函数  
```
<?php bloginfo(‘name’); ?> : 博客名称(Title)  
<?php bloginfo(‘stylesheet_url’); ?> : CSS文件路径  
<?php bloginfo(‘pingback_url’); ?> : PingBack Url  
<?php bloginfo(‘template_url’); ?> : 模板文件路径  
<?php bloginfo(‘version’); ?> : WordPress版本  
<?php bloginfo(‘atom_url’); ?> : Atom Url  
<?php bloginfo(‘rss2_url’); ?> : RSS 2.o Url  
<?php bloginfo(‘url’); ?> : 博客 Url  
<?php bloginfo(‘html_type’); ?> : 博客网页Html类型  
<?php bloginfo(‘charset’); ?> : 博客网页编码  
<?php bloginfo(‘description’); ?> : 博客描述  
<?php wp_title(); ?> : 特定内容页(Post/Page)的标题  
<?php echo get_option('home'); ?> : 首页地址  
```

### 模板常用的PHP函数及命令
```
<?php get_header(); ?> : 调用Header模板  
<?php get_sidebar(); ?> : 调用Sidebar模板  
<?php get_footer(); ?> : 调用Footer模板  
<?php the_content(); ?> : 显示内容(Post/Page)  
<?php if(have_posts()) : ?> : 检查是否存在Post/Page  
<?php while(have_posts()) : the_post(); ?> : 如果存在Post/Page则予以显示  
<?php endwhile; ?> : While 结束  
<?php endif; ?> : If 结束  
<?php the_time(‘字符串’) ?> : 显示时间，时间格式由“字符串”参数决定，具体参考PHP手册  
<?php comments_popup_link(); ?> : 正文中的留言链接。如果使用 comments_popup_script() ，则留言会在新窗口中打开，反之，则在当前窗口打开  
<?php the_title(); ?> : 内容页(Post/Page)标题  
<?php the_permalink() ?> : 内容页(Post/Page) Url  
<?php the_category(‘, ‘) ?> : 特定内容页(Post/Page)所属Category  
<?php the_author(); ?> : 作者  
<?php the_ID(); ?> : 特定内容页(Post/Page) ID  
<?php edit_post_link(); ?> : 如果用户已登录并具有权限，显示编辑链接  
<?php get_links_list(); ?> : 显示Blogroll中的链接  
<?php comments_template(); ?> : 调用留言/回复模板  
<?php wp_list_pages(); ?> : 显示Page列表  
<?php wp_list_categories(); ?> : 显示Categories列表  
<?php next_post_link(‘ %link ‘); ?> : 下一篇文章链接  
<?php previous_post_link(‘%link’); ?> : 上一篇文章链接  
<?php get_calendar(); ?> : 日历  
<?php wp_get_archives() ?> : 显示内容存档  
<?php posts_nav_link(); ?> : 导航，显示上一篇/下一篇文章链接  
<?php include(TEMPLATEPATH . ‘/文件名’); ?> : 嵌入其他文件，可为定制的模板或其他类型文件  
```

### 与模板相关的其他函数  
```
<?php _e(‘Message’); ?> ： 输出信息，可用于输出自定义生成的变量信息。
<?php wp_register(); ?> ： 显示博客注册链接
<?php wp_loginout(); ?> ： 显示登录/注销链接
<!–next page-> ： 将当前内容分页
<!–more–> ： 将当前内容截断，以不在主页/目录页显示全部内容
<?php timer_stop(1); ?> ： 网页加载时间（秒）
<?php echo get_num_queries(); ?>： 网页加载查询量
// 注：以上函数并不是绝对需要应用，属于增加用户体验的拔高内容。
```