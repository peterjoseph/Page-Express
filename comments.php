<div id="comments">
    <?php if ( post_password_required() ) : ?>
        <p class="comments_nopassword">
            <?php _e( 'This post is password protected.', 'pageexpress' ); ?>
        </p>
    <?php return; endif; ?>

    <?php if ( have_comments() ) : ?>
        <?php if(!get_theme_mod('cw_single_comments_layout_comments_header_visibility')) { ?>
            <h4 class="comments_title">
                <?php
                    printf( _n( 'One Comment', '%1$s Comments', get_comments_number(), 'pageexpress' ),
                    number_format_i18n( get_comments_number() ) );
                ?>
            </h4>
        <?php } ?>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <div class="comments_navigation">
                <div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'pageexpress' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'pageexpress' ) ); ?></div>
            </div>
        <?php endif; ?>

        <div class="comments_list">
            <?php wp_list_comments( $args, $comments ); ?>
        </div>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <div class="comments_navigation">
                <div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'pageexpress' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'pageexpress' ) ); ?></div>
            </div>
        <?php endif; ?>

        <?php

        if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="comments_empty">
                <?php _e( 'Comments are closed.' , 'pageexpress' ); ?>
            </p>
        <?php endif;  ?>

    <?php endif; ?>

    <?php comment_form(); ?>
</div>