$(document).ready(function(){
    // On hover show dropdown
    $(".main-nav-menu #av-main-nav .dropdown").hover(function() {
        $(this).find(".dropdown-menu").toggleClass("show");
        if ($(this).find(".dropdown-menu").hasClass("show")) {
            $(this).find(".dropdown-toggle").focus().css("outline","none");
        }
        else{
            $(this).find(".dropdown-toggle").blur();
        }
    });
});