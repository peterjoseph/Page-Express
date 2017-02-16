<?php global $lsidebar; if($lsidebar == TRUE) { ?>
    <div class="col-sm-4">
      <?php if ( is_active_sidebar( 'left_sidebar' ) ) : ?>
          <?php dynamic_sidebar( 'left_sidebar' ); ?>
      <?php endif; ?>
    </div>
<?php } ?>

<?php global $rsidebar; if($rsidebar == TRUE) { ?>
    <div class="col-sm-6">
      <?php if ( is_active_sidebar( 'right_sidebar' ) ) : ?>
          <?php dynamic_sidebar( 'right_sidebar' ); ?>
      <?php endif; ?>
    </div>
<?php } ?>
