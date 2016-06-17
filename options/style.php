body {
      line-height: 1;
      background-color:<?php echo get_theme_mod('global_background_color','#FFF') ?>;
      background-image:url('<?php echo get_theme_mod('global_background_image','none') ?>');
      background-position:<?php echo get_theme_mod('global_background_image_position','initial') ?>;
      background-repeat:<?php echo get_theme_mod('global_background_image_repeat','no-repeat') ?>;
      background-size:<?php echo get_theme_mod('global_background_image_type','initial') ?>;
}

#uuni {
     width:<?php echo get_theme_mod('upper_unibar_width','100%') ?>;
     min-height:30px;
	 <?php 
     $luposition = get_theme_mod('upper_unibar_alignment','center');
     if($luposition == 'center') { ?>
        margin-left:auto;
        margin-right:auto;
    <?php } else if($luposition == 'left') { ?>
        margin-left:initial;
    <?php } else { ?>
        margin-right:initial;
    <?php } ?>
    box-sizing:border-box;
    <?php if(!get_theme_mod('upper_unibar_background_visible')) { ?>background-color:<?php echo get_theme_mod('upper_unibar_background_color','#000') ?>;<?php } else { ?>background-color:transparent;<?php } ?>
    <?php if(!get_theme_mod('upper_unibar_background_visible')) { ?>background-image:url('<?php echo get_theme_mod('upper_unibar_background_image','none') ?>');<?php } ?>
    background-position:<?php echo get_theme_mod('upper_unibar_background_image_position','initial') ?>;
    background-repeat:<?php echo get_theme_mod('upper_unibar_background_image_repeat','no-repeat') ?>;
    background-size:<?php echo get_theme_mod('upper_unibar_background_image_type','intial') ?>;
    border-top:<?php echo get_theme_mod('upper_unibar_border_top','0') ?>px <?php echo get_theme_mod('upper_unibar_border_style','solid') ?> <?php echo get_theme_mod('upper_unibar_border_color','#CCC') ?>;
    border-bottom:<?php echo get_theme_mod('upper_unibar_border_bottom','0') ?>px <?php echo get_theme_mod('upper_unibar_border_style','solid') ?> <?php echo get_theme_mod('upper_unibar_border_color','#CCC') ?>;
    border-left:<?php echo get_theme_mod('upper_unibar_border_left','0') ?>px <?php echo get_theme_mod('upper_unibar_border_style','solid') ?> <?php echo get_theme_mod('upper_unibar_border_color','#CCC') ?>;
    border-right:<?php echo get_theme_mod('upper_unibar_border_right','0') ?>px <?php echo get_theme_mod('upper_unibar_border_style','solid') ?> <?php echo get_theme_mod('upper_unibar_border_color','#CCC') ?>;
    border-radius:<?php echo get_theme_mod('upper_unibar_border_radius','0') ?>px;
    padding-top:<?php echo get_theme_mod('upper_unibar_padding_top','0') ?>px;
    padding-bottom:<?php echo get_theme_mod('upper_unibar_padding_bottom','0') ?>px;
    padding-left:<?php echo get_theme_mod('upper_unibar_padding_left','0') ?>px;
    padding-right:<?php echo get_theme_mod('upper_unibar_padding_right','0') ?>px;
    margin-top:<?php echo get_theme_mod('upper_unibar_margin_top','0') ?>px;
    margin-bottom:<?php echo get_theme_mod('upper_unibar_margin_bottom','0') ?>px;
    overflow:auto
}

#uuni_content {
     width:<?php echo get_theme_mod('upper_unibar_content_width','100%') ?>;
     height:auto;
	 <?php 
     $luposition = get_theme_mod('upper_unibar_content_alignment','center');
     if($luposition == 'center') { ?>
        margin-left:auto;
        margin-right:auto;
    <?php } else if($luposition == 'left') { ?>
        margin-left:initial;
    <?php } else { ?>
        margin-right:initial;   
    <?php } ?>
    padding:0px;
    overflow:auto
}
  
.uunih {
      <?php if(get_theme_mod('upper_unibar_widgets_header_visibility',TRUE)) { ?>display:none;<?php } ?>
      color:<?php echo get_theme_mod('upper_unibar_widgets_title_text_color','#FFF') ?>;
      font-family:<?php echo get_theme_mod('upper_unibar_widgets_title_fonts','Arial,"Helvetica Neue",Helvetica,sans-serif') ?>;
      font-size:<?php echo get_theme_mod('upper_unibar_widgets_title_font_size','18') ?>px; 
      line-height:<?php echo get_theme_mod('upper_unibar_widgets_title_font_size','18') + 2 ?>px;
      font-weight:<?php echo get_theme_mod('upper_unibar_widgets_title_font_weight','bold') ?>;
      text-align:<?php echo get_theme_mod('upper_unibar_widgets_title_font_alignment','center') ?>;
      <?php if(!get_theme_mod('upper_unibar_widgets_title_background_visible')) { ?>
        background-color:<?php echo get_theme_mod('upper_unibar_widgets_title_background_color','#383838') ?>;
      <?php } else { ?>
        background-color:transparent;
      <?php } ?>
      <?php if(!get_theme_mod('upper_unibar_widgets_title_background_visible')) { ?>
        background-image:url('<?php echo get_theme_mod('upper_unibar_widgets_title_background_image','none') ?>');
      <?php } ?>
      background-position:<?php echo get_theme_mod('upper_unibar_widgets_title_background_image_position','initial') ?>;
      background-repeat:<?php echo get_theme_mod('upper_unibar_widgets_title_background_image_repeat','no-repeat') ?>;
      background-size:<?php echo get_theme_mod('upper_unibar_widgets_title_background_image_type','initial') ?>;
      border-top:<?php echo get_theme_mod('upper_unibar_widgets_title_border_top','0') ?>px <?php echo get_theme_mod('upper_unibar_widget_title_border_style','solid') ?> <?php echo get_theme_mod('upper_unibar_widget_title_border_color','#000') ?>;
      border-bottom:<?php echo get_theme_mod('upper_unibar_widgets_title_border_bottom','0') ?>px <?php echo get_theme_mod('upper_unibar_widget_title_border_style','solid') ?> <?php echo get_theme_mod('upper_unibar_widget_title_border_color','#000') ?>;
      border-left:<?php echo get_theme_mod('upper_unibar_widgets_title_border_left','0') ?>px <?php echo get_theme_mod('upper_unibar_widget_title_border_style','solid') ?> <?php echo get_theme_mod('upper_unibar_widget_title_border_color','#000') ?>;
      border-right:<?php echo get_theme_mod('upper_unibar_widgets_title_border_right','0') ?>px <?php echo get_theme_mod('upper_unibar_widget_title_border_style','solid') ?> <?php echo get_theme_mod('upper_unibar_widget_title_border_color','#000') ?>;
      border-radius:<?php echo get_theme_mod('upper_unibar_widgets_title_border_radius','0') ?>px;
      padding-top:<?php echo get_theme_mod('upper_unibar_widgets_title_padding_top','10') ?>px;
      padding-bottom:<?php echo get_theme_mod('upper_unibar_widgets_title_padding_bottom','10') ?>px;
      padding-left:<?php echo get_theme_mod('upper_unibar_widgets_title_padding_left','0') ?>px;
      padding-right:<?php echo get_theme_mod('upper_unibar_widgets_title_padding_right','0') ?>px;
      margin-top:<?php echo get_theme_mod('upper_unibar_widgets_title_margin_top','5') ?>px;
      margin-bottom:<?php echo get_theme_mod('upper_unibar_widgets_title_margin_bottom','5') ?>px;
}

.uunic {
  	  color:<?php echo get_theme_mod('upper_unibar_widgets_text_color','#FFF') ?>;
      font-family:<?php echo get_theme_mod('upper_unibar_widgets_fonts','Arial,"Helvetica Neue",Helvetica,sans-serif') ?>;
      font-size:<?php echo get_theme_mod('upper_unibar_widgets_font_size','12') ?>px;
      line-height:<?php echo get_theme_mod('upper_unibar_widgets_font_size','12') + 5 ?>px;
      font-weight:<?php echo get_theme_mod('upper_unibar_widgets_font_weight','normal') ?>;
      text-align:<?php echo get_theme_mod('upper_unibar_widgets_font_alignment','center') ?>;
      <?php if(!get_theme_mod('upper_unibar_widgets_background_visible',TRUE)) { ?>background-color:<?php echo get_theme_mod('upper_unibar_widgets_background_color','#000') ?>;<?php } ?>
      <?php if(!get_theme_mod('upper_unibar_widgets_background_visible',TRUE)) { ?>background-image:url('<?php echo get_theme_mod('upper_unibar_widgets_background_image','none') ?>');<?php } ?>
      background-position:<?php echo get_theme_mod('upper_unibar_widgets_background_image_position','initial') ?>;
      background-repeat:<?php echo get_theme_mod('upper_unibar_widgets_background_image_repeat','no-repeat') ?>;
      background-size:<?php echo get_theme_mod('upper_unibar_widgets_background_image_type','initial') ?>;
      border-top:<?php echo get_theme_mod('upper_unibar_widgets_border_top','0') ?>px <?php echo get_theme_mod('upper_unibar_widgets_border_style','solid') ?> <?php echo get_theme_mod('upper_unibar_widgets_border_color','#F3F3F3') ?>;
      border-bottom:<?php echo get_theme_mod('upper_unibar_widgets_border_bottom','0') ?>px <?php echo get_theme_mod('upper_unibar_widgets_border_style','solid') ?> <?php echo get_theme_mod('upper_unibar_widgets_border_color','#F3F3F3') ?>;
      border-left:<?php echo get_theme_mod('upper_unibar_widgets_border_left','0') ?>px <?php echo get_theme_mod('upper_unibar_widgets_border_style','solid') ?> <?php echo get_theme_mod('upper_unibar_widgets_border_color','#F3F3F3') ?>;
      border-right:<?php echo get_theme_mod('upper_unibar_widgets_border_right','0') ?>px <?php echo get_theme_mod('upper_unibar_widgets_border_style','solid') ?> <?php echo get_theme_mod('upper_unibar_widgets_border_color','#F3F3F3') ?>;
      border-radius:<?php echo get_theme_mod('upper_unibar_widgets_border_radius','0') ?>px;
      padding-top:<?php echo get_theme_mod('upper_unibar_widgets_padding_top','0') ?>px;
      padding-bottom:<?php echo get_theme_mod('upper_unibar_widgets_padding_bottom','0') ?>px;
      padding-left:<?php echo get_theme_mod('upper_unibar_widgets_padding_left','0') ?>px;
      padding-right:<?php echo get_theme_mod('upper_unibar_widgets_padding_right','0') ?>px;
      margin-top:<?php echo get_theme_mod('upper_unibar_widgets_margin_top','0') ?>px;
      margin-bottom:<?php echo get_theme_mod('upper_unibar_widgets_margin_bottom','0') ?>px;
}

.uunic a {
    color:<?php echo get_theme_mod('upper_unibar_widgets_link_color','#F4F4F4') ?>;
    text-decoration:<?php echo get_theme_mod('upper_unibar_widgets_link_decoration','none') ?>;
    font-weight:<?php echo get_theme_mod('upper_unibar_widgets_link_weight','normal') ?>;
}

#uuni_content ul.menu {
    <?php if(get_theme_mod('upper_unibar_menu_type') == 'horizontal') { ?>
        padding-left:1px;
        padding-right:1px;
        padding:0px;
        display:inline-block;
    <?php } ?>
}

