<?php global $lsidebar; if($lsidebar == TRUE) { ?>
    <div class="left_sidebar">
        <div id="left_sidebar_wrapper">
            <div class="left_sidebar_content">
                <?php if ( is_active_sidebar( 'left_sidebar' ) ) : ?>
                    <?php dynamic_sidebar( 'left_sidebar' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php } ?>

<?php global $rsidebar; if($rsidebar == TRUE) { ?>
    <div class="right_sidebar">
        <div id="right_sidebar_wrapper">
            <div class="right_sidebar_content">
                <?php if ( is_active_sidebar( 'right_sidebar' ) ) : ?>
                    <?php dynamic_sidebar( 'right_sidebar' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php } ?>