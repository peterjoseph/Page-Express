<?php global $lsidebar; if($lsidebar == TRUE) { ?>
    <div class="left_sidebar">
      <div class="left_sidebar_content">
            <div id="left_sidebar_content_wrapper">
              <?php if ( is_active_sidebar( 'left_sidebar' ) ) : ?>
                  <?php dynamic_sidebar( 'left_sidebar' ); ?>
              <?php endif; ?>
            </div>
      </div>
    </div>
<?php } ?>

<?php global $rsidebar; if($rsidebar == TRUE) { ?>
    <div class="right_sidebar">
      <div class="right_sidebar_content">
        <div id="right_sidebar_content_wrapper">
          <?php if ( is_active_sidebar( 'right_sidebar' ) ) : ?>
              <?php dynamic_sidebar( 'right_sidebar' ); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
<?php } ?>