#uuni_content ul.menu li {
    <?php if(get_theme_mod('upper_unibar_menu_type') == 'vertical') { ?>
    margin-left:auto;
    margin-right:auto;
    width:<?php echo get_theme_mod('upper_unibar_vertical_menu_width','30') ?>%;
	    <?php if(!get_theme_mod('upper_unibar_vertical_menu_background_visible')) { ?>
		  background-color:<?php echo get_theme_mod('upper_unibar_vertical_menu_background_color','#333') ?>;
		  background-image:url('<?php echo get_theme_mod('upper_unibar_vertical_menu_background_image','none') ?>');
		  background-position:<?php echo get_theme_mod('upper_unibar_vertical_menu_background_image_position','initial') ?>;
		  background-repeat:<?php echo get_theme_mod('upper_unibar_vertical_menu_background_image_repeat','no-repeat') ?>;
        <?php } ?>
		text-align:<?php echo get_theme_mod('upper_unibar_vertical_menu_link_alignment','center') ?>;
		border-top:<?php echo get_theme_mod('upper_unibar_vertical_menu_border_top','0') ?>px <?php echo get_theme_mod('upper_unibar_vertical_menu_border_style','solid') ?> <?php echo get_theme_mod('upper_unibar_vertical_menu_border_color','#CCC') ?>;
        border-bottom:<?php echo get_theme_mod('upper_unibar_vertical_menu_border_bottom','0') ?>px <?php echo get_theme_mod('upper_unibar_vertical_menu_border_style','solid') ?> <?php echo get_theme_mod('upper_unibar_vertical_menu_border_color','#CCC') ?>;
		border-left:<?php echo get_theme_mod('upper_unibar_vertical_menu_border_left','0') ?>px <?php echo get_theme_mod('upper_unibar_vertical_menu_border_style','solid') ?> <?php echo get_theme_mod('upper_unibar_vertical_menu_border_color','#CCC') ?>;
		border-right:<?php echo get_theme_mod('upper_unibar_vertical_menu_border_right','0') ?>px <?php echo get_theme_mod('upper_unibar_vertical_menu_border_style','solid') ?> <?php echo get_theme_mod('upper_unibar_vertical_menu_border_color','#CCC') ?>;
		border-radius:<?php echo get_theme_mod('upper_unibar_vertical_menu_border_radius','0') ?>px;
		margin-top:<?php echo get_theme_mod('upper_unibar_vertical_menu_spacing','5') ?>px;
		margin-bottom:<?php echo get_theme_mod('upper_unibar_vertical_menu_spacing','5') ?>px;
	<?php } else { ?>
    text-align:center;
	display:inline-block;
    margin-left:<?php echo get_theme_mod('upper_unibar_horizontal_menu_spacing','5') ?>px; 
    margin-right:<?php echo get_theme_mod('upper_unibar_horizontal_menu_spacing','5') ?>px;
	<?php if(!get_theme_mod('upper_unibar_horizontal_menu_background_visible')) { ?>
		background-color:<?php echo get_theme_mod('upper_unibar_horizontal_menu_background_color','#333') ?>;
		background-image:url('<?php echo get_theme_mod('upper_unibar_horizontal_menu_background_image','none') ?>');
		background-position:<?php echo get_theme_mod('upper_unibar_horizontal_menu_background_image_position','initial') ?>;
		background-repeat:<?php echo get_theme_mod('upper_unibar_horizontal_menu_background_image_repeat','no-repeat') ?>;
    <?php } ?>
		border-top:<?php echo get_theme_mod('upper_unibar_horizontal_menu_border_top','0') ?>px <?php echo get_theme_mod('upper_unibar_horizontal_menu_border_style','solid') ?> <?php echo get_theme_mod('upper_unibar_horizontal_menu_border_color','#CCC') ?>;
		border-bottom:<?php echo get_theme_mod('upper_unibar_horizontal_menu_border_bottom','0') ?>px <?php echo get_theme_mod('upper_unibar_horizontal_menu_border_style','solid') ?> <?php echo get_theme_mod('upper_unibar_horizontal_menu_border_color','#CCC') ?>;
		border-left:<?php echo get_theme_mod('upper_unibar_horizontal_menu_border_left','0') ?>px <?php echo get_theme_mod('upper_unibar_horizontal_menu_border_style','solid') ?> <?php echo get_theme_mod('upper_unibar_horizontal_menu_border_color','#CCC') ?>;
		border-right:<?php echo get_theme_mod('upper_unibar_horizontal_menu_border_right','0') ?>px <?php echo get_theme_mod('upper_unibar_horizontal_menu_border_style','solid') ?> <?php echo get_theme_mod('upper_unibar_horizontal_menu_border_color','#CCC') ?>;
		border-radius:<?php echo get_theme_mod('upper_unibar_horizontal_menu_border_radius','0') ?>px;
	<?php } ?>
  }
  
  #uuni_content ul.menu li:hover {
	<?php if(get_theme_mod('upper_unibar_menu_type') == 'vertical') { ?>
		<?php if(!get_theme_mod('upper_unibar_vertical_menu_background_visible')) { ?>
		background-color:<?php echo get_theme_mod('upper_unibar_vertical_menu_hover_background_color','#CCC') ?>;
		background-image:url('<?php echo get_theme_mod('upper_unibar_vertical_menu_hover_background_image','none') ?>');
		background-position:<?php echo get_theme_mod('upper_unibar_vertical_menu_background_image_position','initial') ?>;
		background-repeat:<?php echo get_theme_mod('upper_unibar_vertical_menu_background_image_repeat','no-repeat') ?>;
		<?php } ?>
	<?php } else { ?>
		<?php if(!get_theme_mod('upper_unibar_horizontal_menu_background_visible')) { ?>
		background-color:<?php echo get_theme_mod('upper_unibar_horizontal_menu_hover_background_color','#CCC') ?>;
		background-image:url('<?php echo get_theme_mod('upper_unibar_horizontal_menu_hover_background_image','none') ?>');
		background-position:<?php echo get_theme_mod('upper_unibar_horizontal_menu_background_image_position','initial') ?>;
		background-repeat:<?php echo get_theme_mod('upper_unibar_horizontal_menu_background_image_repeat','no-repeat') ?>;
		<?php } ?>
  	<?php } ?>
  }
  
  #uuni_content ul.menu li a {
	<?php if(get_theme_mod('upper_unibar_menu_type') == 'vertical') { ?>
		color:<?php echo get_theme_mod('upper_unibar_vertical_menu_link_color','#FFF') ?>;
		font-family:<?php echo get_theme_mod('upper_unibar_vertical_menu_fonts','Arial,"Helvetica Neue",Helvetica,sans-serif') ?>;
		font-weight:<?php echo get_theme_mod('upper_unibar_vertical_menu_font_weight','normal') ?>;
		text-decoration:<?php echo get_theme_mod('upper_unibar_vertical_menu_link_decoration','none') ?>;
		height:<?php echo (get_theme_mod('upper_unibar_vertical_menu_height','25') + get_theme_mod('upper_unibar_widgets_font_size','12')); ?>px;
		line-height:<?php echo (get_theme_mod('upper_unibar_vertical_menu_height','25') + get_theme_mod('upper_unibar_widgets_font_size','12')) ?>px;
		width:100%;
        display:inline-block;
	<?php } else { ?>
        text-align:center;
        display: inline-block;
		color:<?php echo get_theme_mod('upper_unibar_horizontal_menu_link_color','#FFF') ?>;
		font-family:<?php echo get_theme_mod('upper_unibar_horizontal_menu_fonts','Arial,"Helvetica Neue",Helvetica,sans-serif') ?>;
		font-weight:<?php echo get_theme_mod('upper_unibar_horizontal_menu_font_weight','normal') ?>;
		text-decoration:<?php echo get_theme_mod('upper_unibar_horizontal_menu_link_decoration','none') ?>;
		height:<?php echo (get_theme_mod('upper_unibar_horizontal_menu_height') + get_theme_mod('upper_unibar_widgets_font_size')) ?>px; 
        line-height:<?php echo (get_theme_mod('upper_unibar_horizontal_menu_height','20') + get_theme_mod('upper_unibar_widgets_font_size','12')) ?>px;  
		padding-left:<?php echo get_theme_mod('upper_unibar_horizontal_menu_width','10') ?>px;
		padding-right:<?php echo get_theme_mod('upper_unibar_horizontal_menu_width','10') ?>px;
	<?php } ?>
  }
  
  #uuni_content ul.menu li a:hover {
	<?php if(get_theme_mod('upper_unibar_menu_type') == 'vertical') { ?>
    	<?php if(get_theme_mod('upper_unibar_vertical_menu_link_hover_color')) { ?>color:<?php echo get_theme_mod('upper_unibar_vertical_menu_link_hover_color') ?>;<?php } ?>
	<?php } else { ?>	
  		<?php if(get_theme_mod('upper_unibar_horizontal_menu_link_hover_color')) { ?>color:<?php echo get_theme_mod('upper_unibar_horizontal_menu_link_hover_color') ?>;<?php } ?>
	<?php } ?>
  }
  
#wrapper {
    <?php if(get_theme_mod('cw_width_option','fixed') == 'fixed') { ?>
        width:<?php echo get_theme_mod('cw_width_fixed','1100') ?>px;
    <? }  else { ?>
        width:<?php echo get_theme_mod('cw_width_fluid','100') ?>%;
    <?php } ?>
    <?php if(get_theme_mod('cw_alignment','center') == 'center') { ?>
        margin-left:auto; margin-right:auto;
    <? }  else if (get_theme_mod('cw_alignment') == 'left') { ?>
        margin-left:initial; margin-right:auto;
    <?php } else { ?>
        margin-left:auto; margin-right:initial;
    <?php } ?>
    <?php if(!get_theme_mod('cw_background_visibility')) { ?>
      background-color:<?php echo get_theme_mod('cw_background_color','#FFF') ?>;
      background-image:url('<?php echo get_theme_mod('cw_background_image','none') ?>');
      background-position:<?php echo get_theme_mod('cw_background_image_position','initial') ?>;
      background-repeat:<?php echo get_theme_mod('cw_background_image_repeat','no-repeat') ?>;
      background-size:<?php echo get_theme_mod('cw_background_image_type','initial') ?>;
    <?php } else { ?>
      background-color:transparent;
    <?php } ?>
    border-top:<?php echo get_theme_mod('cw_border_top','0') ?>px <?php echo get_theme_mod('cw_border_style','solid') ?> <?php echo get_theme_mod('cw_border_color','#CCC') ?>;
    border-bottom:<?php echo get_theme_mod('cw_border_bottom','0') ?>px <?php echo get_theme_mod('cw_border_style','solid') ?> <?php echo get_theme_mod('cw_border_color','#CCC') ?>;
    border-left:<?php echo get_theme_mod('cw_border_left','0') ?>px <?php echo get_theme_mod('cw_border_style','solid') ?> <?php echo get_theme_mod('cw_border_color','#CCC') ?>;
    border-right:<?php echo get_theme_mod('cw_border_right','0') ?>px <?php echo get_theme_mod('cw_border_style','solid') ?> <?php echo get_theme_mod('cw_border_color','#CCC') ?>;
    border-radius:<?php echo get_theme_mod('cw_border_radius','0') ?>px;
    padding-top:<?php echo get_theme_mod('cw_padding_top','0') ?>px;
    padding-bottom:<?php echo get_theme_mod('cw_padding_bottom','0') ?>px;
    padding-left:<?php echo get_theme_mod('cw_padding_left','0') ?>px;
    padding-right:<?php echo get_theme_mod('cw_padding_right','0') ?>px;
    margin-top:<?php echo get_theme_mod('cw_margin_top','0') ?>px;
    margin-bottom:<?php echo get_theme_mod('cw_margin_bottom','0') ?>px;
    overflow:auto;
}


.ct.ls .left_sidebar {
    float:left;
    <?php if(get_theme_mod('left_sidebar_width_option','fixed') == 'fixed') { ?>
        width:<?php echo (get_theme_mod('left_sidebar_width_fixed','30') * 10) ?>px;
        max-width:<?php echo get_theme_mod('cw_width_fixed','1100') / 3 ?>px;
    <? }  else { ?>
        width:<?php echo get_theme_mod('left_sidebar_width_fluid','30') ?>%;
    <?php } ?>
}

.ct.ls .page {
    <?php if(get_theme_mod('left_sidebar_width_option','fixed') == 'fixed') { ?>
        <?php if((get_theme_mod('left_sidebar_width_fixed','30') * 10) > (get_theme_mod('cw_width_fixed','1100') / 3)) { ?>
            margin-left:<?php echo (get_theme_mod('cw_width_fixed','1100') / 3) ?>px;
        <? }  else { ?>
            margin-left:<?php echo (get_theme_mod('left_sidebar_width_fixed','30') * 10) ?>px;
        <?php } ?>
    <? }  else { ?>
            margin-left:<?php echo (get_theme_mod('left_sidebar_width_fluid','30')) ?>%;
    <?php } ?>
}

.ct.rs .right_sidebar {
    float:right;
    <?php if(get_theme_mod('right_sidebar_width_option','fixed') == 'fixed') { ?>
        width:<?php echo (get_theme_mod('right_sidebar_width_fixed','30') * 10) ?>px;
        max-width:<?php echo get_theme_mod('cw_width_fixed','1100') / 3 ?>px;
    <? }  else { ?>
        width:<?php echo get_theme_mod('right_sidebar_width_fluid','30') ?>%;
    <?php } ?>
}

.ct.rs .page {
    <?php if(get_theme_mod('right_sidebar_width_option','fixed') == 'fixed') { ?>
        <?php if((get_theme_mod('right_sidebar_width_fixed','30') * 10) > (get_theme_mod('cw_width_fixed','1100') / 3)) { ?>
            margin-right:<?php echo (get_theme_mod('cw_width_fixed','1100') / 3) ?>px;
        <? }  else { ?>
            margin-right:<?php echo (get_theme_mod('right_sidebar_width_fixed','30') * 10) ?>px;
        <?php } ?>
    <? }  else { ?>
        margin-right:<?php echo get_theme_mod('right_sidebar_width_fluid','30') ?>%;
    <?php } ?>
}

.ct.ls.rs .left_sidebar {
    float:left;
    <?php if(get_theme_mod('left_sidebar_width_option','fixed') == 'fixed') { ?>
        width:<?php echo (get_theme_mod('left_sidebar_width_fixed','30') * 10) ?>px;
        max-width:<?php echo get_theme_mod('cw_width_fixed','1100') / 3 ?>px;
    <? }  else { ?>
        width:<?php echo get_theme_mod('left_sidebar_width_fluid','30') ?>%;
    <?php } ?>
}

