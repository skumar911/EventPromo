!function($){$.fn.extend({easyResponsiveTabs:function(a){var t={type:"default",width:"auto",fit:!0},a=$.extend(t,a),e=a,s=e.type,i=e.fit,r=e.width;this.each(function(){function a(){"vertical"==s&&t.addClass("resp-vtabs"),1==i&&t.css({width:"100%",margin:"0px"}),"accordion"==s&&(t.addClass("resp-easy-accordion"),t.find(".resp-tabs-list").css("display","none"))}var t=$(this);t.find("ul.resp-tabs-list li").addClass("resp-tab-item"),t.css({display:"block",width:r}),t.find(".resp-tabs-container > div").addClass("resp-tab-content"),a();var e;t.find(".resp-tab-content").before("<h2 class='resp-accordion' role='tab'><span class='resp-arrow'></span></h2>");var n=0;t.find(".resp-accordion").each(function(){e=$(this);var a=t.find(".resp-tab-item:eq("+n+")").text();t.find(".resp-accordion:eq("+n+")").append(a),e.attr("aria-controls","tab_item-"+n),n++});var c=0,o;t.find(".resp-tab-item").each(function(){$tabItem=$(this),$tabItem.attr("aria-controls","tab_item-"+c),$tabItem.attr("role","tab"),t.find(".resp-tab-item").first().addClass("resp-tab-active"),t.find(".resp-accordion").first().addClass("resp-tab-active"),t.find(".resp-tab-content").first().addClass("resp-tab-content-active").attr("style","display:block");var a=0;t.find(".resp-tab-content").each(function(){o=$(this),o.attr("aria-labelledby","tab_item-"+a),a++}),c++}),t.find("[role=tab]").each(function(){var a=$(this);a.click(function(){var e=a.attr("aria-controls");if(a.hasClass("resp-accordion")&&a.hasClass("resp-tab-active"))return t.find(".resp-tab-content-active").slideUp("",function(){$(this).addClass("resp-accordion-closed")}),a.removeClass("resp-tab-active"),!1;!a.hasClass("resp-tab-active")&&a.hasClass("resp-accordion")?(t.find(".resp-tab-active").removeClass("resp-tab-active"),t.find(".resp-tab-content-active").slideUp().removeClass("resp-tab-content-active resp-accordion-closed"),t.find("[aria-controls="+e+"]").addClass("resp-tab-active"),t.find(".resp-tab-content[aria-labelledby = "+e+"]").slideDown().addClass("resp-tab-content-active")):(t.find(".resp-tab-active").removeClass("resp-tab-active"),t.find(".resp-tab-content-active").removeAttr("style").removeClass("resp-tab-content-active").removeClass("resp-accordion-closed"),t.find("[aria-controls="+e+"]").addClass("resp-tab-active"),t.find(".resp-tab-content[aria-labelledby = "+e+"]").addClass("resp-tab-content-active").attr("style","display:block"))}),$(window).resize(function(){t.find(".resp-accordion-closed").removeAttr("style")})})})}})}(jQuery);