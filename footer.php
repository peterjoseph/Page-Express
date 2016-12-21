<?php global $lunibar; if($lunibar == TRUE) { ?>

	<div id="lower_unibar">
		<div id="lower_unibar_content">
			<?php if ( is_active_sidebar( 'lub' ) ) : ?>
				<?php dynamic_sidebar( 'lub' ); ?>
			<?php endif; ?>
		</div>
	</div>

<?php } ?>


<?php global $multibar; if($multibar == TRUE) { ?>
	<div id="lower_multibar">
		<div id="lower_multibar_content">
			<div id="lower_multibar_container">
				<div id="lower_multibar_widget">
					<?php if ( is_active_sidebar( 'lmp1' ) ) : ?>
							<?php dynamic_sidebar( 'lmp1' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<?php $pcount = get_theme_mod('lower_multibar_panel_count','three'); if($pcount != 'one') { ?>
			<div id="lower_multibar_container">
				<div id="lower_multibar_widget">
					<?php if ( is_active_sidebar( 'lmp2' ) ) : ?>
							<?php dynamic_sidebar( 'lmp2' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<?php } ?>
			<?php if($pcount != 'two' && $pcount != 'one') { ?>
			<div id="lower_multibar_container">
				<div id="lower_multibar_widget">
					<?php if ( is_active_sidebar( 'lmp3' ) ) : ?>
							<?php dynamic_sidebar( 'lmp3' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<?php } ?>
			<?php if($pcount != 'three' && $pcount != 'two' && $pcount != 'one') { ?>
			<div id="lower_multibar_container">
				<div id="lower_multibar_widget">
					<?php if ( is_active_sidebar( 'lmp4' ) ) : ?>
							<?php dynamic_sidebar( 'lmp4' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<?php } ?>
			<div style="clear: both;"></div>
		</div>
	</div>
<?php } ?>

<?php global $footer; if($footer == TRUE) { ?>
	<div id="footer">
		<div id="footer_content">
			<div class="footer_copyright">
				<?php echo get_theme_mod('footer_copyright','Copyright &copy; 2017. All Rights Reserved. Created with Page Express.') ?>
			</div>
			<div class="footer_widgets">
				<?php if ( is_active_sidebar( 'footer_a' ) ) : ?>
					<ul id="sidebar">
						<?php dynamic_sidebar( 'footer_a' ); ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php } ?>

<?php wp_footer(); ?>
</body>
</html>
