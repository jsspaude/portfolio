"use strict";$(document).ready((function(){var a=$(".features-content-container").offset().top,e=$(".features-content-container").outerHeight(),t=$(".special-heading"),n=!1;$(t).each((function(){for(var a,e=(a=$(this).html()).trim(),t="",n=0,s=(a=e.split("")).length;n<s;n++)t+='<span class="specialChar" data-char="'+n+'">'+a[n]+"</span>";$(this).html(t)})),$(window).scroll((function(){n=!0})),setInterval((function(){n&&(n=!1,$(this).scrollTop()>a+e-190&&($(".about-graphic-container").addClass("active"),$(".special-heading").addClass("active"),$(".specialChar").each((function(a){var e=$(this);setTimeout((function(){e.addClass("active")}),150*a)}))))}),150)})),$(document).ready((function(){var a=!1;$(window).scroll((function(){a=!0})),setInterval((function(){if(a){a=!1;var e=$(document).scrollTop(),t=$(".features-content-container").offset().top,n=(e-$(".features-container").offset().top+100)/1e3;t-200<e&&$(".features-content").each((function(a){$(".features-content").each((function(a){var e=$(this);setTimeout((function(){e.addClass("active")}),1e3*a)}))})),n<.2&&($("#slopeEffect").attr("slope",n),$("#slopeEffectTablet").attr("slope",n-.05),$("#slopeEffectMobile").attr("slope",n-.1))}}),20)})),$(document).ready((function(){var a=$("#primary-navigation"),e=$("#menu-toggle"),t=$(".menu-item > a"),n=$("#mobile-overlay-toggle"),s=$("header").height(),o=$(window),i=!1;e.click((function(){a.toggleClass("open"),e.toggleClass("open"),n.toggleClass("display-none"),$("nav").hasClass("open")?$("nav").css({top:s}):$("nav").css({top:"-50px"})})),n.click((function(){a.removeClass("open"),n.addClass("display-none")})),t.click((function(){a.removeClass("open"),n.addClass("display-none")})),$(window).scroll((function(){i=!0})),setInterval((function(){i&&(i=!1,$(window).scrollTop()>100||o.width()<1e3?($("nav").css({top:"-50px"}),$("header").addClass("header-small"),$("header").removeClass("header"),$("#primary-navigation").removeClass("top")):$(0==window.top)&&o.width()>1e3&&($("header").addClass("header"),$("header").removeClass("header-small"),$("#primary-navigation").addClass("top"),$("nav").css({top:"0"}),$(e).removeClass("open"),$(a).removeClass("open")))}),50),$("a").on("click",(function(a){if(""!==this.hash){a.preventDefault();var e=this.hash;$("html, body").animate({scrollTop:$(e).offset().top},0,(function(){window.location.hash=e}))}}))})),$(document).ready((function(){var a=$(".foreground"),e=$("#van-skyline"),t=$(a).length,n=($(window).width(),!1);$(a).each((function(e){e<=t&&setTimeout((function(){$(a[e]).children().attr("filter","url(#dropshadow)"),$(a[e]).children().addClass("visible")}),250*e)})),$(window).scroll((function(){n=!0})),setInterval((function(){if(n){n=!1;var a=$(document).scrollTop();$(e).css("transform","translateY("+3*a+"px)")}}),10)})),$(document).ready((function(){var a=$(".svgMask[data-svg]"),e=!1;$(window).scroll((function(){e=!0})),setInterval((function(){if(e){e=!1;var t=$(document).scrollTop(),n=[];$(".services-content").each((function(e){var s=$(this).offset().top;$(t/(s-200)*100).each((function(){n.push(this)})),s-300<t&&($(this).addClass("active"),$(a).css("transform","translateX(100%)")),$(this).hasClass("active")||$(a[e]).css("transform","translateX("+n[e]+"%)")}))}}),20)})),$(document).ready((function(){var a=$(".showcase-content-container").offset().top,e=1,t=0,n=!1,s=$(".showcase-wrapper").length;$($(".showcase-wrapper[data-row="+s+"]")).addClass("hidden"),$(".showcase-container").css("min-height",550*s+"px"),$("div[data-row]").each((function(){$(this).attr("data-row")%2==1&&0!=$(this).attr("data-row")&&$(this).addClass("odd")})),$(".showcase-wrapper").each((function(a){var e=$(this).data("row",a),n=$('.showcase-content-container[data-row="1"'),s=$(n).position(),o=n.height()+90,i=s.top*a+s.top,r=s.top+o*a;0===a?e.offset({top:i+51}):e.offset({top:r}),t++})),$(window).scroll((function(){n=!0})),setInterval((function(){if(n){n=!1;var s=$(".showcase-wrapper[data-row="+e+"]"),o=s.offset().top;$(this).scrollTop()>a-100?$(".showcase-container").addClass("active"):$(".showcase-container").removeClass("active"),$(this).scrollTop()>o-100&&e!=t&&($(s).addClass("active"),e<t&&e++)}}),20)})),function(a){var e=a("#video-container"),t=e.find("video"),n=(e.find(".overlay"),e.find(".bar")),s=n.find(".buffer"),o=n.find(".progress"),i=t[0],r=t.find("[data-src]"),c=!0;0!=e.length&&(a("[data-player-close]").click((function(a){a.stopPropagation(),i.paused||i.pause(),e.removeClass("open")})),a("#video-play-btn").click((function(){r.length>0&&(e.addClass("open"),r.attr("src",r.attr("data-src"))),t.hasClass("ready")?(i.currentTime=0,i.play()):i.load()})),window.setInterval((function(){if(!i.paused&&i.duration>0&&o.width(i.currentTime/i.duration*100+"%"),4==i.readyState&&c&&!i.paused){var a=0,e=i.buffered,t=i.currentTime;e.start(a)<=t&&t<=e.end(a)||(a+=1);var n=e.end(a)/i.duration*100;s.width(n+"%"),100==n&&(c=!1)}}),50),t.on("seeking",(function(a){t.parent().addClass("seeking")})),t.on("seeked",(function(a){t.parent().removeClass("seeking")})),t.on("canplaythrough",(function(a){t.addClass("ready"),i.play()})),e.on("video, .overlay").click((function(a){t.hasClass("ready")&&(t.parent().toggleClass("paused",!i.paused),i[i.paused?"play":"pause"]())})),n.click((function(a){if(t.hasClass("ready")){a.preventDefault(),a.stopPropagation();var e=n.offset(),s=(a.pageX-e.left)/n.width()*100;i.paused||i.pause(),i.currentTime=s/100*i.duration,t.parent().removeClass("paused"),i.play()}})))}(jQuery);