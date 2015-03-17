<?php 
register_nav_menu('sidebar_menu', 'меню в sidebar');

function my_login_logo(){
   echo '
   <style type="text/css">
   		@import url('. get_bloginfo('template_directory') .'/style/font.css);
        #login h1 a {
			font-family: mothproofscriptregular;
			font-size: 50px;
   			background: none;
   			width: auto;
  			text-indent: 0;
  			color: #58697a;
        }
        #login h1 a:hover {
			color: #3ba8c0;
     	}
    </style>';
}
add_action('login_head', 'my_login_logo');
add_filter( 'login_headerurl', create_function('', 'return get_home_url();') );