.ct.ls.rs .page {
    <?php if(get_theme_mod('left_sidebar_width_option','fixed') == 'fixed') { ?>
        <?php if((get_theme_mod('left_sidebar_width_fixed','30') * 10) > (get_theme_mod('cw_width_fixed','1100') / 3)) { ?>
            margin-left:<?php echo (get_theme_mod('cw_width_fixed','1100') / 3) ?>px;
        <? }  else { ?>
            margin-left:<?php echo (get_theme_mod('left_sidebar_width_fixed','30') * 10) ?>px;
        <?php } ?>
    <? }  else { ?>
            margin-left:<?php echo (get_theme_mod('left_sidebar_width_fluid','30')) ?>%;
    <?php } ?>
    <?php if(get_theme_mod('right_sidebar_width_option','fixed') == 'fixed') { ?>
        <?php if((get_theme_mod('right_sidebar_width_fixed','30') * 10) > (get_theme_mod('cw_width_fixed','1100') / 3)) { ?>
            margin-right:<?php echo (get_theme_mod('cw_width_fixed','1100') / 3) ?>px;
        <? }  else { ?>
            margin-right:<?php echo (get_theme_mod('right_sidebar_width_fixed','30') * 10) ?>px;
        <?php } ?>
    <? }  else { ?>
        margin-right:<?php echo get_theme_mod('right_sidebar_width_fluid','30') ?>%;
    <?php } ?>
}

.ct.ls.rs  .right_sidebar {
    float:right;
    <?php if(get_theme_mod('right_sidebar_width_option','fixed') == 'fixed') { ?>
        width:<?php echo (get_theme_mod('right_sidebar_width_fixed','30') * 10) ?>px;
        max-width:<?php echo get_theme_mod('cw_width_fixed','1100') / 3 ?>px;
    <? }  else { ?>
        width:<?php echo get_theme_mod('right_sidebar_width_fluid','30') ?>%;
    <?php } ?>
}

#left_sidebar_wrapper {
	   padding:<?php echo get_theme_mod('ls_layout_padding','0') ?>px; 
}

.left_sidebar_content {
    <?php if(!get_theme_mod('left_sidebar_background_visible')) { ?>
    background-color:<?php echo get_theme_mod('left_sidebar_background_color','#F4F4F4') ?>;
    <?php } else { ?>background-color:transparent;<?php } ?>
    <?php if(!get_theme_mod('left_sidebar_background_visible')) { ?>
        background-image:url('<?php echo get_theme_mod('left_sidebar_background_image','none') ?>');
    <?php } ?>
    background-position:<?php echo get_theme_mod('left_sidebar_background_image_position','initial') ?>;
    background-repeat:<?php echo get_theme_mod('left_sidebar_background_image_repeat','no-repeat') ?>;
    background-size:<?php echo get_theme_mod('left_sidebar_background_image_type','initial') ?>;
    box-sizing:border-box;
    border-top:<?php echo get_theme_mod('left_sidebar_border_top','0') ?>px <?php echo get_theme_mod('left_sidebar_border_style','solid') ?> <?php echo get_theme_mod('left_sidebar_border_color','#CCC') ?>;
    border-bottom:<?php echo get_theme_mod('left_sidebar_border_bottom','0') ?>px <?php echo get_theme_mod('left_sidebar_border_style','solid') ?> <?php echo get_theme_mod('left_sidebar_border_color','#CCC') ?>;
    border-left:<?php echo get_theme_mod('left_sidebar_border_left','0') ?>px <?php echo get_theme_mod('left_sidebar_border_style','solid') ?> <?php echo get_theme_mod('left_sidebar_border_color','#CCC') ?>;
    border-right:<?php echo get_theme_mod('left_sidebar_border_right','1') ?>px <?php echo get_theme_mod('left_sidebar_border_style','solid') ?> <?php echo get_theme_mod('left_sidebar_border_color','#CCC') ?>;
    border-radius:<?php echo get_theme_mod('left_sidebar_border_radius','0') ?>px;
    padding-top:<?php echo get_theme_mod('left_sidebar_padding_top','10') ?>px;
    padding-bottom:<?php echo get_theme_mod('left_sidebar_padding_bottom','10') ?>px;
    padding-left:<?php echo get_theme_mod('left_sidebar_padding_left','10') ?>px;
    padding-right:<?php echo get_theme_mod('left_sidebar_padding_right','10') ?>px;
    margin-top:<?php echo get_theme_mod('left_sidebar_margin_top','0') ?>px;
    margin-bottom:<?php echo get_theme_mod('left_sidebar_margin_bottom','0') ?>px;
}

.left_sidebar_widget {
      color:<?php echo get_theme_mod('left_sidebar_widgets_content_text_color','#FFF') ?>;
      font-family:<?php echo get_theme_mod('left_sidebar_widgets_content_fonts','Arial,"Helvetica Neue",Helvetica,sans-serif') ?>;
      font-size:<?php echo get_theme_mod('left_sidebar_widgets_content_font_size','14') ?>px;
      line-height:<?php echo get_theme_mod('left_sidebar_widgets_content_font_size','14') + 5 ?>px;
      font-weight:<?php echo get_theme_mod('left_sidebar_widgets_content_font_weight','normal') ?>;
      text-align:<?php echo get_theme_mod('left_sidebar_widgets_content_font_alignment','left') ?>;
      <?php if(!get_theme_mod('left_sidebar_widgets_content_background_visible')) { ?>
        background-color:<?php echo get_theme_mod('left_sidebar_widgets_content_background_color','#575757') ?>;
      <?php } ?>
      <?php if(!get_theme_mod('left_sidebar_widgets_content_background_visible')) { ?>
        background-image:url('<?php echo get_theme_mod('left_sidebar_widgets_content_background_image','none') ?>');
      <?php } ?>
      background-position:<?php echo get_theme_mod('left_sidebar_widgets_content_background_image_position','initial') ?>;
      background-repeat:<?php echo get_theme_mod('left_sidebar_widgets_content_background_image_repeat','no-repeat') ?>;
      background-size:<?php echo get_theme_mod('left_sidebar_widgets_content_background_image_type','initial') ?>;
      border-top:<?php echo get_theme_mod('left_sidebar_widgets_content_border_top','0') ?>px <?php echo get_theme_mod('left_sidebar_widgets_content_border_style','solid') ?> <?php echo get_theme_mod('left_sidebar_widgets_content_border_color','#000') ?>;
      border-bottom:<?php echo get_theme_mod('left_sidebar_widgets_content_border_bottom','0') ?>px <?php echo get_theme_mod('left_sidebar_widgets_content_border_style','solid') ?> <?php echo get_theme_mod('left_sidebar_widgets_content_border_color','#000') ?>;
      border-left:<?php echo get_theme_mod('left_sidebar_widgets_content_border_left','0') ?>px <?php echo get_theme_mod('left_sidebar_widgets_content_border_style','solid') ?> <?php echo get_theme_mod('left_sidebar_widgets_content_border_color','#000') ?>;
      border-right:<?php echo get_theme_mod('left_sidebar_widgets_content_border_right','0') ?>px <?php echo get_theme_mod('left_sidebar_widgets_content_border_style','solid') ?> <?php echo get_theme_mod('left_sidebar_widgets_content_border_color','#000') ?>;
      border-radius:<?php echo get_theme_mod('left_sidebar_widgets_content_border_radius','0') ?>px;
      padding-top:<?php echo get_theme_mod('left_sidebar_widgets_content_padding_top','10') ?>px;
      padding-bottom:<?php echo get_theme_mod('left_sidebar_widgets_content_padding_bottom','10') ?>px;
      padding-left:<?php echo get_theme_mod('left_sidebar_widgets_content_padding_left','10') ?>px;
      padding-right:<?php echo get_theme_mod('left_sidebar_widgets_content_padding_right','10') ?>px;
      margin-top:<?php echo get_theme_mod('left_sidebar_widgets_content_margin_top','10') ?>px;
      margin-bottom:<?php echo get_theme_mod('left_sidebar_widgets_content_margin_bottom','10') ?>px;
}

.left_sidebar_widget a {
    color:<?php echo get_theme_mod('left_sidebar_widgets_content_link_color','#FFF') ?>;
    text-decoration:<?php echo get_theme_mod('left_sidebar_widgets_content_link_decoration','underline') ?>;
    font-weight:<?php echo get_theme_mod('left_sidebar_widgets_content_link_weight','normal') ?>;
}

.left_sidebar_widget_title {
      <?php if(get_theme_mod('left_sidebar_widgets_header_visibility')) { ?>display:none;<?php } ?>
      color:<?php echo get_theme_mod('left_sidebar_widgets_title_text_color','#FFF') ?>;
      font-family:<?php echo get_theme_mod('left_sidebar_widgets_title_fonts','Arial,"Helvetica Neue",Helvetica,sans-serif') ?>;
      font-size:<?php echo get_theme_mod('left_sidebar_widgets_title_font_size','18') ?>px; 
      line-height:<?php echo get_theme_mod('left_sidebar_widgets_title_font_size','18') + 2 ?>px;
      font-weight:<?php echo get_theme_mod('left_sidebar_widgets_title_font_weight','bold') ?>;
      text-align:<?php echo get_theme_mod('left_sidebar_widgets_title_font_alignment','center') ?>;
      <?php if(!get_theme_mod('left_sidebar_widgets_title_background_visible')) { ?>
        background-color:<?php echo get_theme_mod('left_sidebar_widgets_title_background_color','#383838') ?>;
      <?php } else { ?>
        background-color:transparent;
      <?php } ?>
      <?php if(!get_theme_mod('left_sidebar_widgets_title_background_visible')) { ?>
        background-image:url('<?php echo get_theme_mod('left_sidebar_widgets_title_background_image','none') ?>');
      <?php } ?>
      background-position:<?php echo get_theme_mod('left_sidebar_widgets_title_background_image_position','initial') ?>;
      background-repeat:<?php echo get_theme_mod('left_sidebar_widgets_title_background_image_repeat','no-repeat') ?>;
      background-size:<?php echo get_theme_mod('left_sidebar_widgets_title_background_image_type','initial') ?>;
      border-top:<?php echo get_theme_mod('left_sidebar_widgets_title_border_top','0') ?>px <?php echo get_theme_mod('left_sidebar_widgets_title_border_style','solid') ?> <?php echo get_theme_mod('left_sidebar_widgets_title_border_color','#000') ?>;
      border-bottom:<?php echo get_theme_mod('left_sidebar_widgets_title_border_bottom','0') ?>px <?php echo get_theme_mod('left_sidebar_widgets_title_border_style','solid') ?> <?php echo get_theme_mod('left_sidebar_widgets_title_border_color','#000') ?>;
      border-left:<?php echo get_theme_mod('left_sidebar_widgets_title_border_left','0') ?>px <?php echo get_theme_mod('left_sidebar_widgets_title_border_style','solid') ?> <?php echo get_theme_mod('left_sidebar_widgets_title_border_color','#000') ?>;
      border-right:<?php echo get_theme_mod('left_sidebar_widgets_title_border_right','0') ?>px <?php echo get_theme_mod('left_sidebar_widgets_title_border_style','solid') ?> <?php echo get_theme_mod('left_sidebar_widgets_title_border_color','#000') ?>;
      border-radius:<?php echo get_theme_mod('left_sidebar_widgets_title_border_radius','0') ?>px;
      padding-top:<?php echo get_theme_mod('left_sidebar_widgets_title_padding_top','10') ?>px;
      padding-bottom:<?php echo get_theme_mod('left_sidebar_widgets_title_padding_bottom','10') ?>px;
      padding-left:<?php echo get_theme_mod('left_sidebar_widgets_title_padding_left','0') ?>px;
      padding-right:<?php echo get_theme_mod('left_sidebar_widgets_title_padding_right','0') ?>px;
      margin-top:<?php echo get_theme_mod('left_sidebar_widgets_title_margin_top','5') ?>px;
      margin-bottom:<?php echo get_theme_mod('left_sidebar_widgets_title_margin_bottom','5') ?>px;
}


.left_sidebar_widget ul.menu {
	display:block;
}

