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
});
