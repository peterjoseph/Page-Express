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
									<img value="b" src="">
									<span>Option 1</span>
								</label>

						    <input type="radio" name="a" value="b" id="b" />
						    <label for="b">
									<img value="b" src="">
									<span>Option 2</span>
								</label>

						    <input type="radio" name="a" value="c" id="c" />
						    <label for="c">
									<img value="b" src="">
									<span>Option 3</span>
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
