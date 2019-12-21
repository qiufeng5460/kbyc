<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * 20191212:Enqueue scripts.
 */
function storefront_child_scripts() {

    //page页除header外全屏显示
    wp_enqueue_script( 'pagejs', get_theme_file_uri( '/assets/js/page.js' ), array( 'jquery' ), '2.1.2', true );

}
add_action( 'wp_enqueue_scripts', 'storefront_child_scripts' );

/**
 * 20191214:footer
 */
function storefront_child_credit() {
	?>
	<div class="site-info">
		<p>Copyright &copy; 2013-2033 北京坤博英才教育科技有限公司</p>
                <p><a href="http://beian.miit.gov.cn/" target="_blank">京ICP备19057406号-1</a></p>
	</div><!-- .site-info -->
	<?php
}
add_action( 'storefront_footer', 'storefront_child_credit', 20 );