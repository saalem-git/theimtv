$(document).ready(function() {
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("fast");
            $(this).toggleClass('open');
        }
    );

    $(document).scroll(function() {
        var $nav = $(".navbar-default");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });

    // the below lines  of codes are for menu 
    $('#toggle').click(function() {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
        $('#play-icon').toggleClass('hide');
    });

    // the below lines  of codes are for 
    $('#video-click').click(function() {
        $('.videos-details').show();
    });

    // the below lines are for showing password if eye icon is clicked 
    $('.field-icon').hover(function () {
        $('.signin-pass').attr('type', 'text'); 
     }, function () {
        $('.signin-pass').attr('type', 'password'); 
     });

});