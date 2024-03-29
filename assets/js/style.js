$(document).ready(function(){

    // When the user scrolls down 50px from the top of the document, resize the site logo size
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {            
            $('.main-nav-menu .navbar-brand img').removeClass('at-top');
        } else {            
            $('.main-nav-menu .navbar-brand img').addClass('at-top');
        }
    }

    var page_link_active = false; // for checking if the link has already active class
    // On hover show dropdown
    $('.main-nav-menu #av-main-nav .menu-links.dropdown').mouseenter(function() {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown().addClass('show');
        if (!$(this).find('.dropdown-toggle').hasClass('active')) {
            $(this).find('.dropdown-toggle').addClass('active'); // keeping the hover effect active until dropdown is closed
        }
        else{
            page_link_active = true;
        }     
    });
    $('.main-nav-menu #av-main-nav .menu-links.dropdown').mouseleave(function(){
        $(this).find('.dropdown-menu').removeClass('show');
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
        if (!page_link_active) {
            $(this).find('.dropdown-toggle').removeClass('active');
        }        
        page_link_active = false;
    });

    // Primary Links Dropdown
    var primary_link_btn = $('.primary-links button');
    primary_link_btn.on('show.bs.dropdown',function(e){
        $(this).addClass('dd-open');
        $(this).find('.btn-arrow').css('transform','rotate(-180deg)');
        $(this).next('.dropdown-menu').first().stop(true, true).slideDown();
    });
    primary_link_btn.on('hide.bs.dropdown',function(e){
        $(this).removeClass('dd-open');
        $(this).find('.btn-arrow').css('transform','rotate(0deg)');
        e.preventDefault();
        $(this).next('.dropdown-menu').first().stop(true, true).slideUp(400, function(){
            //On Complete, we reset all active dropdown classes and attributes
            //This fixes the visual bug associated with the open class being removed too fast
            $(this).prev('.dropdown-toggle').removeClass('show');
            $(this).removeClass('show');
            $(this).prev('.dropdown-toggle').attr('aria-expanded','false');
        });
    });

    // Slide down animation for notification dropdown in desktop
    var kb_noti = $('#kb-notification');
    kb_noti.on('show.bs.dropdown',function(e){
        $(this).next('.dropdown-menu').first().stop(true, true).slideDown();
    });
    kb_noti.on('hide.bs.dropdown',function(e){
        e.preventDefault();
        $(this).next('.dropdown-menu').first().stop(true, true).slideUp(400, function(){
            //On Complete, we reset all active dropdown classes and attributes
            //This fixes the visual bug associated with the open class being removed too fast
            $(this).prev('.dropdown-toggle').removeClass('show');
            $(this).removeClass('show');
            $(this).prev('.dropdown-toggle').attr('aria-expanded','false');
        });
    });


    // Change Font Functionality
    var $font_ele_collection = $("body,.av-font-i,.av-font-ii,.av-font-iii,.av-font-iv,.av-font-v,.av-font-vi,.av-font-vii,.av-font-viii,h1,h2,h3,h4,h5,h6");
    var $font_counter = 0;
    $font_ele_collection.each(function() {
        var $this = $(this);
        $this.data("orig-size", $this.css("font-size"));
    });
    $("#av-increase-font").click(function() {
        if ($font_counter < 4) {
            changeFontSize(1);
            $(".font-size-btn .list-group-item a").removeClass("active");
            $(this).addClass("active");
            $("#av-decrease-font").removeClass("disabled");
            $font_counter++;
        }
    });
    $("#av-decrease-font").click(function() {
        if ($font_counter > 0) {
            changeFontSize(-1);
            $font_counter--;
            $(".font-size-btn .list-group-item a").removeClass("active");
            $(this).addClass("active");
            if ($font_counter == 0 && !$("#av-decrease-font").hasClass("disabled")) {
                $("#av-decrease-font").addClass("disabled");
            }
        }
    });
    $("#av-default-font").click(function() {
        $font_ele_collection.each(function() {
            var $this = $(this);
            $this.css("font-size", $this.data("orig-size"));
        });
        $font_counter = 0;
        $(".font-size-btn .list-group-item a").removeClass("active");
        $(this).addClass("active");
        if (!$("#av-decrease-font").hasClass("disabled")) {
            $("#av-decrease-font").addClass("disabled");
        }
    });

    function changeFontSize(direction) {
        $font_ele_collection.each(function() {
            var $this = $(this);
            $this.css("font-size", parseInt($this.css("font-size")) + direction);
        });
    }

    // Dark Mode Activator
    var dark_mode_counter = 0;
    $('#chk').change(function() {
        if ($('body').hasClass('dark')) {
            $('body').removeClass('dark');
            dark_mode_counter = 0;
        }
        else{
            $('body').addClass('dark').css('transition','color 0.5s,background-color 0.5s');
            dark_mode_counter = 1;
        }
    });

    // Accordion Functionality for mob menu
    $('.accordion-button').click(function(e){
        if(!$(this).hasClass('active')) {
            $('.accordion-button').removeClass('active').addClass('collapsed');
            $(this).addClass('active').removeClass('collapsed');
            $('.accordion-collapse').collapse('hide');
            $($(this).data('bs-target')).collapse('show');
            e.preventDefault();
        } else {
            return true;
        }
    });
    $('#av-mob-main-nav').on('hidden.bs.offcanvas',function(){
        $('.accordion-button').removeClass('active').addClass('collapsed');
        $('.accordion-collapse').collapse('hide');
    });

});