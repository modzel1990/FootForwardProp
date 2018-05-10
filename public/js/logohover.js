$(document).ready(function () { 
    $('.imglogo').hover(
       function() { 
           $(this).attr('src', 'img/Logo FFP(white).png');
       }
    );
    $('.navbar').hover(
        function() { 
            $('img.imglogo').attr('src', 'img/Logo FFP(white).png');
        }
     );
    $('.imglogo').mouseleave(
        function() { 
            if($(document).scrollTop() <= 70) {
            $('img.imglogo').attr('src', 'img/Logo FFP(white).png');
            } else {
            $('img.imglogo').attr('src', 'img/Logo FFP.png');
             }
        }
    );
    $('.navbar').mouseleave(
        function() { 
            if($(document).scrollTop() <= 70) {
            $('img.imglogo').attr('src', 'img/Logo FFP(white).png');
            } else {
            $('img.imglogo').attr('src', 'img/Logo FFP.png');
             }
        }
    );
});