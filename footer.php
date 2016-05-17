<?php global $lunibar; if($lunibar == TRUE) { ?>
	
	<div id="luni">
		<div id="luni_content">
			<?php if ( is_active_sidebar( 'lub' ) ) : ?>
				<?php dynamic_sidebar( 'lub' ); ?>
			<?php endif; ?>
		</div>
	</div>

<?php } ?>


<?php global $multibar; if($multibar == TRUE) { ?>
	<div id="lmulti">
		<div id="lmulti_content">
			<div id="lmulti_p">
				<div id="lmulti_p_w">
					<?php if ( is_active_sidebar( 'lmp1' ) ) : ?>
							<?php dynamic_sidebar( 'lmp1' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<?php $pcount = get_theme_mod('lower_multibar_panel_count','three'); if($pcount != 'one') { ?>
			<div id="lmulti_p">
				<div id="lmulti_p_w">
					<?php if ( is_active_sidebar( 'lmp2' ) ) : ?>
							<?php dynamic_sidebar( 'lmp2' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<?php } ?>
			<?php if($pcount != 'two' && $pcount != 'one') { ?>
			<div id="lmulti_p">
				<div id="lmulti_p_w">
					<?php if ( is_active_sidebar( 'lmp3' ) ) : ?>
							<?php dynamic_sidebar( 'lmp3' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<?php } ?>
			<?php if($pcount != 'three' && $pcount != 'two' && $pcount != 'one') { ?>
			<div id="lmulti_p">
				<div id="lmulti_p_w">
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
				<?php echo get_theme_mod('footer_copyright','Copyright &copy; 2016. All Rights Reserved. Created with Object.') ?>
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