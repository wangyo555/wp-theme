<?php
// if ( function_exists('register_sidebar') )
//     register_sidebar();


function myshortcode_function($atts, $content = null){ // $atts 代表了 shortcode 的各个参数，$content 为标签内的内容
    
   extract(shortcode_atts(array( // 使用 extract 函数解析标签内的参数
   "title" => '标题', // 给参数赋默认值，下面直接调用 $ 加上参数名输出参数值
   "name" => '自定义的Name'
   ), $atts));
   // 返回内容
   return '<div class="myshortcode" name="'.$name.'">
      <h3>'. $title .'</h3>
      <p>
       '. $content .'
      </p>
     </div>';
  }
    
  add_shortcode("msc", "myshortcode_function"); // 注册该 shortcode，以后使用 [msc] 标签调用该 shortcode



?>