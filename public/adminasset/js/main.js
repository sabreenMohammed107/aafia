(function($) {
    "use strict";

    function destroy(thing, id) {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to delete " + thing + "!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $('#delete_' + id).submit();
            }
        })
    }
    /*----------------------------
     jQuery MeanMenu
    ------------------------------ */
    jQuery('nav#dropdown').meanmenu();
    /*----------------------------
     jQuery myTab
    ------------------------------ */
    $('#myTab a').on('click', function(e) {
        e.preventDefault()
        $(this).tab('show')
    });
    $('#myTab3 a').on('click', function(e) {
        e.preventDefault()
        $(this).tab('show')
    });
    $('#myTab4 a').on('click', function(e) {
        e.preventDefault()
        $(this).tab('show')
    });
    $('#myTabedu1 a').on('click', function(e) {
        e.preventDefault()
        $(this).tab('show')
    });

    $('#single-product-tab a').on('click', function(e) {
        e.preventDefault()
        $(this).tab('show')
    });

    $('[data-toggle="tooltip"]').tooltip();

    $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('active');
    });
    // Collapse ibox function
    $('#sidebar ul li').on('click', function() {
        var button = $(this).find('i.fa.indicator-mn');
        button.toggleClass('fa-plus').toggleClass('fa-minus');

    });
    /*-----------------------------
    	Menu Stick
    ---------------------------------*/
    $(".sicker-menu").sticky({ topSpacing: 0 });

    $('#sidebarCollapse').on('click', function() {
        $("body").toggleClass("mini-navbar");
        SmoothlyMenu();
    });
    $(document).on('click', '.header-right-menu .dropdown-menu', function(e) {
        e.stopPropagation();
    });
    /*----------------------------
     wow js active
    ------------------------------ */
    new WOW().init();
    /*----------------------------
     owl active
    ------------------------------ */
    $("#owl-demo").owlCarousel({
        autoPlay: false,
        slideSpeed: 2000,
        pagination: false,
        navigation: true,
        items: 4,
        /* transitionStyle : "fade", */
        /* [This code for animation ] */
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [768, 2],
        itemsMobile: [479, 1],
    });
    /*----------------------------
     price-slider active
    ------------------------------ */
    $("#slider-range").slider({
        range: true,
        min: 40,
        max: 600,
        values: [60, 570],
        slide: function(event, ui) {
            $("#amount").val("£" + ui.values[0] + " - £" + ui.values[1]);
        }
    });
    $("#amount").val("£" + $("#slider-range").slider("values", 0) +
        " - £" + $("#slider-range").slider("values", 1));
    /*--------------------------
     scrollUp
    ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });


    /* 1. Proloder */
    $(window).on('load', function() {
        $('#preloader-active').delay(450).fadeOut('slow');
        $('body').delay(450).css({
            'overflow': 'visible'
        });
    });

    /* 2. sticky And Scroll UP */
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if (scroll < 400) {
            $(".header-sticky").removeClass("sticky-bar");
            $('#back-top').fadeOut(500);
        } else {
            $(".header-sticky").addClass("sticky-bar");
            $('#back-top').fadeIn(500);
        }
    });

    // Scroll Up
    $('#back-top a').on("click", function() {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });


    /* 3. slick Nav */
    // mobile_menu
    var menu = $('ul#navigation');
    if (menu.length) {
        menu.slicknav({
            prependTo: ".mobile_menu",
            closedSymbol: '+',
            openedSymbol: '-'
        });
    };


    /* 6. Nice Selectorp  */
    var nice_Select = $('select');
    if (nice_Select.length) {
        nice_Select.niceSelect();
    }

    /* 7. data-background */
    $("[data-background]").each(function() {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
    });

})(jQuery);