<?php get_header(); ?>

<?php global $cwrapper; if($cwrapper == TRUE) { ?>
	
        <div class="container">
            <div class="row">
                <?php global $cwrapper; if($cwrapper == TRUE) { ?>
                    <div class="col-sm-6">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="title">
                                <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                            </div>
                            <div class="entry">
                                <?php include (get_template_directory().'/meta.php'); the_post_thumbnail(); ?>

                                <?php the_content(); ?>

                                <?php if ( comments_open() || '0' != get_comments_number() ) comments_template( '', true ); ?>
                            </div>
                        <?php endwhile; else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                    </div>
                <?php } ?>
                <?php include (get_template_directory().'/sidebar.php'); ?>
            </div>
        </div>

<div class="<?php global $ccontent; if($ccontent == TRUE) {echo "ct ";}; global $lsidebar; if($lsidebar == TRUE) {echo "ls ";}; global $rsidebar; if($rsidebar == TRUE) {echo "rs";}; ?>">
</div>
	
<?php } ?>
		
<?php get_footer(); ?>