<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package storefront
 */

?>

<div id="secondary" class="widget-area" role="complementary">
	<?php
           /*20191223:确保全部cat在第一个*/
           $cat_slug= get_category_by_slug('study_guide');
           $cat_ids=$cat_slug->term_id;           
           $cat1=wp_list_categories('orderby=id&echo=0&title_li=&include='.$cat_ids);
           
           $cat_slug= get_category_by_slug('chinese');
           $cat_ids=$cat_slug->term_id;
           $cat_slug= get_category_by_slug('mathematics');
           $cat_ids=$cat_ids.','.$cat_slug->term_id;
           $cat_slug= get_category_by_slug('english');
           $cat_ids=$cat_ids.','.$cat_slug->term_id;
           $cat_slug= get_category_by_slug('science');
           $cat_ids=$cat_ids.','.$cat_slug->term_id;
           $cat_slug= get_category_by_slug('art');
           $cat_ids=$cat_ids.','.$cat_slug->term_id;
           $cat_slug= get_category_by_slug('politics');
           $cat_ids=$cat_ids.','.$cat_slug->term_id;
           $cat_slug= get_category_by_slug('physics');
           $cat_ids=$cat_ids.','.$cat_slug->term_id;
           $cat_slug= get_category_by_slug('chemistry');
           $cat_ids=$cat_ids.','.$cat_slug->term_id;
           $cat_slug= get_category_by_slug('history');
           $cat_ids=$cat_ids.','.$cat_slug->term_id;
           $cat_slug= get_category_by_slug('geography');
           $cat_ids=$cat_ids.','.$cat_slug->term_id;
           $cat_slug= get_category_by_slug('biology');
           $cat_ids=$cat_ids.','.$cat_slug->term_id;
           $cat_slug= get_category_by_slug('others');
           $cat_ids=$cat_ids.','.$cat_slug->term_id;
           $cat2=wp_list_categories('orderby=id&echo=0&title_li=&include='.$cat_ids);
                      
           echo $cat1.$cat2;                            
        ?>
</div><!-- #secondary -->