<?php
/** REGISTER CUSTOM CONTROLS **/
if( class_exists( 'WP_Customize_Control' ) ):
	//Header Type
	class WP_header_type extends WP_Customize_Control {
		public $type = 'headerType';

		public function render_content() {
		?>
			<label>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<div id="header_type">
					<form action="">
						    <input type="radio" name="a" value="a" id="a" checked />
						    <label for="a">
									<img value="b" src="<?php echo get_bloginfo('template_directory') ?>/options/images/header_options/menu_only.png">
									<span>Menu Only</span>
								</label>

						    <input type="radio" name="a" value="b" id="b" />
						    <label for="b">
									<img value="b" src="<?php echo get_bloginfo('template_directory') ?>/options/images/header_options/logo_only.png">
									<span>Logo Only</span>
								</label>

						    <input type="radio" name="a" value="c" id="c" />
						    <label for="c">
									<img value="b" src="<?php echo get_bloginfo('template_directory') ?>/options/images/header_options/logo_menu.png">
									<span>Logo and Menu</span>
								</label>

								<input type="radio" name="a" value="d" id="d" />
						    <label for="d">
									<img value="d" src="<?php echo get_bloginfo('template_directory') ?>/options/images/header_options/logo_widget.png">
									<span>Logo and Widget</span>
								</label>

								<input type="radio" name="a" value="e" id="e" />
						    <label for="e">
									<img value="e" src="<?php echo get_bloginfo('template_directory') ?>/options/images/header_options/logo_menu_widget.png">
									<span>Logo, Menu and Widget</span>
								</label>

								<input type="radio" name="a" value="f" id="f" />
						    <label for="f">
									<img value="f" src="<?php echo get_bloginfo('template_directory') ?>/options/images/header_options/menu_widget.png">
									<span>Menu and Widget</span>
								</label>
					</form>
				</div>
			</label>
		<?php
		}
	}

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
		public function render_content() {
		?>
			<div id="linespace"></div>
		<?php
		}
	}

endif;
?>
