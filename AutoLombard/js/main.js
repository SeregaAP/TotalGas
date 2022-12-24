//scroll header menu desktop
window.addEventListener("scroll", function() {
    if (window.pageYOffset > 50) {
        $('.header').addClass('scroll');  
        $('.to-top').addClass('to-top-active'); 
    } else {
        $('.header').removeClass('scroll');
        $('.to-top').removeClass('to-top-active');
    }
});

//scroll to block link
const menu_links = document.querySelectorAll('.menu-link[data-goto]');
if(menu_links.length > 0){
      ////////////////////////
      /*var arrayOfStrings = window.location.href.replace('https://', '');
      arrayOfStrings = arrayOfStrings.replace('http://', '');
      var sp = arrayOfStrings.split('/');
      if(sp[1] != ''){
        alert(sp[1]);
      }*/
      /////////////////////////////////////////////////////////////
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
//animation
gsap.registerPlugin(ScrollTrigger);
gsap.to('.bounce',{
  scrollTrigger:{
    trigger: '.bounce',
    toggleActions: 'restart pause reverse pause'
  },
  scale: 1.1,
  duration: 1,
  repeat:5
});
gsap.to('.bounce2',{
  scrollTrigger:{
    trigger: '.bounce2',
    toggleActions: 'restart pause reverse pause'
  },
  scale: 1.1,
  duration: 1,
  repeat:5
});
gsap.to('.phone1',{
  scrollTrigger:{
    trigger: '.phone1',
    toggleActions: 'restart pause reverse pause'
  },
  rotation: 35,
  scale:1.1,
  duration: 1,
});
gsap.to('.phone2',{
  scrollTrigger:{
    trigger: '.phone2',
    toggleActions: 'restart pause reverse pause'
  },
  rotation: 35,
  scale:1.1,
  duration: 1,
});
gsap.to('.dollar1',{
  scrollTrigger:{
    trigger: '.dollar1',
    toggleActions: 'restart pause reverse pause'
  },
  scale: 1.1,
  duration: 1,
});
gsap.to('.dollar2',{
  scrollTrigger:{
    trigger: '.dollar2',
    toggleActions: 'restart pause reverse pause'
  },
  scale: 1.1,
  duration: 1,
});
gsap.to('.moped',{
  scrollTrigger:{
    trigger: '.moped',
    toggleActions: 'restart pause reverse pause'
  },
  x:-150,
  opacity:1,
  duration: 1,
});
gsap.to('.samokat',{
  scrollTrigger:{
    trigger: '.samokat',
    toggleActions: 'restart pause reverse pause'
  },
  x: 120,
  opacity:1,
  duration: 1,
});

//mask to input phone
$(".phone").mask("+7-(999) 999-99-99");

//offer slider
$('.offer_slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    prevArrow: $('.bt-next'),
    nextArrow: $('.bt-back')
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
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 1366,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          centerMode:false,
        }
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          centerMode:false,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode:false,
        }
      }
    ]
});

//my-client slider
$('.my-client-slider').slick({
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
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 1366,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode:false,
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        centerMode:false,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode:false,
      }
    }
  ]
});

//burger btn clic to open menu
$('.burger-menu').on('click',function(e){
    $($(this)).toggleClass("active");
    $('.header-menu_list').toggleClass("active");
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

/////
$('.btn-inf-phone').on('click',function(e){
    $('.pop-inf-phone').toggleClass('actives');
});

///
$('.btn-inf-map').on('click',function(e){
    $('.pop-inf-map').toggleClass('actives');
});

///
$('.question-close-itm').on('click',function(e){
   var pop = $(this).data('togle');
   $(this).toggleClass("question-close-itm-active");
   $(pop).toggle(
    function() {
      $(pop).fadeIn(1000);
    }, function() {});
});
///
$('.reports_open').on('click',function(e){
  $(this).toggleClass('reports_open-active');
  $('.reports_content-flex').toggle(
    function() {
      $('.reports_content-flex').fadeIn(1000);
    }, function() {});
});
//button open video popup
$(".advantage_video-btn").modalVideo({
  autoplay: true,
  autoplay:true,
  controls:0
});
});