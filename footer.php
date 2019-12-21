<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
                        remove_action( 'storefront_footer', 'storefront_credit', 20 );
			do_action( 'storefront_footer' );
			?>
                       <div class="wx_code">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wx.jpg" alt="坤博英才公众号" title="微信扫一扫"/>
                            <p class="caption">坤博英才公众号</p>
                       </div>
		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

