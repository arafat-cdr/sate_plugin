/*
Template Name: Material Pro Admin
Author: Themedesigner
Email: niravjoshi87@gmail.com
File: js
*/
jQuery(function($) {
    "use strict";
    $(function() {
        $(".preloader").fadeOut();
    });

    // ---------------------------------------
    // web_Lover select2
    // select 2
    $(".multiple_select_tags").select2({
      tags: true,
      tokenSeparators: [','],
    });

    $(".multiple_select_areas").select2({
      tags: true
    });

    $(".single_select_2").select2();
    // ---------------------------------------

    // ============================================================== 
    // This is for the top header part and sidebar part
    // ==============================================================  
    var set = function() {
        var width = (window.innerWidth > 0) ? window.innerWidth : this.screen.width;
        var topOffset = 70;
        if (width < 1170) {
            $("body").addClass("mini-sidebar");
            $('.navbar-brand span').hide();
            $(".scroll-sidebar, .slimScrollDiv").css("overflow-x", "visible").parent().css("overflow", "visible");
            $(".sidebartoggler i").addClass("ti-menu");
        } else {
            $("body").removeClass("mini-sidebar");
            $('.navbar-brand span').show();
            //$(".sidebartoggler i").removeClass("ti-menu");
        }

        var height = ((window.innerHeight > 0) ? window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $(".page-wrapper").css("min-height", (height) + "px");
        }
    };
    $(window).ready(set);
    $(window).on("resize", set);

    // topbar stickey on scroll
    $(".fix-header .topbar").stick_in_parent({});

    // this is for close icon when navigation open in mobile view
    $(".nav-toggler").click(function() {
        $("body").toggleClass("show-sidebar");
        $(".nav-toggler i").toggleClass("ti-menu");
        $(".nav-toggler i").addClass("ti-close");
    });
    $(".sidebartoggler").on('click', function() {
        //$(".sidebartoggler i").toggleClass("ti-menu");
    });
    $(".search-box a, .search-box .app-search .srh-btn").on('click', function() {
        $(".app-search").toggle(200);
    });

    // ============================================================== 
    // Auto select left navbar
    // ============================================================== 
    $(function() {
        var url = window.location;
        var element = $('ul#sidebarnav a').filter(function() {
            return this.href == url;
        }).addClass('active').parent().addClass('active');
        while (true) {
            if (element.is('li')) {
                element = element.parent().addClass('in').parent().addClass('active');
            } else {
                break;
            }
        }
    });
    // ============================================================== 
    //tooltip
    // ============================================================== 
    $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
        // ============================================================== 
        // Sidebarmenu
        // ============================================================== 
    $(function() {
        $('#sidebarnav').metisMenu();
    });
    // ============================================================== 
    // Slimscrollbars
    // ============================================================== 
    $('.scroll-sidebar').slimScroll({
        position: 'left',
        size: "5px",
        height: '100%',
        color: '#dcdcdc'
    });
    // ============================================================== 
    // Resize all elements
    // ============================================================== 
    $("body").trigger("resize");



    $( document ).ready(function() {

        $("[name='hemisphere']").bootstrapSwitch();
        var hemisphere = $.cookie('hemisphere') == 'true' || $.cookie('hemisphere') == 1;
        $('input[name="hemisphere"]').bootstrapSwitch('state', !hemisphere);
        if (hemisphere) {
            $('body').toggleClass('southen-hemisphere');
        }

        $('input[name="hemisphere"]').on('switchChange.bootstrapSwitch', function(event, state) {
            $.cookie('hemisphere',!hemisphere,{'expires': 30});
            $('body').toggleClass('southen-hemisphere');
        });


        $("[name='nightmode']").bootstrapSwitch();
        var nightmode = $.cookie('nightmode') == 'true' || $.cookie('nightmode') == 1;
        $('input[name="nightmode"]').bootstrapSwitch('state', !nightmode);
        if (nightmode) {
            $('html').addClass('nightmode');
        }

        $('input[name="nightmode"]').on('switchChange.bootstrapSwitch', function(event, state) {
            $.cookie('nightmode',!nightmode,{'expires': 30});
            $('html').toggleClass('nightmode');
        });
    });

    $(".right-side-toggle").click(function(){$(".right-sidebar").slideDown(50),$(".right-sidebar").toggleClass("shw-rside")});

});
