jQuery(function(){var e,n,a,i=jQuery("#search-toggle"),s=jQuery("#search-box");i.on("click",function(){i.hasClass("header-search")?(i.removeClass("header-search").addClass("header-search-x"),s.addClass("show-search-box")):(i.removeClass("header-search-x").addClass("header-search"),s.removeClass("show-search-box"))}),jQuery(function(){var e=jQuery("#page div"),n=jQuery("body");e.hasClass("main-slider")&&n.addClass("sld-plus")}),jQuery(".post-image-content .entry-meta .posted-on a").html(function(){var e=jQuery(this).text().trim().split(" "),n=e.shift();return(0<e.length?"<span class='big-font'>"+n+"</span> ":n)+e.join(" ")}),(a=jQuery(".main-navigation"))&&(e=a.find(".menu-toggle"))&&((n=a.find(".menu"))&&n.children().length?jQuery(".menu-toggle").on("click",function(){jQuery(this).toggleClass("on"),a.toggleClass("toggled-on")}):e.hide()),jQuery(function(){jQuery(window).width()<981&&(jQuery("#site-navigation .menu-item-has-children, #site-navigation .page_item_has_children").prepend('<button class="sub-menu-toggle"> <i class="fa fa-plus"></i> </button>'),jQuery(".main-navigation .menu-item-has-children ul, .main-navigation .page_item_has_children ul").hide(),jQuery(".main-navigation .menu-item-has-children > .sub-menu-toggle, .main-navigation .page_item_has_children > .sub-menu-toggle").on("click",function(){jQuery(this).parent(".main-navigation .menu-item-has-children, .main-navigation .page_item_has_children").children("ul").first().slideToggle(),jQuery(this).children(".fa-plus").first().toggleClass("fa-minus")}))}),jQuery(document).ready(function(){jQuery(".show-menu-toggle, .hide-menu-toggle, .page-overlay").click(function(){jQuery(".side-menu").fadeToggle("slow"),jQuery(".side-menu").addClass("show"),jQuery(".page-overlay").toggleClass("side-menu-open"),jQuery("#page").addClass("side-content-open")}),jQuery(".hide-menu-toggle, .page-overlay").click(function(){jQuery(".side-menu").removeClass("show"),jQuery(".page-overlay").removeClass("side-menu-open"),jQuery("#page").removeClass("side-content-open")})}),jQuery(document).ready(function(){jQuery(".go-to-top").hide(),jQuery(window).scroll(function(){900<jQuery(window).scrollTop()?jQuery(".go-to-top").fadeIn():jQuery(".go-to-top").fadeOut()}),jQuery(".go-to-top").click(function(){return jQuery("html,header,body").animate({scrollTop:0},700),!1})})});