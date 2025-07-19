jQuery(document).ready(function($){
    $('.ips-trigger').click(function(){
        $(this).next('.ips-popup').addClass('active');
    });
    $('.ips-close').click(function(){
        $(this).closest('.ips-popup').removeClass('active');
    });
});
