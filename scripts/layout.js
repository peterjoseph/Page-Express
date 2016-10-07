function changeHeight() {
    var ls_height = jQuery("#left_sidebar_wrapper").height();
    var rs_height = jQuery("#right_sidebar_wrapper").height();
    var ct_height = jQuery("#wrapper").height();

    if(ct_height > (ls_height || rs_height)){
        jQuery(".left_sidebar_content").height(ct_height);
        jQuery(".right_sidebar_content").height(ct_height);
    }
}

jQuery(window).load(function(){
    changeHeight();
});

jQuery(window).resize(function() {
    changeHeight();

    if (jQuery(window).width() <= 800) {
        jQuery( "#header" ).find(".standard").css('display','none');
        jQuery( "#header" ).find(".mobile").css('display','block');

    }
    else {
        jQuery( "#header" ).find(".standard").css('display','block');
        jQuery( "#header" ).find(".mobile").css('display','none');
    }
});

jQuery( document ).ready(function() {
    jQuery( ".mobile" ).find(".menu").click(function() {
        jQuery( "#header" ).find(".standard").slideToggle();
    })
});