// 보영샘과 소개페이지 연습 스타일
window.onload= function(){}

$(document).ready(function(){
    AOS.init(); //aos 
    const swiper = new Swiper('#portfolio .swiper', {
        // Optional parameters
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
        loop: true,
      
        // If we need pagination
        pagination: {
          el: '#portfolio .swiper-pagination',
        },
      
        // Navigation arrows
        navigation: {
          nextEl: '#portfolio .swiper-button-next',
          prevEl: '#portfolio .swiper-button-prev',
        },
      
        // And if we need scrollbar
        scrollbar: {
          el: '#portfolio .swiper-scrollbar',
        },
      });
     
     


})

$(document).ready(function(){
    $('#allMenu').click(function(){
        $(this).toggleClass('open');
    })

    $('#gnb a').click(function(e){
        e.preventDefault();
        var clicka = $(this);
        $('body, html').animate({
            scrollTop : $(clicka.attr('href')).offset().top
        },400,function(){
            $('#gnb a').removeClass('act')
            clicka.addClass('act');
        })
    })
 
})