
    $(window).scroll(function() {
     if($(this).scrollTop() > 70)
      {
       $('.navbar').addClass('op');
       $('.imglogo').addClass('op');
      }else{
        $('.navbar').removeClass('op');
        $('.imglogo').removeClass('op');
    }
});
