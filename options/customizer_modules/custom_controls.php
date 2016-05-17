<?php
/** REGISTER CUSTOM CONTROLS **/
if( class_exists( 'WP_Customize_Control' ) ):
	//Section Title Control
	class WP_Customize_Title_Area extends WP_Customize_Control {
		public $type = 'titlearea';
 
		public function render_content() {
		?>
				<div id="region_titles"><?php echo esc_html( $this->label ); ?></div>
		<?php
		}
	}
	
	//Grand Title Control
	class WP_Customize_Grand_Title_Area extends WP_Customize_Control {
		public $type = 'grandtitlearea';
 
		public function render_content() {
		?>
				<div id="grand_region_titles"><?php echo esc_html( $this->label ); ?></div>
		<?php
		}
	}
    
    //Line Space Control
	class WP_Line_Space extends WP_Customize_Control {
		public $type = 'linespace';
 
		public function render_content() {
		?>
				<div id="linespace"></div>
		<?php
		}
	}
    
endif;
?>