.left_sidebar_widget ul.menu li {
    display:block;
    <?php if(!get_theme_mod('left_sidebar_menu_background_visible')) { ?>
        background-color:<?php echo get_theme_mod('left_sidebar_menu_background_color','#9E9E9E') ?>;
        background-image:url('<?php echo get_theme_mod('left_sidebar_menu_background_image','none') ?>');
        background-position:<?php echo get_theme_mod('left_sidebar_menu_background_image_position','none') ?>;
        background-repeat:<?php echo get_theme_mod('left_sidebar_menu_background_image_repeat','no-repeat') ?>;
    <?php } ?>
    text-align:<?php echo get_theme_mod('left_sidebar_menu_link_alignment','center') ?>;
    border-top:<?php echo get_theme_mod('left_sidebar_menu_border_top','0') ?>px <?php echo get_theme_mod('left_sidebar_menu_border_style','solid') ?> <?php echo get_theme_mod('left_sidebar_menu_border_color','#000') ?>;
    border-bottom:<?php echo get_theme_mod('left_sidebar_menu_border_bottom','0') ?>px <?php echo get_theme_mod('left_sidebar_menu_border_style','solid') ?> <?php echo get_theme_mod('left_sidebar_menu_border_color','#000') ?>;
    border-left:<?php echo get_theme_mod('left_sidebar_menu_border_left','0') ?>px <?php echo get_theme_mod('left_sidebar_menu_border_style','solid') ?> <?php echo get_theme_mod('left_sidebar_menu_border_color','#000') ?>;
    border-right:<?php echo get_theme_mod('left_sidebar_menu_border_right','0') ?>px <?php echo get_theme_mod('left_sidebar_menu_border_style','solid') ?> <?php echo get_theme_mod('left_sidebar_menu_border_color','#000') ?>;
    border-radius:<?php echo get_theme_mod('left_sidebar_menu_border_radius','0') ?>px;
    margin-top:<?php echo get_theme_mod('left_sidebar_menu_spacing','5') ?>px;
    margin-bottom:<?php echo get_theme_mod('left_sidebar_menu_spacing','5') ?>px;
}

.left_sidebar_widget ul.menu li:hover {
  <?php if(!get_theme_mod('left_sidebar_menu_background_visible')) { ?>
    background-color:<?php echo get_theme_mod('left_sidebar_menu_hover_background_color','#C7C7C7') ?>;
    background-image:url('<?php echo get_theme_mod('left_sidebar_menu_hover_background_image','none') ?>');
    background-position:<?php echo get_theme_mod('left_sidebar_menu_background_image_position','initial') ?>;
    background-repeat:<?php echo get_theme_mod('left_sidebar_menu_background_image_repeat','no-repeat') ?>;
  <?php } ?>
}

.left_sidebar_widget ul.menu li a {
    display:block;
    color:<?php echo get_theme_mod('left_sidebar_menu_link_color','#333') ?>;
    font-family:<?php echo get_theme_mod('left_sidebar_menu_fonts','Arial,"Helvetica Neue",Helvetica,sans-serif') ?>;
    font-weight:<?php echo get_theme_mod('left_sidebar_menu_font_weight','normal') ?>;
    font-size:<?php echo get_theme_mod('left_sidebar_widgets_content_font_size','14') ?>px;
    text-decoration:<?php echo get_theme_mod('left_sidebar_menu_link_decoration','none') ?>;
    height:<?php $lmheight = (get_theme_mod('left_sidebar_menu_height','25') + get_theme_mod('left_sidebar_widgets_content_font_size','14'));
      echo $lmheight; ?>px;
    line-height:<?php echo (get_theme_mod('left_sidebar_menu_height','25') + get_theme_mod('left_sidebar_widgets_content_font_size','14')) ?>px;
    padding-left:<?php echo get_theme_mod('left_sidebar_menu_width','15') ?>px;
    padding-right:<?php echo get_theme_mod('left_sidebar_menu_width','15') ?>px;
}

.left_sidebar_widget ul.menu li a:hover{
    display:block;
    color:<?php echo get_theme_mod('left_sidebar_menu_link_hover_color','#333') ?>;
}

#right_sidebar_wrapper {
    padding:<?php echo get_theme_mod('right_sidebar_layout_padding','0') ?>px;
}

.right_sidebar_content {
    <?php if(!get_theme_mod('right_sidebar_background_visible')) { ?>
        background-color:<?php echo get_theme_mod('right_sidebar_background_color','#F4F4F4') ?>;
    <?php } else { ?>background-color:transparent;<?php } ?>
    <?php if(!get_theme_mod('right_sidebar_background_visible')) { ?>
        background-image:url('<?php echo get_theme_mod('right_sidebar_background_image','none') ?>');
    <?php } ?>
    background-position:<?php echo get_theme_mod('right_sidebar_background_image_position','initial') ?>;
    background-repeat:<?php echo get_theme_mod('right_sidebar_background_image_repeat','no-repeat') ?>;
    background-size:<?php echo get_theme_mod('right_sidebar_background_image_type','initial') ?>;
    box-sizing:border-box;
    border-top:<?php echo get_theme_mod('right_sidebar_border_top','0') ?>px <?php echo get_theme_mod('right_sidebar_border_style','solid') ?> <?php echo get_theme_mod('right_sidebar_border_color','#CCC') ?>;
    border-bottom:<?php echo get_theme_mod('right_sidebar_border_bottom','0') ?>px <?php echo get_theme_mod('right_sidebar_border_style','solid') ?> <?php echo get_theme_mod('right_sidebar_border_color','#CCC') ?>;
    border-left:<?php echo get_theme_mod('right_sidebar_border_left','1') ?>px <?php echo get_theme_mod('right_sidebar_border_style','solid') ?> <?php echo get_theme_mod('right_sidebar_border_color','#CCC') ?>;
    border-right:<?php echo get_theme_mod('right_sidebar_border_right','0') ?>px <?php echo get_theme_mod('right_sidebar_border_style','solid') ?> <?php echo get_theme_mod('right_sidebar_border_color','#CCC') ?>;
    border-radius:<?php echo get_theme_mod('right_sidebar_border_radius','0') ?>px;
    padding-top:<?php echo get_theme_mod('right_sidebar_padding_top','10') ?>px;
    padding-bottom:<?php echo get_theme_mod('right_sidebar_padding_bottom','10') ?>px;
    padding-left:<?php echo get_theme_mod('right_sidebar_padding_left','10') ?>px;
    padding-right:<?php echo get_theme_mod('right_sidebar_padding_right','10') ?>px;
    margin-top:<?php echo get_theme_mod('right_sidebar_margin_top','0') ?>px;
    margin-bottom:<?php echo get_theme_mod('right_sidebar_margin_bottom','0') ?>px;
}

.right_sidebar_widget {
      color:<?php echo get_theme_mod('right_sidebar_widgets_content_text_color','#FFF') ?>;
      font-family:<?php echo get_theme_mod('right_sidebar_widgets_content_fonts','Arial,"Helvetica Neue",Helvetica,sans-serif') ?>;
      font-size:<?php echo get_theme_mod('right_sidebar_widgets_content_font_size','14') ?>px;
      line-height:<?php echo get_theme_mod('right_sidebar_widgets_content_font_size','14') + 5 ?>px;
      font-weight:<?php echo get_theme_mod('right_sidebar_widgets_content_font_weight','normal') ?>;
      text-align:<?php echo get_theme_mod('right_sidebar_widgets_content_font_alignment','left') ?>;
      <?php if(!get_theme_mod('right_sidebar_widgets_content_background_visible')) { ?>
        background-color:<?php echo get_theme_mod('right_sidebar_widgets_content_background_color','#575757') ?>;
      <?php } ?>
      <?php if(!get_theme_mod('right_sidebar_widgets_content_background_visible')) { ?>
        background-image:url('<?php echo get_theme_mod('right_sidebar_widgets_content_background_image','none') ?>');
      <?php } ?>
      background-position:<?php echo get_theme_mod('right_sidebar_widgets_content_background_image_position','initial') ?>;
      background-repeat:<?php echo get_theme_mod('right_sidebar_widgets_content_background_image_repeat','no-repeat') ?>;
      background-size:<?php echo get_theme_mod('right_sidebar_widgets_content_background_image_type','initial') ?>;
      border-top:<?php echo get_theme_mod('right_sidebar_widgets_content_border_top','0') ?>px <?php echo get_theme_mod('right_sidebar_widgets_content_border_style','solid') ?> <?php echo get_theme_mod('right_sidebar_widgets_content_border_color','#000') ?>;
      border-bottom:<?php echo get_theme_mod('right_sidebar_widgets_content_border_bottom','0') ?>px <?php echo get_theme_mod('right_sidebar_widgets_content_border_style','solid') ?> <?php echo get_theme_mod('right_sidebar_widgets_content_border_color','#000') ?>;
      border-left:<?php echo get_theme_mod('right_sidebar_widgets_content_border_left','0') ?>px <?php echo get_theme_mod('right_sidebar_widgets_content_border_style','solid') ?> <?php echo get_theme_mod('right_sidebar_widgets_content_border_color','#000') ?>;
      border-right:<?php echo get_theme_mod('right_sidebar_widgets_content_border_right','0') ?>px <?php echo get_theme_mod('right_sidebar_widgets_content_border_style','solid') ?> <?php echo get_theme_mod('right_sidebar_widgets_content_border_color','#000') ?>;
      border-radius:<?php echo get_theme_mod('right_sidebar_widgets_content_border_radius','0') ?>px;
      padding-top:<?php echo get_theme_mod('right_sidebar_widgets_content_padding_top','10') ?>px;
      padding-bottom:<?php echo get_theme_mod('right_sidebar_widgets_content_padding_bottom','10') ?>px;
      padding-left:<?php echo get_theme_mod('right_sidebar_widgets_content_padding_left','10') ?>px;
      padding-right:<?php echo get_theme_mod('right_sidebar_widgets_content_padding_right','10') ?>px;
      margin-top:<?php echo get_theme_mod('right_sidebar_widgets_content_margin_top','10') ?>px;
      margin-bottom:<?php echo get_theme_mod('right_sidebar_widgets_content_margin_bottom','10') ?>px;
}

.right_sidebar_widget a {
    color:<?php echo get_theme_mod('right_sidebar_widgets_content_link_color','#FFF') ?>;
    text-decoration:<?php echo get_theme_mod('right_sidebar_widgets_content_link_decoration','underline') ?>;
    font-weight:<?php echo get_theme_mod('right_sidebar_widgets_content_link_weight','normal') ?>;
}

.right_sidebar_widget_title {
      <?php if(get_theme_mod('right_sidebar_widgets_header_visibility')) { ?>display:none;<?php } ?>
      color:<?php echo get_theme_mod('right_sidebar_widgets_title_text_color','#FFF') ?>;
      font-family:<?php echo get_theme_mod('right_sidebar_widgets_title_fonts','Arial,"Helvetica Neue",Helvetica,sans-serif') ?>;
      font-size:<?php echo get_theme_mod('right_sidebar_widgets_title_font_size','18') ?>px; 
      line-height:<?php echo get_theme_mod('right_sidebar_widgets_title_font_size','18') + 2 ?>px;
      font-weight:<?php echo get_theme_mod('right_sidebar_widgets_title_font_weight','bold') ?>;
      text-align:<?php echo get_theme_mod('right_sidebar_widgets_title_font_alignment','center') ?>;
      <?php if(!get_theme_mod('right_sidebar_widgets_title_background_visible')) { ?>
        background-color:<?php echo get_theme_mod('right_sidebar_widgets_title_background_color','#383838') ?>;
      <?php } else { ?>
        background-color:transparent;
      <?php } ?>
      <?php if(!get_theme_mod('right_sidebar_widgets_title_background_visible')) { ?>
        background-image:url('<?php echo get_theme_mod('right_sidebar_widgets_title_background_image','none') ?>');
      <?php } ?>
      background-position:<?php echo get_theme_mod('right_sidebar_widgets_title_background_image_position','initial') ?>;
      background-repeat:<?php echo get_theme_mod('right_sidebar_widgets_title_background_image_repeat','no-repeat') ?>;
      background-size:<?php echo get_theme_mod('right_sidebar_widgets_title_background_image_type','initial') ?>;
      border-top:<?php echo get_theme_mod('right_sidebar_widgets_title_border_top','0') ?>px <?php echo get_theme_mod('right_sidebar_widgets_title_border_style','solid') ?> <?php echo get_theme_mod('right_sidebar_widgets_title_border_color','#000') ?>;
      border-bottom:<?php echo get_theme_mod('right_sidebar_widgets_title_border_bottom','0') ?>px <?php echo get_theme_mod('right_sidebar_widgets_title_border_style','solid') ?> <?php echo get_theme_mod('right_sidebar_widgets_title_border_color','#000') ?>;
      border-left:<?php echo get_theme_mod('right_sidebar_widgets_title_border_left','0') ?>px <?php echo get_theme_mod('right_sidebar_widgets_title_border_style','solid') ?> <?php echo get_theme_mod('right_sidebar_widgets_title_border_color','#000') ?>;
      border-right:<?php echo get_theme_mod('right_sidebar_widgets_title_border_right','0') ?>px <?php echo get_theme_mod('right_sidebar_widgets_title_border_style','solid') ?> <?php echo get_theme_mod('right_sidebar_widgets_title_border_color','#000') ?>;
      border-radius:<?php echo get_theme_mod('right_sidebar_widgets_title_border_radius','0') ?>px;
      padding-top:<?php echo get_theme_mod('right_sidebar_widgets_title_padding_top','10') ?>px;
      padding-bottom:<?php echo get_theme_mod('right_sidebar_widgets_title_padding_bottom','10') ?>px;
      padding-left:<?php echo get_theme_mod('right_sidebar_widgets_title_padding_left','0') ?>px;
      padding-right:<?php echo get_theme_mod('right_sidebar_widgets_title_padding_right','0') ?>px;
      margin-top:<?php echo get_theme_mod('right_sidebar_widgets_title_margin_top','5') ?>px;
      margin-bottom:<?php echo get_theme_mod('right_sidebar_widgets_title_margin_bottom','5') ?>px;
}


