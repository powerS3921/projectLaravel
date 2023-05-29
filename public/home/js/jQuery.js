$('.nav ul li a').on('click', function(){
    const goToSection = "#" + $(this).attr('class');
    var navHeight = $('.logoAndNav').outerHeight();
    $('body, html').animate({
        scrollTop: $(goToSection).offset().top - navHeight
    }, 800);
})
$('.buttonHeader').on('click', function(){
    const goToSection =  "#" + $(this).attr('data-id');
    var navHeight = $('.logoAndNav').outerHeight();
    console.log(goToSection);

    $('body, html').animate({
        scrollTop: $(goToSection).offset().top - navHeight
    }, 800);
})