<?php get_header(); ?>

<?php global $cwrapper; if($cwrapper == TRUE) { ?>
	
        <div id="wrapper">
            <div class="<?php global $ccontent; if($ccontent == TRUE) {echo "ct ";}; global $lsidebar; if($lsidebar == TRUE) {echo "ls ";}; global $rsidebar; if($rsidebar == TRUE) {echo "rs";}; ?>">
                
                <?php 
                    include (get_template_directory().'/sidebar.php');
                    $featured_image = get_theme_mod('homepage_featured_image','below');
                    $metabox = get_theme_mod('homepage_meta_box','belowcontent');
                ?>
                
                <?php global $cwrapper; if($cwrapper == TRUE) { ?>
                    <div class="page">
                       
                       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                       
                            <div id="post" class="id-<?php the_ID(); ?>">
                                <div id="post_content">
                                    <?php if($featured_image == 'above') { the_post_thumbnail(); }; ?>
                                    <div class="title">
                                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                    </div>
                                    <?php if($metabox == 'belowtitle') { include (get_template_directory().'/meta.php'); } ?>
                                    <?php if($featured_image == 'below') { the_post_thumbnail(); }; ?>
                                    <div class="entry">
                                        <?php if(get_theme_mod('homepage_enable_excerpts','1') == TRUE) {
                                                the_excerpt();
                                            } else {
                                                the_content();
                                            }
                                        ?>
                                    </div>
                                    <?php if($metabox == 'belowcontent') { include (get_template_directory().'/meta.php'); } ?>
                                </div>
                            </div>
                        
                       <?php endwhile; else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                       <?php endif; ?>

                        <?php } ?>

                        <div class="page_navigation">
                            <?php if(get_theme_mod('cw_navigation_nextAndPreviousPage_navigation_style','text') == 'text') { ?>
                                <div class="text_nav">
                                    <div class="alignleft"><?php next_posts_link('< Previous') ?></div>
                                    <div class="alignright"><?php previous_posts_link('Next >;') ?></div>
                                </div>
                            <?php } else { ?>
                                <div class="numerical_nav">
                                   <?php global $wp_query;
                                    $all_pages = $wp_query->max_num_pages;
                                    if ($all_pages > 1){
                                        $current_page = max(1, get_query_var('paged'));
                                        echo paginate_links(array(
                                            'base' => get_pagenum_link(1) . '%_%',
                                            'format' => '/page/%#%',
                                            'current' => $current_page,
                                            'total' => $all_pages,
                                        ));
                                    } ?>
                                </div>
                            <?php } ?>
                        </div>

                    </div>
            </div> 
        </div>
	
<?php } ?>
		
<?php get_footer(); ?>