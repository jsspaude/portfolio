"use strict";$(".accordion-group .accordion-tab").each((function(){$(this).hasClass("open")||$(this).next(".accordion-content").hide()})),$(".accordion-group").on("click",".accordion-tab",(function(){var a=$(this),e=a.next(".accordion-content");a.toggleClass("open"),e.slideToggle()})),console.log("test"),$(document).ready((function(){var a=$("#primary-navigation"),e=$("#menu-toggle"),o=$(".menu-item > a"),n=$("#mobile-overlay-toggle");e.click((function(){a.toggleClass("open"),e.toggleClass("open"),n.toggleClass("display-none")})),n.click((function(){a.removeClass("open"),n.addClass("display-none")})),o.click((function(){a.removeClass("open"),n.addClass("display-none")})),$(window).scroll((function(){$(window).scrollTop()>100?($("#header").addClass("header-small"),$("#primary-navigation").addClass("primary-navigation-small")):$(0==window.top)&&($("#header").removeClass("header-small"),$("#primary-navigation").removeClass("primary-navigation-small"),$(".open").removeClass("open"))})),$("a").on("click",(function(a){if(""!==this.hash){a.preventDefault();var e=this.hash;$("html, body").animate({scrollTop:$(e).offset().top},0,(function(){window.location.hash=e}))}})),$(window).scroll((function(){$("[data-scroll-show]").each((function(){var a=$(this).offset().top,e=$(this).outerHeight(),o=$(this).data("scroll-show");if(o<1)var n=1.5;else n=o;$(window).scrollTop()>a-e*n?$(this).addClass("show"):$(this).removeClass("show")}))}))})),function(a){var e=a("#video-container"),o=e.find("video"),n=(e.find(".overlay"),e.find(".bar")),s=n.find(".buffer"),t=n.find(".progress"),i=o[0],r=o.find("[data-src]"),l=!0;0!=e.length&&(a("[data-player-close]").click((function(a){a.stopPropagation(),i.paused||i.pause(),e.removeClass("open")})),a("#video-play-btn").click((function(){r.length>0&&(e.addClass("open"),r.attr("src",r.attr("data-src"))),o.hasClass("ready")?(i.currentTime=0,i.play()):i.load()})),window.setInterval((function(){if(!i.paused&&i.duration>0&&t.width(i.currentTime/i.duration*100+"%"),4==i.readyState&&l&&!i.paused){var a=0,e=i.buffered,o=i.currentTime;e.start(a)<=o&&o<=e.end(a)||(a+=1);var n=e.end(a)/i.duration*100;s.width(n+"%"),100==n&&(l=!1)}}),50),o.on("seeking",(function(a){o.parent().addClass("seeking")})),o.on("seeked",(function(a){o.parent().removeClass("seeking")})),o.on("canplaythrough",(function(a){o.addClass("ready"),i.play()})),e.on("video, .overlay").click((function(a){o.hasClass("ready")&&(o.parent().toggleClass("paused",!i.paused),i[i.paused?"play":"pause"]())})),n.click((function(a){if(o.hasClass("ready")){a.preventDefault(),a.stopPropagation();var e=n.offset(),s=(a.pageX-e.left)/n.width()*100;i.paused||i.pause(),i.currentTime=s/100*i.duration,o.parent().removeClass("paused"),i.play()}})))}(jQuery);