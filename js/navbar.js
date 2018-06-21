jQuery(document).ready(function( $ ) {
	
    $(".nav-toggle").on("click", function(){

        let navbar = $(".nav-primary");

        if (navbar.hasClass("open")) {
            navbar.removeClass("open");
        } else {
            navbar.addClass("open");
        }

    })

  });