function detectMobile(){return!!(navigator.userAgent.match(/Android/i)||navigator.userAgent.match(/webOS/i)||navigator.userAgent.match(/iPhone/i)||navigator.userAgent.match(/iPad/i)||navigator.userAgent.match(/iPod/i)||navigator.userAgent.match(/BlackBerry/i)||navigator.userAgent.match(/Windows Phone/i)||navigator.userAgent.match(/Opera Mini/i)||navigator.userAgent.match(/IEMobile/i))}function stickyBuyNowTop(){}function stickyLeft(){if($("#block_product_session").parent().css("position","static"),"product_detail"==current_script)var a=$("#product_populary");else var a=$(".footer-container");var b=$("#block_product_session");b.each(function(c){var d=$(b[c]),e=b[c+1];d.scrollToFixed({marginTop:85,limit:function(){var b=0;return b=e?$(e).offset().top-$(this).outerHeight(!0)-10:$(a).offset().top-$(this).outerHeight(!0)-0},zIndex:999})})}function getDocumentHeight(){return Math.max(document.documentElement.clientHeight,document.body.scrollHeight,document.documentElement.scrollHeight,document.body.offsetHeight,document.documentElement.offsetHeight)}function dndscrollstickyfixed(a,b,c,d){function g(){var h=(getDocumentHeight(),$(b).position().top-d),i=$(window).scrollTop();i>e&&i<h-f-c?($(a).css("position","fixed"),$(a).css("top",c+"px")):i>h-f-c?($(a).parent().css("position","static"),$(a).css("position","absolute"),$(a).css("top",h-f+"px")):$(a).css("position","static")}$(a).width($(a).width()),$(a).css("z-index","6");var e=$(a).position().top,f=$(a).height();g(),$(window).scroll(function(){g()})}function stickyRight(){0==detectMobile()&&$(window).width()>=768&&"product_detail"==current_script&&dndscrollstickyfixed($(".buy-box-right"),$("#product_populary"),85,15)}function sticky(){0==detectMobile()&&$(document).height()>3800&&$(window).width()>1e3&&"product_detail"!=current_script&&stickyLeft()}$(document).ready(function(a){var b='<div class="modal fade" id="systemNotify" tabindex="-1" role="dialog" aria-labelledby="systemNotifyModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title"><i class="fa fa-info"></i> <span class="systemNotifyCaption">4MEN thông báo</span></h4></div><div class="modal-body"><div class="modal-order"><p id="systemNotifyContent"></p></div></div><div class="modal-footer"><button type="button" class="btn btn-primary btn-close" style="float:right;" data-dismiss="modal">Đóng</button></div></div></div></div>';$("body").append(b)}),$(document).ready(function(a){$(".buyNow").click(function(){var a=$(this).attr("rel");$.cookie("current_id_buy",a,{path:"/"})});var b=$.cookie("current_id_buy");parseInt(b,10)>0&&($.removeCookie("current_id_buy",{path:"/"}),$("#modalBuyNow").modal())}),$(document).ready(function(a){0==detectMobile()&&$(window).width()>768&&setTimeout(stickyRight,10)}),$(document).ready(function(a){function b(){$.ajax({type:"POST",url:base_url+"client/plusviewproduct",data:"id="+product_id+"&cat="+catalogue_id,success:function(a){},error:function(a,b,c){}})}"product_detail"==current_script&&product_id>0&&setTimeout(b,5e3)}),$(document).ready(function(a){function c(){var a=jQuery.cookie("closeBalloon");1==$("#footer-balloon").attr("demo")&&(a=0),1!=a?$(window).scrollTop()+$(window).height()<$(document).height()-100&&$(window).scrollTop()>200?$(window).width()>=768&&$("#footer-balloon").slideDown(1e3):$("#footer-balloon").slideUp(1e3):$("#footer-balloon").hide()}$.cookie("closeBalloon");$("#close-balloon").click(function(){var a=new Date,b=1440;a.setTime(a.getTime()+60*b*1e3),$.cookie("closeBalloon",1,{path:"/",expires:a}),$("#footer-balloon").slideUp(1e3)}),setTimeout(c,1e3),$(window).scroll(function(){c()})}),$(document).ready(function(a){function b(){if(1==$("#systemNotifyImage").attr("show")){var a=new Date,b=1440;a.setTime(a.getTime()+60*b*1e3),$.cookie("systemNotifyImage",1,{path:"/",expires:a}),$("#systemNotifyImage").modal()}}var c=$.cookie("systemNotifyImage");1==$("#systemNotifyImage").attr("demo")&&(c=0),1!=parseInt(c,10)&&b()});
$(document).ready(function(e) {
   $(".tags_block .block_content a").prepend('<i class="fa fa-tags" aria-hidden="true"></i>');
});