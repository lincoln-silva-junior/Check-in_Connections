//Remove menu class on scrolldown adding solid white bg
! function(a) {
"use strict"; 
    a(window).scroll(function() {
        a(this).scrollTop() > 1 ? a(".navbarcc").removeClass("lh-nav-bg-transform") : a(".navbarcc").addClass("lh-nav-bg-transform")
    })
}(jQuery);
//Menu dropdown functionality
! function(a) {
    "use strict"; 
    a(window).scroll(function() {
        a(this).scrollTop() > 1 ? a(".navbarcc").removeClass("lh-nav-bg-transform") : a(".navbarcc").addClass("lh-nav-bg-transform")
    })
}(jQuery),
function(a) {
    "use strict"; 
    a(".navbarcc-nav > li.menu-item > a").click(function() {
        "_blank" != a(this).attr("target") && "dropdown-toggle" != a(this).attr("class") && (window.location = a(this).attr("href"))
    }), a(".navbarcc-nav > li.menu-item > .dropdown-toggle").click(function() {
        "_blank" == a(this).attr("target") ? window.open(this.href) : window.location = a(this).attr("href")
    }), a(".dropdown").hover(function() {
        a(this).addClass("open")
    }, function() {
        a(this).removeClass("open")
    });
    var b = function(b) {
        height = b, a("#cc_spacer").css("height", height + "px")
    };
    a(window).resize(function() {
        b(a("#navigation_menu").height())
    }), a(window).ready(function() {
        b(a("#navigation_menu").height())
    })
}(jQuery);
