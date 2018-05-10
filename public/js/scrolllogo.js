$(window).scroll(function () { 
    if($(document).scrollTop() <= 70) {
        $('.imglogo').attr('src', 'img/Logo FFP(white).png');
    } else {
        $('.imglogo').attr('src', 'img/Logo FFP.png');
    }
});