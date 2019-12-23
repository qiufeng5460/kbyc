/*
设置page第一个图片初始化高度，用于除header外全屏幕显示
*/

(function ($) {	
$( document ).ready( function() {
//$(".first_section").height($(window).height()-$(".site-header").height());

});

/*document.ready：是ready，表示文档结构已经加载完成（不包含图片等非文字媒体文件）；
document.load：是onload，指示页面包含图片等文件在内的所有元素都加载完成。*/
$(window).load(function(){
   
   //$(".first_section img").css("height",$(window).height()-$(".site-header").height());
});

})(jQuery);

