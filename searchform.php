<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
    <div>
        <input type="text" placeholder="请输入要查找的内容..."  value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="15" /><br />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>