$( document ).ready(function() {
    $('.mobile-btn').click(function(){
        $(this).toggleClass('active');
        $('body').toggleClass('active');
        $('.mobile-menu').toggleClass('active');
    })
});
$(window).scroll(function(){
    if ($(window).scrollTop() >= 50) {
        $('#header').addClass('active');
        $('.mobile-menu').addClass('scrolled');
    }
    else {
        $('#header').removeClass('active');
        $('.mobile-menu').removeClass('scrolled');
    }
});
