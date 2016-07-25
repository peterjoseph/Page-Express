<div id="comments">
    <?php if ( post_password_required() ) : ?>
        <p class="comments_nopassword">
            <?php _e( 'This post is password protected.', 'objecttheme' ); ?>
        </p>
    <?php return; endif; ?>

    <?php if ( have_comments() ) : ?>
        <h3 class="comments_title">
            <?php
                printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), 'objecttheme' ),
                number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
            ?>
        </h3>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <div class="comments_navigation">
                <div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'objecttheme' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'objecttheme' ) ); ?></div>
            </div>
        <?php endif; ?>

        <ol class="comments_list">
            <?php wp_list_comments( $args, $comments ); ?>
        </ol>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
            <div class="comments_navigation">
                <div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'objecttheme' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'objecttheme' ) ); ?></div>
            </div>
        <?php endif; ?>

        <?php

        if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="comments_empty">
                <?php _e( 'Comments are closed.' , 'objecttheme' ); ?>
            </p>
        <?php endif;  ?>

    <?php endif; ?>

    <?php comment_form(); ?>
</div>