.right_sidebar_widget ul.menu {
	display:block;
}

.right_sidebar_widget ul.menu li {
    display:block;
    <?php if(!get_theme_mod('right_sidebar_menu_background_visible')) { ?>
        background-color:<?php echo get_theme_mod('right_sidebar_menu_background_color','#9E9E9E') ?>;
        background-image:url('<?php echo get_theme_mod('right_sidebar_menu_background_image','none') ?>');
        background-position:<?php echo get_theme_mod('right_sidebar_menu_background_image_position','none') ?>;
        background-repeat:<?php echo get_theme_mod('right_sidebar_menu_background_image_repeat','no-repeat') ?>;
    <?php } ?>
    text-align:<?php echo get_theme_mod('right_sidebar_menu_link_alignment','center') ?>;
    border-top:<?php echo get_theme_mod('right_sidebar_menu_border_top','0') ?>px <?php echo get_theme_mod('right_sidebar_menu_border_style','solid') ?> <?php echo get_theme_mod('right_sidebar_menu_border_color','#000') ?>;
    border-bottom:<?php echo get_theme_mod('right_sidebar_menu_border_bottom','0') ?>px <?php echo get_theme_mod('right_sidebar_menu_border_style','solid') ?> <?php echo get_theme_mod('right_sidebar_menu_border_color','#000') ?>;
    border-left:<?php echo get_theme_mod('right_sidebar_menu_border_left','0') ?>px <?php echo get_theme_mod('right_sidebar_menu_border_style','solid') ?> <?php echo get_theme_mod('right_sidebar_menu_border_color','#000') ?>;
    border-right:<?php echo get_theme_mod('right_sidebar_menu_border_right','0') ?>px <?php echo get_theme_mod('right_sidebar_menu_border_style','solid') ?> <?php echo get_theme_mod('right_sidebar_menu_border_color','#000') ?>;
    border-radius:<?php echo get_theme_mod('right_sidebar_menu_border_radius','0') ?>px;
    margin-top:<?php echo get_theme_mod('right_sidebar_menu_spacing','5') ?>px;
    margin-bottom:<?php echo get_theme_mod('right_sidebar_menu_spacing','5') ?>px;
}

.right_sidebar_widget ul.menu li:hover {
  <?php if(!get_theme_mod('right_sidebar_menu_background_visible')) { ?>
    background-color:<?php echo get_theme_mod('right_sidebar_menu_hover_background_color','#C7C7C7') ?>;
    background-image:url('<?php echo get_theme_mod('right_sidebar_menu_hover_background_image','none') ?>');
    background-position:<?php echo get_theme_mod('right_sidebar_menu_background_image_position','initial') ?>;
    background-repeat:<?php echo get_theme_mod('right_sidebar_menu_background_image_repeat','no-repeat') ?>;
  <?php } ?>
}

.right_sidebar_widget ul.menu li a {
    display:block;
    color:<?php echo get_theme_mod('right_sidebar_menu_link_color','#333') ?>;
    font-family:<?php echo get_theme_mod('right_sidebar_menu_fonts','Arial,"Helvetica Neue",Helvetica,sans-serif') ?>;
    font-weight:<?php echo get_theme_mod('right_sidebar_menu_font_weight','normal') ?>;
    font-size:<?php echo get_theme_mod('right_sidebar_widgets_content_font_size','14') ?>px;
    text-decoration:<?php echo get_theme_mod('right_sidebar_menu_link_decoration','none') ?>;
    height:<?php $lmheight = (get_theme_mod('right_sidebar_menu_height','25') + get_theme_mod('right_sidebar_widgets_content_font_size','14'));
      echo $lmheight; ?>px;
    line-height:<?php echo (get_theme_mod('right_sidebar_menu_height','25') + get_theme_mod('right_sidebar_widgets_content_font_size','14')) ?>px;
    padding-left:<?php echo get_theme_mod('right_sidebar_menu_width','15') ?>px;
    padding-right:<?php echo get_theme_mod('right_sidebar_menu_width','15') ?>px;
}

.right_sidebar_widget ul.menu li a:hover{
    display:block;
    color:<?php echo get_theme_mod('right_sidebar_menu_link_hover_color','#333') ?>;
}





#post {
<?php
$pcolumn = (get_theme_mod('homepage_column','1'));
if($pcolumn == 1) { ?>
    width:100%;
<?php } else if($pcolumn == 2) { ?>
    width:50%;
<?php } else if($pcolumn == 3) { ?>
    width:33%;
<?php } else { ?>
    width:25%;
<?php } ?>
    float:left;
}

#post_content {
    overflow: hidden;
    text-overflow: ellipsis;
    margin:<?php echo get_theme_mod('homepage_spacing','5') ?>px;
    padding:<?php echo get_theme_mod('homepage_spacing','5') ?>px;
}

#post_content .title {
    font-size:32px;
    text-align:center;
    padding:<?php echo get_theme_mod('homepage_spacing','5') ?>px;
}

#post_content .entry {
    padding:<?php echo get_theme_mod('homepage_spacing','5') ?>px;
}

#post_content .entry h1{
    font-size:1.5em;
}

#post_content .entry h2{
    font-size:1.2em;
    color:#333333;
}

#single_content .entry h3{
    font-size:1em;
    color:#666666;
}

#post_content .entry h4{
    font-size:.9em;
    color:#999999;
}
#post_content .entry h5{
    font-size:.8em;
    color:#CCCCCC;
}

#post_content .entry h6{
    font-size:.7em;
    color:#666600;
}

#post_content .entry p{
    font-weight:bold;
    font-size:.8em;
}

#post_content .entry blockquote{
    padding:5px;
    border:1px solid #999999;
    background-color:#DEDEDE;
}

#post_content .entry ul{
    font-variant:small-caps;
}

#post_content .metadata {
    text-align:center;
    padding:<?php echo get_theme_mod('homepage_spacing','5') ?>px;
}

.pauthor {
    margin-right:5px;
    display:inline;
}

.ptime {
    margin-right:5px;
    display:inline;
}

.pcomments {
    margin-right:5px;
    display:inline;
}

.pcategories {
    display:inline;
}

psingle_content img {
    max-width:100%;
    height:auto;
}













#single {
    float:left;
}

#single_content {
    overflow: hidden; 
    text-overflow: ellipsis;
}

#single_content .title {
    font-size:32px;
    text-align:center;
}

#single_content .entry {
}

#single_content .entry h1{
    font-size:1.5em;
}

#single_content .entry h2{
    font-size:1.2em; 
    color:#333333;
}

#single_content .entry h3{
    font-size:1em; 
    color:#666666;
}

#single_content .entry h4{
    font-size:.9em; 
    color:#999999;
}
#single_content .entry h5{
    font-size:.8em;
    color:#CCCCCC;
}

#single_content .entry h6{
    font-size:.7em; 
    color:#666600;
}

#single_content .entry p{
    font-weight:bold;
    font-size:.8em;
}

#single_content .entry blockquote{
    padding:5px;
    border:1px solid #999999;
    background-color:#DEDEDE;
}

#single_content .entry ul{
    font-variant:small-caps;
}

#single_content .metadata {
    text-align:center;
}

.sauthor {
    margin-right:5px; 
    display:inline;
}

.stime {
    margin-right:5px; 
    display:inline;
}

.scomments {
    margin-right:5px; 
    display:inline;
}

.scategories {
    display:inline;
}

#single_content img {
    max-width:100%;
    height:auto;
}














#luni {
     width:<?php echo get_theme_mod('lower_unibar_width','100%') ?>;
     min-height:30px;
	 <?php 
     $luposition = get_theme_mod('lower_unibar_alignment','center');
     if($luposition == 'center') { ?>
        margin-left:auto;
        margin-right:auto;
    <?php } else if($luposition == 'left') { ?>
        margin-left:initial;
    <?php } else { ?>
        margin-right:initial;
    <?php } ?>
    box-sizing:border-box;
    <?php if(!get_theme_mod('lower_unibar_background_visible')) { ?>background-color:<?php echo get_theme_mod('lower_unibar_background_color','#000') ?>;<?php } else { ?>background-color:transparent;<?php } ?>
    <?php if(!get_theme_mod('lower_unibar_background_visible')) { ?>background-image:url('<?php echo get_theme_mod('lower_unibar_background_image','none') ?>');<?php } ?>
    background-position:<?php echo get_theme_mod('lower_unibar_background_image_position','initial') ?>;
    background-repeat:<?php echo get_theme_mod('lower_unibar_background_image_repeat','no-repeat') ?>;
    background-size:<?php echo get_theme_mod('lower_unibar_background_image_type','intial') ?>;
    border-top:<?php echo get_theme_mod('lower_unibar_border_top','0') ?>px <?php echo get_theme_mod('lower_unibar_border_style','solid') ?> <?php echo get_theme_mod('lower_unibar_border_color','#CCC') ?>;
    border-bottom:<?php echo get_theme_mod('lower_unibar_border_bottom','0') ?>px <?php echo get_theme_mod('lower_unibar_border_style','solid') ?> <?php echo get_theme_mod('lower_unibar_border_color','#CCC') ?>;
    border-left:<?php echo get_theme_mod('lower_unibar_border_left','0') ?>px <?php echo get_theme_mod('lower_unibar_border_style','solid') ?> <?php echo get_theme_mod('lower_unibar_border_color','#CCC') ?>;
    border-right:<?php echo get_theme_mod('lower_unibar_border_right','0') ?>px <?php echo get_theme_mod('lower_unibar_border_style','solid') ?> <?php echo get_theme_mod('lower_unibar_border_color','#CCC') ?>;
    border-radius:<?php echo get_theme_mod('lower_unibar_border_radius','0') ?>px;
    padding-top:<?php echo get_theme_mod('lower_unibar_padding_top','0') ?>px;
    padding-bottom:<?php echo get_theme_mod('lower_unibar_padding_bottom','0') ?>px;
    padding-left:<?php echo get_theme_mod('lower_unibar_padding_left','0') ?>px;
    padding-right:<?php echo get_theme_mod('lower_unibar_padding_right','0') ?>px;
    margin-top:<?php echo get_theme_mod('lower_unibar_margin_top','0') ?>px;
    margin-bottom:<?php echo get_theme_mod('lower_unibar_margin_bottom','0') ?>px;
    overflow:auto
}

#luni_content {
     width:<?php echo get_theme_mod('lower_unibar_content_width','100%') ?>;
     height:auto;
	 <?php 
     $luposition = get_theme_mod('lower_unibar_content_alignment','center');
     if($luposition == 'center') { ?>
        margin-left:auto;
        margin-right:auto;
    <?php } else if($luposition == 'left') { ?>
        margin-left:initial;
    <?php } else { ?>
        margin-right:initial;   
    <?php } ?>
    padding:0px;
    overflow:auto
}
  
.lunih {
      <?php if(get_theme_mod('lower_unibar_widgets_header_visibility',TRUE)) { ?>display:none;<?php } ?>
      color:<?php echo get_theme_mod('lower_unibar_widgets_title_text_color','#FFF') ?>;
      font-family:<?php echo get_theme_mod('lower_unibar_widgets_title_fonts','Arial,"Helvetica Neue",Helvetica,sans-serif') ?>;
      font-size:<?php echo get_theme_mod('lower_unibar_widgets_title_font_size','18') ?>px; 
      line-height:<?php echo get_theme_mod('lower_unibar_widgets_title_font_size','18') + 2 ?>px;
      font-weight:<?php echo get_theme_mod('lower_unibar_widgets_title_font_weight','bold') ?>;
      text-align:<?php echo get_theme_mod('lower_unibar_widgets_title_font_alignment','center') ?>;
      <?php if(!get_theme_mod('lower_unibar_widgets_title_background_visible')) { ?>
        background-color:<?php echo get_theme_mod('lower_unibar_widgets_title_background_color','#383838') ?>;
      <?php } else { ?>
        background-color:transparent;
      <?php } ?>
      <?php if(!get_theme_mod('lower_unibar_widgets_title_background_visible')) { ?>
        background-image:url('<?php echo get_theme_mod('lower_unibar_widgets_title_background_image','none') ?>');
      <?php } ?>
      background-position:<?php echo get_theme_mod('lower_unibar_widgets_title_background_image_position','initial') ?>;
      background-repeat:<?php echo get_theme_mod('lower_unibar_widgets_title_background_image_repeat','no-repeat') ?>;
      background-size:<?php echo get_theme_mod('lower_unibar_widgets_title_background_image_type','initial') ?>;
      border-top:<?php echo get_theme_mod('lower_unibar_widgets_title_border_top','0') ?>px <?php echo get_theme_mod('lower_unibar_widget_title_border_style','solid') ?> <?php echo get_theme_mod('lower_unibar_widget_title_border_color','#000') ?>;
      border-bottom:<?php echo get_theme_mod('lower_unibar_widgets_title_border_bottom','0') ?>px <?php echo get_theme_mod('lower_unibar_widget_title_border_style','solid') ?> <?php echo get_theme_mod('lower_unibar_widget_title_border_color','#000') ?>;
      border-left:<?php echo get_theme_mod('lower_unibar_widgets_title_border_left','0') ?>px <?php echo get_theme_mod('lower_unibar_widget_title_border_style','solid') ?> <?php echo get_theme_mod('lower_unibar_widget_title_border_color','#000') ?>;
      border-right:<?php echo get_theme_mod('lower_unibar_widgets_title_border_right','0') ?>px <?php echo get_theme_mod('lower_unibar_widget_title_border_style','solid') ?> <?php echo get_theme_mod('lower_unibar_widget_title_border_color','#000') ?>;
      border-radius:<?php echo get_theme_mod('lower_unibar_widgets_title_border_radius','0') ?>px;
      padding-top:<?php echo get_theme_mod('lower_unibar_widgets_title_padding_top','10') ?>px;
      padding-bottom:<?php echo get_theme_mod('lower_unibar_widgets_title_padding_bottom','10') ?>px;
      padding-left:<?php echo get_theme_mod('lower_unibar_widgets_title_padding_left','0') ?>px;
      padding-right:<?php echo get_theme_mod('lower_unibar_widgets_title_padding_right','0') ?>px;
      margin-top:<?php echo get_theme_mod('lower_unibar_widgets_title_margin_top','5') ?>px;
      margin-bottom:<?php echo get_theme_mod('lower_unibar_widgets_title_margin_bottom','5') ?>px;
}

