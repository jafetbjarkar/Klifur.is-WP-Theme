!function($){function i(i,t){var o=i,n=t,e=$(o).length,a,d,h,r,s,g,c,f=[];if(e>=2){$(o).each(function(i){f[i]=$(this).offset(),f[i].height=$(this).outerHeight()});for(var l=2;e>l;l++)a=f[l].left,d=f[l].top,h=f[l].height,c=l-2,r=f[c],s=r.top+r.height,d>s&&(g=d-s,g-=n,$(o+":eq("+l+")").css("margin-top",-g+"px"))}}$(function(){$(window).width()>=999&&(setTimeout(i,1e3,".hentry",30),setTimeout(i,1e3,"body.single .post-section",30),setTimeout(i,1e3,"body.single .problem-section",30));var t=function(){$('<div id="imagelightbox-loading"><div></div></div>').appendTo("body")},o=function(){$("#imagelightbox-loading").remove()},n=function(){var i=$('a[href="'+$("#imagelightbox").attr("src")+'"] img').attr("alt");i.length>0&&$('<div id="imagelightbox-caption">'+i+"</div>").appendTo("body")},e=function(){$("#imagelightbox-caption").remove()};$("article.post a:has(img)").imageLightbox({onLoadStart:function(){e(),t()},onLoadEnd:function(){n(),o()},onEnd:function(){e(),o()}}),$("#myTable").tablesorter(),$(".tooltip").tooltipster();var a=$(window).height(),d=$(".site-footer").height(),h=$(".site-footer").position().top+d;a>h&&($(".site-footer").css("top",10+(a-h)+"px"),$("nav.navigation").css("top",10+(a-h)+"px")),$(".problem-form form").change(function(){this.submit()}),$(".user-lists").change(function(){this.submit()});var r=$(window).width();$(window).resize(function(){if(r>999){if($(window).width()<=999)return location.reload(),void(r=$(window).width());r=$(window).width()}})})}(jQuery);