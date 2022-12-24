
$(document).ready(function(){
    $('.list-btn-menu').on('click',function(e){
        $('.sidebar-menu').removeClass('active');
        $('.list-btn-menu').removeClass('active');
        $(this).toggleClass('active');
        var parent = $( this ).parent();
        $(parent).toggleClass('active');
    });

});