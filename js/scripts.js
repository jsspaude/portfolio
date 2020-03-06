"use strict";function _toConsumableArray(e){return _arrayWithoutHoles(e)||_iterableToArray(e)||_nonIterableSpread()}function _nonIterableSpread(){throw new TypeError("Invalid attempt to spread non-iterable instance")}function _iterableToArray(e){if(Symbol.iterator in Object(e)||"[object Arguments]"===Object.prototype.toString.call(e))return Array.from(e)}function _arrayWithoutHoles(e){if(Array.isArray(e)){for(var t=0,r=new Array(e.length);t<e.length;t++)r[t]=e[t];return r}}var abtContainer=document.querySelector('[data-js*="abtContainer"]'),abtStrContainer=document.querySelector('[data-js*="abtStrContainer"]'),abtStrArray=_toConsumableArray(document.querySelector('[data-js*="abtStrContainer"]').innerHTML.trim());function aboutScroll(){var e=_toConsumableArray(document.querySelectorAll('[data-js*="abtStr"]'));document.querySelector('[data-js*="abtContainer"]').getBoundingClientRect().top-headerHeight-50<=0&&(abtContainer.classList.add("active"),e.forEach((function(e,t){setTimeout((function(){e.classList.add("active"),e.innerHTML.match(/^J|S|S$/)&&e.classList.add("highlight")}),150*t)})))}function _toConsumableArray(e){return _arrayWithoutHoles(e)||_iterableToArray(e)||_nonIterableSpread()}function _nonIterableSpread(){throw new TypeError("Invalid attempt to spread non-iterable instance")}function _iterableToArray(e){if(Symbol.iterator in Object(e)||"[object Arguments]"===Object.prototype.toString.call(e))return Array.from(e)}function _arrayWithoutHoles(e){if(Array.isArray(e)){for(var t=0,r=new Array(e.length);t<e.length;t++)r[t]=e[t];return r}}abtStrContainer.innerHTML=abtStrArray.map((function(e){return'<span class="about-string" data-js="abtStr">'+e+"</span>"})).join(""),window.addEventListener("scroll",(function(){aboutScroll()}));var featConContainer=document.querySelector('[data-js*="featConContainer"]'),featConArray=_toConsumableArray(document.querySelectorAll('[data-js*="featureContent"]')),featConOffs=featConArray.map((function(e){return e.getBoundingClientRect().top})),slopeEffect=document.querySelectorAll('[data-js*="slopeEffect"]');function featureScroll(){var e,t;(e=featConArray,t=featConArray[featConArray.length-1].offsetTop,e.every((function(e){return e.offsetTop===t})))&&featConArray[featConArray.length-1].classList.add("active"),featConArray.forEach((function(e,t){e.offsetTop>featConOffs[t]&&e.classList.add("active")}))}function slopeScroll(){var e=(pageYOffset-featConContainer.offsetTop+100)/1e3;slopeEffect.forEach((function(t,r){if(e<.2){var a=.05*r;t.setAttribute("slope",e-a)}}))}window.addEventListener("scroll",(function(){slopeScroll(),featureScroll()}));var scrollTop=pageYOffset,header=document.querySelector('[data-js*="header"]'),navBar=document.querySelector('[data-js*="primeNav"]'),navButton=document.querySelector('[data-js*="menuToggle"]'),mainDiv=document.querySelector('[data-js*="main"]'),headerHeight=header.getBoundingClientRect().height;function hasOpen(){var e=navBar.classList.contains("open");navBar.style.top=e?"".concat(headerHeight,"px"):"-50px"}function _toConsumableArray(e){return _arrayWithoutHoles(e)||_iterableToArray(e)||_nonIterableSpread()}function _nonIterableSpread(){throw new TypeError("Invalid attempt to spread non-iterable instance")}function _iterableToArray(e){if(Symbol.iterator in Object(e)||"[object Arguments]"===Object.prototype.toString.call(e))return Array.from(e)}function _arrayWithoutHoles(e){if(Array.isArray(e)){for(var t=0,r=new Array(e.length);t<e.length;t++)r[t]=e[t];return r}}scrollTop>100||screen.width<450?(header.className="header-small",navBar.classList.remove("top")):(header.className="header",navBar.classList.add("top")),window.onscroll=function(){var e=pageYOffset;e>100||screen.width<450?(navBar.style.top=headerHeight,header.className="header-small",navBar.classList.remove("top")):0===e&&screen.width>450&&(header.className="header",navBar.classList.add("top"),navButton.classList.remove("open"),navBar.classList.remove("open"),navBar.style.top="0px")},navButton.addEventListener("click",(function(){navBar.classList.toggle("open"),navButton.classList.toggle("open"),hasOpen()})),mainDiv.addEventListener("click",(function(){navButton.classList.remove("open"),navBar.classList.remove("open"),hasOpen()})),$("a").on("click",(function(e){if(""!==this.hash){e.preventDefault();var t=this.hash;$("html, body").animate({scrollTop:$(t).offset().top},0,(function(){window.location.hash=t}))}})),$(document).ready((function(){var e=$(".foreground"),t=$("#van-skyline"),r=$(e).length,a=$(".background-shape"),n=!1;$(e).each((function(t){t<=r&&setTimeout((function(){$(e[t]).children().attr("filter","url(#dropshadow)"),$(e[t]).children().addClass("visible")}),250*t)})),$(window).scroll((function(){n=!0})),setInterval((function(){n&&(n=!1,$(document).scrollTop()>0?($(t).addClass("active"),$(a).addClass("active")):($(t).removeClass("active"),$(a).removeClass("active")))}),10)}));var svgMaskArray=_toConsumableArray(document.querySelectorAll('[data-svg*="servicesMask"]')),svgCircArray=_toConsumableArray(document.querySelectorAll('[data-svg*="servicesCirc"]')),servConArray=_toConsumableArray(document.querySelectorAll('[data-js*="servicesContent"]')),sectionHeading=document.querySelector('[data-js*="servicesHeading"]').getBoundingClientRect().height,servConContainer=document.querySelector('[data-js*="servConContainer"]'),servContainer=document.querySelector('[data-js*="servContainer"]'),servHeadingArray=_toConsumableArray(document.querySelectorAll('[data-js*="servHeadingCon"]')),servGraphArray=_toConsumableArray(document.querySelectorAll('[data-js*="servGraphCon"]')),servRootArray=_toConsumableArray(document.querySelectorAll('[data-svg*="servRoot"]')),servGroupArray=_toConsumableArray(document.querySelectorAll('[data-svg*="servGroup"]'));function serviceScroll(){var e=servConArray.map((function(e){return e.getBoundingClientRect().top})),t=servConArray.map((function(e){return e.offsetTop})),r=headerHeight+sectionHeading+(servConContainer.offsetTop-servContainer.offsetTop);servConArray.forEach((function(t,a){e[a]-r<=0&&t.classList.add("active")})),svgMaskArray.forEach((function(a,n){var o=100-(e[n]-r)/t[n]*100,s=o/2;o<100&&a.setAttribute("r",s+"%")})),svgCircArray.forEach((function(a,n){var o=100-(e[n]-r)/t[n]*100;o<100&&a.setAttribute("r",o/2+"%")}))}window.addEventListener("scroll",(function(){serviceScroll()})),servHeadingArray.forEach((function(e,t){var r=servGraphArray[t].getBoundingClientRect().width,a=servGraphArray[t].getBoundingClientRect().height;e.style.width=r+"px",e.style.height=a+"px"})),$(document).ready((function(){var e=$(".showcase-content-container").offset().top,t=$(".showcase-content-container"),r=$(".showcase-wrapper").length,a=1,n=0,o=!1;$($(".showcase-wrapper[data-row="+r+"]")).addClass("hidden"),$(".showcase-container").css("min-height",550*r+"px"),$("div[data-row]").each((function(){$(this).attr("data-row")%2==1&&0!=$(this).attr("data-row")&&$(this).addClass("odd")})),$(".showcase-wrapper").each((function(e){var r=$(this).data("row",e),a=$(t[e]).offset().top;r.offset({top:a}),n++})),$(window).scroll((function(){o=!0})),setInterval((function(){if(o){o=!1;var t=$(".showcase-wrapper[data-row="+a+"]"),r=t.offset().top;$(this).scrollTop()>e-100?$(".showcase-container").addClass("active"):$(".showcase-container").removeClass("active"),$(this).scrollTop()>r-100&&a!=n&&($(t).addClass("active"),a<n&&a++)}}),20)}));