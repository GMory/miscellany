!function(e){var t={};function r(n){if(t[n])return t[n].exports;var o=t[n]={i:n,l:!1,exports:{}};return e[n].call(o.exports,o,o.exports,r),o.l=!0,o.exports}r.m=e,r.c=t,r.d=function(e,t,n){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(r.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)r.d(n,o,function(t){return e[t]}.bind(null,o));return n},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="/",r(r.s=18)}({18:function(e,t,r){e.exports=r("JF5C")},JF5C:function(e,t){$(document).ready((function(e){$(".youtube-placeholder").length&&$(".youtube-placeholder").on("click",(function(){var e='<div class="embed-responsive embed-responsive-16by9"><div class="youtube-video embed-responsive-item" data-src="'+$(this).data("yt-url")+'"><iframe class="embed-responsive-item" src="'+$(this).data("yt-url")+'" data-src="'+$(this).data("yt-url")+'" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></div>';$(this).hide().after(e)})),$('[data-toggle="dropdown"]').on("click",(function(e){e.preventDefault();var t=$(this).next(".dropdown-menu");t.hasClass("show")?t.removeClass("show"):t.addClass("show")}))}))}});