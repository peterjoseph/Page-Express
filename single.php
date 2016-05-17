<?php get_header(); ?>

<?php global $cwrapper; if($cwrapper == TRUE) { ?>
	
        <div id="wrapper">
            <div class="<?php global $ccontent; if($ccontent == TRUE) {echo "ct ";}; global $lsidebar; if($lsidebar == TRUE) {echo "ls ";}; global $rsidebar; if($rsidebar == TRUE) {echo "rs";}; ?>">
                
                <?php 
                    include (get_template_directory().'/sidebar.php');
                    $featured_image = get_theme_mod('post_page_featured_image','below');
                    $metabox = get_theme_mod('post_page_meta_box','belowcontent');
                ?>
                
                <?php global $cwrapper; if($cwrapper == TRUE) { ?>
                    <div class="page">
                       
                       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                       
                            <div id="post">
                                <div id="post_content">
                                    <?php if($featured_image == 'above') { the_post_thumbnail(); }; ?>
                                    <div class="title">
                                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                    </div>
                                    <?php if($metabox == 'belowtitle') { include (get_template_directory().'/meta.php'); } ?>
                                    <?php if($featured_image == 'below') { the_post_thumbnail(); }; ?>
                                    <div class="entry">
                                        <?php the_content(); ?>
                                    </div>
                                    <?php if($metabox == 'belowcontent') { include (get_template_directory().'/meta.php'); } ?>
                                </div>
                            </div>
                        
                       <?php endwhile; else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                       <?php endif; ?>

                    </div>
                <?php } ?>
            </div> 
        </div>
	
<?php } ?>
		
<?php get_footer(); ?>