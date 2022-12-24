//scroll header menu desktop
window.addEventListener("scroll", function() {
    if (window.pageYOffset > 50) {
        $('.header').addClass('header_scroll');  
        $('.to-top').addClass('to-top-active'); 
    } else {
        $('.header').removeClass('header_scroll');
        $('.to-top').removeClass('to-top-active');
    }
});

//scroll to block link
const menu_links = document.querySelectorAll('.menu-link[data-goto]');
if(menu_links.length > 0){
    menu_links.forEach(menu_link =>{
      menu_link.addEventListener("click",onMenuClick);
    });
    function onMenuClick(e) {
      const menuLink = e.target;
      const menu_bottom_item = document.querySelectorAll('.header-link-item');
      menu_bottom_item.forEach(menu_itm =>{
        $(menu_itm).removeClass('active');
      });
      if(menuLink.dataset.goto && document.querySelector(menuLink.dataset.goto)){
        $(menuLink).parent().addClass('active');
        if(menuLink.dataset.goto !='.offer'){
          if(menuLink.dataset.goto !='.page-section-33'){
            $('.header-menu_list').toggleClass("active");
            $('.burger-menu').toggleClass("active");
          }
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
//advantage_slider
$('.advantage_slider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    arrow:true,
    responsive: [
      {
        breakpoint: 1440,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
});
//project_slider
$('.project_slider').slick({
  infinite: true,
  autoplay: false,
  slidesToShow: 1,
  centerMode: true,
  variableWidth: true,
  responsive: [
    {
      breakpoint: 1440,
      settings: {
        centerMode: false,
        variableWidth: false,
      }
    },
    {
      breakpoint: 1024,
      settings: {
        centerMode: false,
        variableWidth: false,
        arrows:false,
        dots:true
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:false,
        dots:true
      }
    }
  ]
});
//sertificate slider
$('.certificate-slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  centerMode:true,
  centerPadding:'10px',
  autoplay: true,
  arrow:true,
  responsive: [
    {
      breakpoint: 1440,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

//burger btn clic to open menu
$('.burger-menu').on('click',function(e){
  $($(this)).toggleClass("active");
  $('.header-menu_list').toggleClass("active");
});
//header open info comany phone
$('.btn-inf-phone').on('click',function(e){
  $('.pop-inf-txt').toggleClass('actives');
});
//open popup manager window
$('.btn-popup-manager').on('click',function(e){
  e.preventDefault();
  $('.popup-manager').show();
});
//close popup manager window
$('.btn-close').on('click',function(e){
  const popup = $(this).attr('data-popup');
  $(popup).hide();
});
});