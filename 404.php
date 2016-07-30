<?php get_header(); ?>

<?php global $cwrapper; if($cwrapper == TRUE) { ?>
	
        <div id="wrapper">
            <div class="<?php global $ccontent; if($ccontent == TRUE) {echo "ct ";}; global $lsidebar; if($lsidebar == TRUE) {echo "ls ";}; global $rsidebar; if($rsidebar == TRUE) {echo "rs";}; ?>">

                <?php include (get_template_directory().'/sidebar.php'); ?>
                
                <?php global $cwrapper; if($cwrapper == TRUE) { ?>

                <div id="single">
                    <div id="single_content">

                            <div class="title">
                                <?php _e( 'Not Found', 'objecttheme' ); ?>
                            </div>
                            <div class="entry">
                                <p><?php _e( 'Nothing found for the requested page.', 'objecttheme' ); ?></p>
                            </div>

                    </div>
                </div>

                <?php } ?>

            </div>

        </div>
	
<?php } ?>
		
<?php get_footer(); ?>