.lunic {
  	  color:<?php echo get_theme_mod('lower_unibar_widgets_text_color','#FFF') ?>;
      font-family:<?php echo get_theme_mod('lower_unibar_widgets_fonts','Arial,"Helvetica Neue",Helvetica,sans-serif') ?>;
      font-size:<?php echo get_theme_mod('lower_unibar_widgets_font_size','12') ?>px;
      line-height:<?php echo get_theme_mod('lower_unibar_widgets_font_size','12') + 5 ?>px;
      font-weight:<?php echo get_theme_mod('lower_unibar_widgets_font_weight','normal') ?>;
      text-align:<?php echo get_theme_mod('lower_unibar_widgets_font_alignment','center') ?>;
      <?php if(!get_theme_mod('lower_unibar_widgets_background_visible',TRUE)) { ?>background-color:<?php echo get_theme_mod('lower_unibar_widgets_background_color','#000') ?>;<?php } ?>
      <?php if(!get_theme_mod('lower_unibar_widgets_background_visible',TRUE)) { ?>background-image:url('<?php echo get_theme_mod('lower_unibar_widgets_background_image','none') ?>');<?php } ?>
      background-position:<?php echo get_theme_mod('lower_unibar_widgets_background_image_position','initial') ?>;
      background-repeat:<?php echo get_theme_mod('lower_unibar_widgets_background_image_repeat','no-repeat') ?>;
      background-size:<?php echo get_theme_mod('lower_unibar_widgets_background_image_type','initial') ?>;
      border-top:<?php echo get_theme_mod('lower_unibar_widgets_border_top','0') ?>px <?php echo get_theme_mod('lower_unibar_widgets_border_style','solid') ?> <?php echo get_theme_mod('lower_unibar_widgets_border_color','#F3F3F3') ?>;
      border-bottom:<?php echo get_theme_mod('lower_unibar_widgets_border_bottom','0') ?>px <?php echo get_theme_mod('lower_unibar_widgets_border_style','solid') ?> <?php echo get_theme_mod('lower_unibar_widgets_border_color','#F3F3F3') ?>;
      border-left:<?php echo get_theme_mod('lower_unibar_widgets_border_left','0') ?>px <?php echo get_theme_mod('lower_unibar_widgets_border_style','solid') ?> <?php echo get_theme_mod('lower_unibar_widgets_border_color','#F3F3F3') ?>;
      border-right:<?php echo get_theme_mod('lower_unibar_widgets_border_right','0') ?>px <?php echo get_theme_mod('lower_unibar_widgets_border_style','solid') ?> <?php echo get_theme_mod('lower_unibar_widgets_border_color','#F3F3F3') ?>;
      border-radius:<?php echo get_theme_mod('lower_unibar_widgets_border_radius','0') ?>px;
      padding-top:<?php echo get_theme_mod('lower_unibar_widgets_padding_top','0') ?>px;
      padding-bottom:<?php echo get_theme_mod('lower_unibar_widgets_padding_bottom','0') ?>px;
      padding-left:<?php echo get_theme_mod('lower_unibar_widgets_padding_left','0') ?>px;
      padding-right:<?php echo get_theme_mod('lower_unibar_widgets_padding_right','0') ?>px;
      margin-top:<?php echo get_theme_mod('lower_unibar_widgets_margin_top','0') ?>px;
      margin-bottom:<?php echo get_theme_mod('lower_unibar_widgets_margin_bottom','0') ?>px;
}

.lunic a {
    color:<?php echo get_theme_mod('lower_unibar_widgets_link_color','#F4F4F4') ?>;
    text-decoration:<?php echo get_theme_mod('lower_unibar_widgets_link_decoration','none') ?>;
    font-weight:<?php echo get_theme_mod('lower_unibar_widgets_link_weight','normal') ?>;
}

#luni_content ul.menu {
    <?php if(get_theme_mod('lower_unibar_menu_type') == 'horizontal') { ?>
        padding-left:1px;
        padding-right:1px;
        padding:0px;
        display:inline-block;
    <?php } ?>
}

#luni_content ul.menu li {
    <?php if(get_theme_mod('lower_unibar_menu_type') == 'vertical') { ?>
    margin-left:auto;
    margin-right:auto;
    width:<?php echo get_theme_mod('lower_unibar_vertical_menu_width','30') ?>%;
	    <?php if(!get_theme_mod('lower_unibar_vertical_menu_background_visible')) { ?>
		  background-color:<?php echo get_theme_mod('lower_unibar_vertical_menu_background_color','#333') ?>;
		  background-image:url('<?php echo get_theme_mod('lower_unibar_vertical_menu_background_image','none') ?>');
		  background-position:<?php echo get_theme_mod('lower_unibar_vertical_menu_background_image_position','initial') ?>;
		  background-repeat:<?php echo get_theme_mod('lower_unibar_vertical_menu_background_image_repeat','no-repeat') ?>;
        <?php } ?>
		text-align:<?php echo get_theme_mod('lower_unibar_vertical_menu_link_alignment','center') ?>;
		border-top:<?php echo get_theme_mod('lower_unibar_vertical_menu_border_top','0') ?>px <?php echo get_theme_mod('lower_unibar_vertical_menu_border_style','solid') ?> <?php echo get_theme_mod('lower_unibar_vertical_menu_border_color','#CCC') ?>;
        border-bottom:<?php echo get_theme_mod('lower_unibar_vertical_menu_border_bottom','0') ?>px <?php echo get_theme_mod('lower_unibar_vertical_menu_border_style','solid') ?> <?php echo get_theme_mod('lower_unibar_vertical_menu_border_color','#CCC') ?>;
		border-left:<?php echo get_theme_mod('lower_unibar_vertical_menu_border_left','0') ?>px <?php echo get_theme_mod('lower_unibar_vertical_menu_border_style','solid') ?> <?php echo get_theme_mod('lower_unibar_vertical_menu_border_color','#CCC') ?>;
		border-right:<?php echo get_theme_mod('lower_unibar_vertical_menu_border_right','0') ?>px <?php echo get_theme_mod('lower_unibar_vertical_menu_border_style','solid') ?> <?php echo get_theme_mod('lower_unibar_vertical_menu_border_color','#CCC') ?>;
		border-radius:<?php echo get_theme_mod('lower_unibar_vertical_menu_border_radius','0') ?>px;
		margin-top:<?php echo get_theme_mod('lower_unibar_vertical_menu_spacing','5') ?>px;
		margin-bottom:<?php echo get_theme_mod('lower_unibar_vertical_menu_spacing','5') ?>px;
	<?php } else { ?>
    text-align:center;
	display:inline-block;
    margin-left:<?php echo get_theme_mod('lower_unibar_horizontal_menu_spacing','5') ?>px; 
    margin-right:<?php echo get_theme_mod('lower_unibar_horizontal_menu_spacing','5') ?>px;
	<?php if(!get_theme_mod('lower_unibar_horizontal_menu_background_visible')) { ?>
		background-color:<?php echo get_theme_mod('lower_unibar_horizontal_menu_background_color','#333') ?>;
		background-image:url('<?php echo get_theme_mod('lower_unibar_horizontal_menu_background_image','none') ?>');
		background-position:<?php echo get_theme_mod('lower_unibar_horizontal_menu_background_image_position','initial') ?>;
		background-repeat:<?php echo get_theme_mod('lower_unibar_horizontal_menu_background_image_repeat','no-repeat') ?>;
    <?php } ?>
		border-top:<?php echo get_theme_mod('lower_unibar_horizontal_menu_border_top','0') ?>px <?php echo get_theme_mod('lower_unibar_horizontal_menu_border_style','solid') ?> <?php echo get_theme_mod('lower_unibar_horizontal_menu_border_color','#CCC') ?>;
		border-bottom:<?php echo get_theme_mod('lower_unibar_horizontal_menu_border_bottom','0') ?>px <?php echo get_theme_mod('lower_unibar_horizontal_menu_border_style','solid') ?> <?php echo get_theme_mod('lower_unibar_horizontal_menu_border_color','#CCC') ?>;
		border-left:<?php echo get_theme_mod('lower_unibar_horizontal_menu_border_left','0') ?>px <?php echo get_theme_mod('lower_unibar_horizontal_menu_border_style','solid') ?> <?php echo get_theme_mod('lower_unibar_horizontal_menu_border_color','#CCC') ?>;
		border-right:<?php echo get_theme_mod('lower_unibar_horizontal_menu_border_right','0') ?>px <?php echo get_theme_mod('lower_unibar_horizontal_menu_border_style','solid') ?> <?php echo get_theme_mod('lower_unibar_horizontal_menu_border_color','#CCC') ?>;
		border-radius:<?php echo get_theme_mod('lower_unibar_horizontal_menu_border_radius','0') ?>px;
	<?php } ?>
  }
  
  #luni_content ul.menu li:hover {
	<?php if(get_theme_mod('lower_unibar_menu_type') == 'vertical') { ?>
		<?php if(!get_theme_mod('lower_unibar_vertical_menu_background_visible')) { ?>
		background-color:<?php echo get_theme_mod('lower_unibar_vertical_menu_hover_background_color','#CCC') ?>;
		background-image:url('<?php echo get_theme_mod('lower_unibar_vertical_menu_hover_background_image','none') ?>');
		background-position:<?php echo get_theme_mod('lower_unibar_vertical_menu_background_image_position','initial') ?>;
		background-repeat:<?php echo get_theme_mod('lower_unibar_vertical_menu_background_image_repeat','no-repeat') ?>;
		<?php } ?>
	<?php } else { ?>
		<?php if(!get_theme_mod('lower_unibar_horizontal_menu_background_visible')) { ?>
		background-color:<?php echo get_theme_mod('lower_unibar_horizontal_menu_hover_background_color','#CCC') ?>;
		background-image:url('<?php echo get_theme_mod('lower_unibar_horizontal_menu_hover_background_image','none') ?>');
		background-position:<?php echo get_theme_mod('lower_unibar_horizontal_menu_background_image_position','initial') ?>;
		background-repeat:<?php echo get_theme_mod('lower_unibar_horizontal_menu_background_image_repeat','no-repeat') ?>;
		<?php } ?>
  	<?php } ?>
  }
  
  #luni_content ul.menu li a {
	<?php if(get_theme_mod('lower_unibar_menu_type') == 'vertical') { ?>
		color:<?php echo get_theme_mod('lower_unibar_vertical_menu_link_color','#FFF') ?>;
		font-family:<?php echo get_theme_mod('lower_unibar_vertical_menu_fonts','Arial,"Helvetica Neue",Helvetica,sans-serif') ?>;
		font-weight:<?php echo get_theme_mod('lower_unibar_vertical_menu_font_weight','normal') ?>;
		text-decoration:<?php echo get_theme_mod('lower_unibar_vertical_menu_link_decoration','none') ?>;
		height:<?php echo (get_theme_mod('lower_unibar_vertical_menu_height','25') + get_theme_mod('lower_unibar_widgets_font_size','12')); ?>px;
		line-height:<?php echo (get_theme_mod('lower_unibar_vertical_menu_height','25') + get_theme_mod('lower_unibar_widgets_font_size','12')) ?>px;
		width:100%;
        display:inline-block;
	<?php } else { ?>
        text-align:center;
        display: inline-block;
		color:<?php echo get_theme_mod('lower_unibar_horizontal_menu_link_color','#FFF') ?>;
		font-family:<?php echo get_theme_mod('lower_unibar_horizontal_menu_fonts','Arial,"Helvetica Neue",Helvetica,sans-serif') ?>;
		font-weight:<?php echo get_theme_mod('lower_unibar_horizontal_menu_font_weight','normal') ?>;
		text-decoration:<?php echo get_theme_mod('lower_unibar_horizontal_menu_link_decoration','none') ?>;
		height:<?php echo (get_theme_mod('lower_unibar_horizontal_menu_height') + get_theme_mod('lower_unibar_widgets_font_size')) ?>px; 
        line-height:<?php echo (get_theme_mod('lower_unibar_horizontal_menu_height','20') + get_theme_mod('lower_unibar_widgets_font_size','12')) ?>px;  
		padding-left:<?php echo get_theme_mod('lower_unibar_horizontal_menu_width','10') ?>px;
		padding-right:<?php echo get_theme_mod('lower_unibar_horizontal_menu_width','10') ?>px;
	<?php } ?>
  }
  
  #luni_content ul.menu li a:hover {
	<?php if(get_theme_mod('lower_unibar_menu_type') == 'vertical') { ?>
    	<?php if(get_theme_mod('lower_unibar_vertical_menu_link_hover_color')) { ?>color:<?php echo get_theme_mod('lower_unibar_vertical_menu_link_hover_color') ?>;<?php } ?>
	<?php } else { ?>	
  		<?php if(get_theme_mod('lower_unibar_horizontal_menu_link_hover_color')) { ?>color:<?php echo get_theme_mod('lower_unibar_horizontal_menu_link_hover_color') ?>;<?php } ?>
	<?php } ?>
  }

