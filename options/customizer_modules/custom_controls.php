<?php
/** REGISTER CUSTOM CONTROLS **/
if( class_exists( 'WP_Customize_Control' ) ):

	//Header Type Control
	class WP_header_type extends WP_Customize_Control {
			public $type = 'radio-header';

			public function enqueue() {
				wp_enqueue_script( 'jquery-ui-button' );
			}

			public function render_content() {
				if ( empty( $this->choices ) ) {
					return;
				}

				$name = 'header-' . $this->id;
				?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php if ( ! empty( $this->description ) ) : ?>
					<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php endif; ?>
				<div id="option_<?php echo $this->id; ?>" class="image">
					<div id="header_type">
					<?php foreach ( $this->choices as $value => $label ) : ?>
						<input class="image-select" type="radio" value="<?php echo esc_attr( $value ); ?>" id="<?php echo $this->id . $value; ?>" name="<?php echo esc_attr( $name ); ?>" <?php $this->link(); checked( $this->value(), $value ); ?>>
							<label for="<?php echo $this->id . $value; ?>">
								<img src="<?php echo esc_html( $label ); ?>" alt="<?php echo esc_attr( $value ); ?>" title="<?php echo esc_attr( $value ); ?>">
								<span><?php echo esc_attr( $value ); ?></span>
							</label>
						</input>
					<?php endforeach; ?>
					</div>
				</div>
				<script>jQuery(document).ready(function($) { $( '[id="option_<?php echo $this->id; ?>"]' ).buttonset(); });</script>
				<?php
			}
		}

	//Button Select Control
	class WP_button_select extends WP_Customize_Control {
		public $type = 'button-select';

		public function enqueue() {
			wp_enqueue_script( 'jquery-ui-button' );
		}

		public function render_content() {
			if ( empty( $this->choices ) ) {
				return;
			}

			$name = 'header-' . $this->id;
			?>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php if ( ! empty( $this->description ) ) : ?>
				<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
			<?php endif; ?>
			<div id="option_<?php echo $this->id; ?>">
				<div id="button_select">
					<?php foreach ( $this->choices as $value => $label ) : ?>
						<input class="button-select" type="radio" value="<?php echo esc_attr( $value ); ?>" id="<?php echo $this->id . $value; ?>" name="<?php echo esc_attr( $name ); ?>" <?php $this->link(); checked( $this->value(), $value ); ?>>
						<label for="<?php echo $this->id . $value; ?>">
							<span><?php echo esc_attr( $label ); ?></span>
						</label>
						</input>
					<?php endforeach; ?>
				</div>
			</div>
			<script>jQuery(document).ready(function($) { $( '[id="option_<?php echo $this->id; ?>"]' ).buttonset(); });</script>
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

	//Custom Range Control Control
	class WP_range extends WP_Customize_Control {
		public $type = 'range';
		public function enqueue() {
			wp_enqueue_script( 'jquery' );
		}
		public function render_content() {
			?>
			<label>
				<?php if ( ! empty( $this->label )) : ?>
					<span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
				<?php endif; ?>
				<span class="cs-range-value"><?php echo esc_attr($this->value()); ?></span><?php if ( ! empty( $this->type )) : ?><?php echo $this->type; ?><?php endif; ?>
				<input data-input-type="range" type="range" <?php $this->input_attrs(); ?> value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?> />
			</label>
			<script>(function ($) {
					jQuery(document).ready(function ($) {
						$('input[data-input-type]').on('input change', function () {
							var val = $(this).val();
							$(this).prev('.cs-range-value').html(val);
							$(this).val(val);
						});
					})
				})(jQuery);
			</script>
			<?php
		}
	}

endif;
?>
