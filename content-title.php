<?php
/**
 * Template used to display post title.
 *
 * @package storefront
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
    <?php
            //20190701:check wx_link firstly, if not, open default link
            $title_link=get_post_meta(get_the_id(),'wx_link',true);
            $title_link=$title_link ? $title_link:get_permalink();    
       the_title( sprintf( '<p class="archive-title"><a target="_blank" href="%s" rel="bookmark">', esc_url( $title_link ) ), '</a></p>' );
    ?>
        
    <div class="archive-date">
            <?php echo get_the_date(); ?>
    </div>
        
    </header><!-- .entry-header -->

</article><!-- #post-## -->
