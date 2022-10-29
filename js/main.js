$(document).ready(() =>{
    $('.header_btn-mobile-menu').on('click',function(e){
        var item_link = $('.header-link-item');
        $(this).toggleClass('active');
        $('.header_mob-list-menu').toggleClass('mob-list-active');
        $(item_link).each(function( index,value){
            $(value).toggleClass('header-link-item-active');
        });
    });
    $('.header-link-item').on('click',function(e){
        $('.header_btn-mobile-menu').toggleClass('active');
        $('.header_mob-list-menu').toggleClass('mob-list-active');
        var item_link = $('.header-link-item');
        $(item_link).each(function( index,value){
            $(value).toggleClass('header-link-item-active');
        });
    });
    $('.header_btn-popup-phone').on('click',function(e){
        $( ".header_popup-mobile" ).toggleClass("popup-slow");
    });
});