#lmulti {
    min-height:100px;
    <?php if(!get_theme_mod('lower_multibar_background_visible')) { ?>
        background-color:<?php echo get_theme_mod('lower_multibar_background_color','#282828') ?>;
    <?php } else { ?>background-color:transparent;<?php } ?>
    <?php if(!get_theme_mod('lower_multibar_background_visible')) { ?>
        background-image:url('<?php echo get_theme_mod('lower_multibar_background_image','none') ?>');
    <?php } ?>
    background-position:<?php echo get_theme_mod('lower_multibar_background_image_position','initial') ?>;
    background-repeat:<?php echo get_theme_mod('lower_multibar_background_image_repeat','no-repeat') ?>;
    background-size:<?php echo get_theme_mod('lower_multibar_background_image_type','initial') ?>;
    width:<?php echo get_theme_mod('lower_multibar_width','100%') ?>;
    <?php 
      $lmposition = get_theme_mod('lower_multibar_alignment','center');
      if($lmposition == 'center') { ?>
        margin-left:auto;
        margin-right:auto;
    <?php }
      else if($lmposition == 'left') { ?>
        margin-left:initial;
    <?php }
     else { ?>
        margin-right:initial;   
    <?php } ?>
    box-sizing:border-box;
    border-top:<?php echo get_theme_mod('lower_multibar_border_top','0') ?>px <?php echo get_theme_mod('lower_multibar_border_style','solid') ?> <?php echo get_theme_mod('lower_multibar_border_color','#000') ?>;
    border-bottom:<?php echo get_theme_mod('lower_multibar_border_bottom','0') ?>px <?php echo get_theme_mod('lower_multibar_border_style','solid') ?> <?php echo get_theme_mod('lower_multibar_border_color','#000') ?>;
    border-left:<?php echo get_theme_mod('lower_multibar_border_left','0') ?>px <?php echo get_theme_mod('lower_multibar_border_style','solid') ?> <?php echo get_theme_mod('lower_multibar_border_color','#000') ?>;
    border-right:<?php echo get_theme_mod('lower_multibar_border_right','0') ?>px <?php echo get_theme_mod('lower_multibar_border_style','solid') ?> <?php echo get_theme_mod('lower_multibar_border_color','#000') ?>;
    border-radius:<?php echo get_theme_mod('lower_multibar_border_radius','0') ?>px;
    padding-top:<?php echo get_theme_mod('lower_multibar_padding_top','10') ?>px;
    padding-bottom:<?php echo get_theme_mod('lower_multibar_padding_bottom','10') ?>px;
    padding-left:<?php echo get_theme_mod('lower_multibar_padding_left','0') ?>px;
    padding-right:<?php echo get_theme_mod('lower_multibar_padding_right','0') ?>px;
    margin-top:<?php echo get_theme_mod('lower_multibar_margin_top','0') ?>px;
    margin-bottom:<?php echo get_theme_mod('lower_multibar_margin_bottom','0') ?>px;
}

#lmulti_content {
    width:<?php echo get_theme_mod('lower_multibar_content_width','1000px') ?>;
    height:auto;
    <?php 
      $lmcposition = get_theme_mod('lower_multibar_content_alignment','center');
      if($lmcposition == 'center') { ?>
        margin-left:auto;
        margin-right:auto;
    <?php }
      else if($lmcposition == 'left') { ?>
        margin-left:initial;
    <?php } else { ?>
        margin-right:initial;   
    <?php } ?>
    padding-left:0px;
	padding-right:0px;
}

#lmulti_p {
    float:left;
    <?php $pcount = get_theme_mod('lower_multibar_panel_count','three'); if($pcount == 'one') { ?>
        width:100%;
    <?php } ?>
    <?php if($pcount != 'one') { ?>
        width:50%;
    <?php } ?>
	<?php if($pcount != 'two' && $pcount != 'one') { ?>
        width:33%;
	<?php } ?>
	<?php if($pcount != 'three' && $pcount != 'two' && $pcount != 'one') { ?>
        width:25%;
	<?php } ?>
}

#lmulti_p_w {
      padding:<?php echo get_theme_mod('lower_multibar_panel_padding','10') ?>px;
}

#lmulti_p_w ul.menu {
	display:block;
}

#lmulti_p_w ul.menu li {
    display:block;
    <?php if(!get_theme_mod('lower_multibar_menu_background_visible')) { ?>
        background-color:<?php echo get_theme_mod('lower_multibar_menu_background_color','#9E9E9E') ?>;
        background-image:url('<?php echo get_theme_mod('lower_multibar_menu_background_image','none') ?>');
        background-position:<?php echo get_theme_mod('lower_multibar_menu_background_image_position','none') ?>;
        background-repeat:<?php echo get_theme_mod('lower_multibar_menu_background_image_repeat','no-repeat') ?>;
    <?php } ?>
    text-align:<?php echo get_theme_mod('lower_multibar_menu_link_alignment','center') ?>;
    border-top:<?php echo get_theme_mod('lower_multibar_menu_border_top','0') ?>px <?php echo get_theme_mod('lower_multibar_menu_border_style','solid') ?> <?php echo get_theme_mod('lower_multibar_menu_border_color','#000') ?>;
    border-bottom:<?php echo get_theme_mod('lower_multibar_menu_border_bottom','0') ?>px <?php echo get_theme_mod('lower_multibar_menu_border_style','solid') ?> <?php echo get_theme_mod('lower_multibar_menu_border_color','#000') ?>;
    border-left:<?php echo get_theme_mod('lower_multibar_menu_border_left','0') ?>px <?php echo get_theme_mod('lower_multibar_menu_border_style','solid') ?> <?php echo get_theme_mod('lower_multibar_menu_border_color','#000') ?>;
    border-right:<?php echo get_theme_mod('lower_multibar_menu_border_right','0') ?>px <?php echo get_theme_mod('lower_multibar_menu_border_style','solid') ?> <?php echo get_theme_mod('lower_multibar_menu_border_color','#000') ?>;
    border-radius:<?php echo get_theme_mod('lower_multibar_menu_border_radius','0') ?>px;
    margin-top:<?php echo get_theme_mod('lower_multibar_menu_spacing','5') ?>px;
    margin-bottom:<?php echo get_theme_mod('lower_multibar_menu_spacing','5') ?>px;
}

#lmulti_p_w ul.menu li:hover {
  <?php if(!get_theme_mod('lower_multibar_menu_background_visible')) { ?>
    background-color:<?php echo get_theme_mod('lower_multibar_menu_hover_background_color','#C7C7C7') ?>;
    background-image:url('<?php echo get_theme_mod('lower_multibar_menu_hover_background_image','none') ?>');
    background-position:<?php echo get_theme_mod('lower_multibar_menu_background_image_position','initial') ?>;
    background-repeat:<?php echo get_theme_mod('lower_multibar_menu_background_image_repeat','no-repeat') ?>;
  <?php } ?>
}

#lmulti_p_w ul.menu li a {
    display:block;
    color:<?php echo get_theme_mod('lower_multibar_menu_link_color','#333') ?>;
    font-family:<?php echo get_theme_mod('lower_multibar_menu_fonts','Arial,"Helvetica Neue",Helvetica,sans-serif') ?>;
    font-weight:<?php echo get_theme_mod('lower_multibar_menu_font_weight','normal') ?>;
    font-size:<?php echo get_theme_mod('lower_multibar_widgets_content_font_size','14') ?>px;
    text-decoration:<?php echo get_theme_mod('lower_multibar_menu_link_decoration','none') ?>;
    height:<?php $lmheight = (get_theme_mod('lower_multibar_menu_height','25') + get_theme_mod('lower_multibar_widgets_content_font_size','14'));
      echo $lmheight; ?>px;
    line-height:<?php echo (get_theme_mod('lower_multibar_menu_height','25') + get_theme_mod('lower_multibar_widgets_content_font_size','14')) ?>px;
    padding-left:<?php echo get_theme_mod('lower_multibar_menu_width','15') ?>px;
    padding-right:<?php echo get_theme_mod('lower_multibar_menu_width','15') ?>px;
}

#lmulti_p_w ul.menu li a:hover{
    display:block;
    color:<?php echo get_theme_mod('lower_multibar_menu_link_hover_color','#333') ?>;
}

.lmcph {
      <?php if(get_theme_mod('lower_multibar_widgets_header_visibility')) { ?>display:none;<?php } ?>
      color:<?php echo get_theme_mod('lower_multibar_widgets_title_text_color','#FFF') ?>;
      font-family:<?php echo get_theme_mod('lower_multibar_widgets_title_fonts','Arial,"Helvetica Neue",Helvetica,sans-serif') ?>;
      font-size:<?php echo get_theme_mod('lower_multibar_widgets_title_font_size','18') ?>px; 
      line-height:<?php echo get_theme_mod('lower_multibar_widgets_title_font_size','18') + 2 ?>px;
      font-weight:<?php echo get_theme_mod('lower_multibar_widgets_title_font_weight','bold') ?>;
      text-align:<?php echo get_theme_mod('lower_multibar_widgets_title_font_alignment','center') ?>;
      <?php if(!get_theme_mod('lower_multibar_widgets_title_background_visible')) { ?>
        background-color:<?php echo get_theme_mod('lower_multibar_widgets_title_background_color','#383838') ?>;
      <?php } else { ?>
        background-color:transparent;
      <?php } ?>
      <?php if(!get_theme_mod('lower_multibar_widgets_title_background_visible')) { ?>
        background-image:url('<?php echo get_theme_mod('lower_multibar_widgets_title_background_image','none') ?>');
      <?php } ?>
      background-position:<?php echo get_theme_mod('lower_multibar_widgets_title_background_image_position','initial') ?>;
      background-repeat:<?php echo get_theme_mod('lower_multibar_widgets_title_background_image_repeat','no-repeat') ?>;
      background-size:<?php echo get_theme_mod('lower_multibar_widgets_title_background_image_type','initial') ?>;
      border-top:<?php echo get_theme_mod('lower_multibar_widgets_title_border_top','0') ?>px <?php echo get_theme_mod('lower_multibar_widgets_title_border_style','solid') ?> <?php echo get_theme_mod('lower_multibar_widgets_title_border_color','#000') ?>;
      border-bottom:<?php echo get_theme_mod('lower_multibar_widgets_title_border_bottom','0') ?>px <?php echo get_theme_mod('lower_multibar_widgets_title_border_style','solid') ?> <?php echo get_theme_mod('lower_multibar_widgets_title_border_color','#000') ?>;
      border-left:<?php echo get_theme_mod('lower_multibar_widgets_title_border_left','0') ?>px <?php echo get_theme_mod('lower_multibar_widgets_title_border_style','solid') ?> <?php echo get_theme_mod('lower_multibar_widgets_title_border_color','#000') ?>;
      border-right:<?php echo get_theme_mod('lower_multibar_widgets_title_border_right','0') ?>px <?php echo get_theme_mod('lower_multibar_widgets_title_border_style','solid') ?> <?php echo get_theme_mod('lower_multibar_widgets_title_border_color','#000') ?>;
      border-radius:<?php echo get_theme_mod('lower_multibar_widgets_title_border_radius','0') ?>px;
      padding-top:<?php echo get_theme_mod('lower_multibar_widgets_title_padding_top','10') ?>px;
      padding-bottom:<?php echo get_theme_mod('lower_multibar_widgets_title_padding_bottom','10') ?>px;
      padding-left:<?php echo get_theme_mod('lower_multibar_widgets_title_padding_left','0') ?>px;
      padding-right:<?php echo get_theme_mod('lower_multibar_widgets_title_padding_right','0') ?>px;
      margin-top:<?php echo get_theme_mod('lower_multibar_widgets_title_margin_top','5') ?>px;
      margin-bottom:<?php echo get_theme_mod('lower_multibar_widgets_title_margin_bottom','5') ?>px;
}

