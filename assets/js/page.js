/*
设置page第一个图片初始化高度，用于除header外全屏幕显示
*/

(function ($) {
	
$( document ).ready( function() {
$(".first_section").height($(window).height()-$(".site-header").height());
});

})(jQuery);

