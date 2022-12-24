function weather(){
    $.ajax({
    url: 'http://api.openweathermap.org/data/2.5/find?q=Almaty&type=like&APPID=8649768094a7b9b62aa82ddb6d48c7a0'
    }).then(function (result) {
        var obj = JSON.stringify(result);
        var temp = (result.list[0].main.temp);
        temp = temp (i - 32) / (5/9);
          console.log('result', temp);
    });
}

//scroll header menu desktop
window.addEventListener("scroll", function() {
    if (window.pageYOffset > 50) {
        //$('.header').addClass('scrooll');  
        $('.ToTop').addClass('to-top-active'); 
    } else {
        //$('.header').removeClass('scrooll');
        $('.ToTop').removeClass('to-top-active');
    }
});


//scroll to block link
const menu_links = document.querySelectorAll('.menu-link[data-goto]');
if(menu_links.length > 0){
    menu_links.forEach(menu_link =>{
      menu_link.addEventListener("click",onMenuClick);

    });

    function onMenuClick(e) {
        e.preventDefault();
      const menuLink = e.target;
      const menu_bottom_item = document.querySelectorAll('.header-link-item');
      menu_bottom_item.forEach(menu_itm =>{
        $(menu_itm).removeClass('active');
      });
      if(menuLink.dataset.goto && document.querySelector(menuLink.dataset.goto)){
        //$(menuLink).parent().addClass('active');
        /*if(menuLink.dataset.goto !='.offer'){
          if(menuLink.dataset.goto !='.page-section-33'){
            $('.header-menu_list').toggleClass("active");
            $('.burger-menu').toggleClass("active");
          }
        }*/
        if($('.header__mobile-btn').hasClass('active')){
          $('.header__mobile-btn').toggleClass('active');
          $('.header__mobile-menu').toggleClass('active');
        }
        const gotoBlock = document.querySelector(menuLink.dataset.goto);
        const gotoBlockValue = gotoBlock.getBoundingClientRect().top + pageYOffset - document.querySelector('.header').offsetHeight;
        window.scrollTo({
          top: gotoBlockValue,
          behavior: "smooth"
        });
        e.preventDefault();
      }
    }
}



$(document).ready(function(){
    //mask to input phone
    $(".phone").mask("+7-(999) 999-99-99");

    //weather();
    $('.project__slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        responsive: [
            {
              breakpoint: 1366,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            }
          ]
    });

    //open popup manager window
    $('.btn-popup-manager').on('click',function(e){
        e.preventDefault();
        $('.manager-popup').show();
    });

    //close popup manager window
    $('.manager-popup-close').on('click',function(e){
        $('.manager-popup').hide();
    });

    //open mobile menu
    $('.header__mobile-btn').on('click',function(e){
        $(this).toggleClass('active');
        $('.header__mobile-menu').toggleClass('active');
    });
});