.lmcpc {
      color:<?php echo get_theme_mod('lower_multibar_widgets_content_text_color','#FFF') ?>;
      font-family:<?php echo get_theme_mod('lower_multibar_widgets_content_fonts','Arial,"Helvetica Neue",Helvetica,sans-serif') ?>;
      font-size:<?php echo get_theme_mod('lower_multibar_widgets_content_font_size','14') ?>px;
      line-height:<?php echo get_theme_mod('lower_multibar_widgets_content_font_size','14') + 5 ?>px;
      font-weight:<?php echo get_theme_mod('lower_multibar_widgets_content_font_weight','normal') ?>;
      text-align:<?php echo get_theme_mod('lower_multibar_widgets_content_font_alignment','left') ?>;
      <?php if(!get_theme_mod('lower_multibar_widgets_content_background_visible')) { ?>
        background-color:<?php echo get_theme_mod('lower_multibar_widgets_content_background_color','#575757') ?>;
      <?php } ?>
      <?php if(!get_theme_mod('lower_multibar_widgets_content_background_visible')) { ?>
        background-image:url('<?php echo get_theme_mod('lower_multibar_widgets_content_background_image','none') ?>');
      <?php } ?>
      background-position:<?php echo get_theme_mod('lower_multibar_widgets_content_background_image_position','initial') ?>;
      background-repeat:<?php echo get_theme_mod('lower_multibar_widgets_content_background_image_repeat','no-repeat') ?>;
      background-size:<?php echo get_theme_mod('lower_multibar_widgets_content_background_image_type','initial') ?>;
      border-top:<?php echo get_theme_mod('lower_multibar_widgets_content_border_top','0') ?>px <?php echo get_theme_mod('lower_multibar_widgets_content_border_style','solid') ?> <?php echo get_theme_mod('lower_multibar_widgets_content_border_color','#000') ?>;
      border-bottom:<?php echo get_theme_mod('lower_multibar_widgets_content_border_bottom','0') ?>px <?php echo get_theme_mod('lower_multibar_widgets_content_border_style','solid') ?> <?php echo get_theme_mod('lower_multibar_widgets_content_border_color','#000') ?>;
      border-left:<?php echo get_theme_mod('lower_multibar_widgets_content_border_left','0') ?>px <?php echo get_theme_mod('lower_multibar_widgets_content_border_style','solid') ?> <?php echo get_theme_mod('lower_multibar_widgets_content_border_color','#000') ?>;
      border-right:<?php echo get_theme_mod('lower_multibar_widgets_content_border_right','0') ?>px <?php echo get_theme_mod('lower_multibar_widgets_content_border_style','solid') ?> <?php echo get_theme_mod('lower_multibar_widgets_content_border_color','#000') ?>;
      border-radius:<?php echo get_theme_mod('lower_multibar_widgets_content_border_radius','0') ?>px;
      padding-top:<?php echo get_theme_mod('lower_multibar_widgets_content_padding_top','10') ?>px;
      padding-bottom:<?php echo get_theme_mod('lower_multibar_widgets_content_padding_bottom','10') ?>px;
      padding-left:<?php echo get_theme_mod('lower_multibar_widgets_content_padding_left','10') ?>px;
      padding-right:<?php echo get_theme_mod('lower_multibar_widgets_content_padding_right','10') ?>px;
      margin-top:<?php echo get_theme_mod('lower_multibar_widgets_content_margin_top','10') ?>px;
      margin-bottom:<?php echo get_theme_mod('lower_multibar_widgets_content_margin_bottom','10') ?>px;

}

.lmcpc a {
    color:<?php echo get_theme_mod('lower_multibar_widgets_content_link_color','#FFF') ?>;
    text-decoration:<?php echo get_theme_mod('lower_multibar_widgets_content_link_decoration','underline') ?>;
    font-weight:<?php echo get_theme_mod('lower_multibar_widgets_content_link_weight','normal') ?>;
}

#footer {
    width:<?php echo get_theme_mod('footer_background_width','100%') ?>;
    padding-top:<?php echo get_theme_mod('footer_padding_top','14') ?>px;
    padding-bottom:<?php echo get_theme_mod('footer_padding_bottom','14') ?>px;
    padding-left:<?php echo get_theme_mod('footer_padding_left','0') ?>px;
    padding-right:<?php echo get_theme_mod('footer_padding_right','0') ?>px;
    box-sizing:border-box;
    <?php 
    $position = get_theme_mod('footer_alignment','center');
    if($position == 'center') { ?>
        margin-left:auto;
        margin-right:auto;
    <?php }
    else if($position == 'left') { ?>
        margin-left:initial;
        margin-right:auto;
    <?php }
    else { ?>
        margin-right:initial;  
        margin-left:auto; 
    <?php } ?>
    overflow:auto;
    border-top:<?php echo get_theme_mod('footer_border_top','0') ?>px <?php echo get_theme_mod('footer_border_style','solid') ?> <?php echo get_theme_mod('footer_border_color','#000') ?>;
    border-bottom:<?php echo get_theme_mod('footer_border_bottom','0') ?>px <?php echo get_theme_mod('footer_border_style','solid') ?> <?php echo get_theme_mod('footer_border_color','#000') ?>;
    border-left:<?php echo get_theme_mod('footer_border_left','0') ?>px <?php echo get_theme_mod('footer_border_style','solid') ?> <?php echo get_theme_mod('footer_border_color','#000') ?>;
    border-right:<?php echo get_theme_mod('footer_border_right','0') ?>px <?php echo get_theme_mod('footer_border_style','solid') ?> <?php echo get_theme_mod('footer_border_color','#000') ?>;
    border-radius:<?php echo get_theme_mod('footer_border_radius','0') ?>px;
    margin-top:<?php echo get_theme_mod('footer_margin_top','0') ?>px;
    margin-bottom:<?php echo get_theme_mod('footer_margin_bottom','0') ?>px;
    <?php if(!get_theme_mod('footer_background_visible')) { ?>
        background-color:<?php echo get_theme_mod('footer_background_color','#333') ?>;
    <?php } else { ?>
        background-color:transparent;
    <?php } ?>
    <?php if(!get_theme_mod('footer_background_visible')) { ?>
        background-image:url('<?php echo get_theme_mod('footer_background_image','none') ?>');
    <?php } ?>
    background-position:<?php echo get_theme_mod('footer_background_image_position','initial') ?>;
    background-repeat:<?php echo get_theme_mod('footer_background_image_repeat','no-repeat') ?>;
  }
  
  #footer_content {
    width:<?php echo get_theme_mod('footer_width','1000px') ?>;
    font-family:<?php echo get_theme_mod('footer_fonts','Arial,"Helvetica Neue",Helvetica,sans-serif') ?>;
    font-size:<?php echo get_theme_mod('footer_font_size','14') ?>px;
    color:<?php echo get_theme_mod('footer_text_color','#FFF') ?>;
    <?php if(get_theme_mod('footer_widget_alignment','center') == 'left' || get_theme_mod('footer_widget_alignment','center') == 'right') { ?>
        text-align:<?php echo get_theme_mod('footer_widget_alignment','center') ?>;
    <?php } else { ?>
        text-align:center;
    <?php } ?>
    font-weight:<?php echo get_theme_mod('footer_font_weight','normal') ?>;
    <?php 
      $fcontent_alignment = get_theme_mod('footer_content_alignment','center');
      if($fcontent_alignment == 'center') { ?>
        margin-left:auto;
        margin-right:auto;
    <?php }
      else if($fcontent_alignment == 'left') { ?>
        float:left;
    <?php }
     else { ?>
        float:right;
    <?php } ?>
  }
  
  #footer_content a {
    color:<?php echo get_theme_mod('footer_link_color','#317DBF') ?>;
    text-decoration:<?php echo get_theme_mod('footer_link_decoration','none') ?>;
    font-weight:<?php echo get_theme_mod('footer_link_weight','normal') ?>;
  }
  
  #footer #footer_content .footer_copyright {
    vertical-align: top;
    <?php 
        $fpos = get_theme_mod('footer_widget_position','sameline');
        if($fpos == 'below') { ?>
        display:block;
    <?php } else { ?>
        display:inline-block;
    <?php } ?>
    <?php if(get_theme_mod('footer_widget_alignment','center') == 'leftandright') { ?>
    float:left;
    <?php } ?>
    line-height:<?php echo (get_theme_mod('footer_menu_height','20') + get_theme_mod('footer_font_size','14') + 2) ?>px;
  }
  
  #footer #footer_content .footer_widgets {
    vertical-align: top;
  <?php 
        $fpos = get_theme_mod('footer_widget_position','sameline');
        if($fpos == 'below') { ?>
          display:block;
    <?php } else { ?>
        display:inline-block;
    <?php } ?>
    <?php if(get_theme_mod('footer_widget_alignment','center') == 'leftandright') { ?>
    float:right;
    <?php } ?>
    line-height:<?php echo (get_theme_mod('footer_menu_height','20') + get_theme_mod('footer_font_size','14')) ?>px;
  }
  
  #footer #footer_content .footer_widgets #sidebar ul.menu {
    padding-left:1px;
    padding-right:1px;
    padding:0px;
    display:inline-block;
  }
  
  #footer #footer_content .footer_widgets #sidebar ul.menu li {
    text-align:center;
	display:inline-block;
  <?php if(!get_theme_mod('footer_menu_background_visible')) { ?>
    background-color:<?php echo get_theme_mod('footer_menu_background_color','#1C1C1C') ?>;
    background-image:url('<?php echo get_theme_mod('footer_menu_background_image','none') ?>');
    background-position:<?php echo get_theme_mod('footer_menu_background_image_position','initial') ?>;
    background-repeat:<?php echo get_theme_mod('footer_menu_background_image_repeat','no-repeat') ?>;
  <?php } ?>
    border-top:<?php echo get_theme_mod('footer_menu_border_top','0') ?>px <?php echo get_theme_mod('footer_menu_border_style','solid') ?> <?php echo get_theme_mod('footer_menu_border_color','#000') ?>;
    border-bottom:<?php echo get_theme_mod('footer_menu_border_bottom','0') ?>px <?php echo get_theme_mod('footer_menu_border_style','solid') ?> <?php echo get_theme_mod('footer_menu_border_color','#000') ?>;
    border-left:<?php echo get_theme_mod('footer_menu_border_left','0') ?>px <?php echo get_theme_mod('footer_menu_border_style','solid') ?> <?php echo get_theme_mod('footer_menu_border_color','#000') ?>;
    border-right:<?php echo get_theme_mod('footer_menu_border_right','0') ?>px <?php echo get_theme_mod('footer_menu_border_style','solid') ?> <?php echo get_theme_mod('footer_menu_border_color','#000') ?>;
    border-radius:<?php echo get_theme_mod('footer_menu_border_radius','4') ?>px;
    margin-left:<?php echo get_theme_mod('footer_menu_spacing','3') ?>px;
    margin-right:<?php echo get_theme_mod('footer_menu_spacing','3') ?>px;
  }
  
  #footer #footer_content .footer_widgets #sidebar ul.menu li:hover {
  <?php if(!get_theme_mod('footer_menu_background_visible')) { ?>
    background-color:<?php echo get_theme_mod('footer_menu_hover_background_color','#5C5C5C') ?>;
    background-image:url('<?php echo get_theme_mod('footer_menu_hover_background_image','none') ?>');
    background-position:<?php echo get_theme_mod('footer_menu_background_image_position','initial') ?>;
    background-repeat:<?php echo get_theme_mod('footer_menu_background_image_repeat','no-repeat') ?>;
  <?php } ?>
  }
  
  #footer #footer_content .footer_widgets #sidebar ul.menu li a {
   color:<?php echo get_theme_mod('footer_menu_link_color','#FFF') ?>;
   font-family:<?php echo get_theme_mod('footer_menu_fonts','Arial,"Helvetica Neue",Helvetica,sans-serif') ?>;
   font-weight:<?php echo get_theme_mod('footer_menu_font_weight','normal') ?>;
   text-decoration:<?php echo get_theme_mod('footer_menu_link_decoration','none') ?>;
   height:<?php echo (get_theme_mod('footer_menu_height','20') + get_theme_mod('footer_font_size','14')); ?>px;
   line-height:<?php echo (get_theme_mod('footer_menu_height','20') + get_theme_mod('footer_font_size','14')) ?>px;
   padding-left:<?php echo get_theme_mod('footer_menu_width','6') ?>px;
   padding-right:<?php echo get_theme_mod('footer_menu_width','6') ?>px;
   text-align:center;
   display: inline-block;
  }
  
  #footer #footer_content .footer_widgets #sidebar ul.menu li a:hover {
    color:<?php echo get_theme_mod('footer_menu_link_hover_color','#F4F4F4') ?>;
  }
  
  .footer_object {
	display:block;
	padding:2px;
  }