$(document).ready(function(){
    // On hover show dropdown
    $('.main-nav-menu #av-main-nav .dropdown').hover(function() {
        $(this).find('.dropdown-menu').toggleClass('show');
        if ($(this).find('.dropdown-menu').hasClass('show')) {
            $(this).find('.dropdown-toggle').focus().css('outline','none');
        }
        else{
            $(this).find('.dropdown-toggle').blur();
        }
    });

    // Primary Links Dropdown
    var primary_link_btn = $('.primary-links button');
    primary_link_btn.on('show.bs.dropdown',function(){
        $(this).css({
            'background': '#C24848',
            'color': '#FFDAA5',
            'box-shadow': '-4px 5px 14px -6px rgba(0, 0, 0, 0.3)'
        });
        $(this).find('.btn-arrow').css('transform','rotate(-90deg)');
    });
    primary_link_btn.on('hide.bs.dropdown',function(){
        $(this).css({
            'background': '#FFFFFF',
            'color': '#C24848',
            'box-shadow': '-4px 5px 14px -6px rgba(0, 0, 0, 0.3)'
        });
        $(this).find('.btn-arrow').css('transform','rotate(0deg)');
    });
});