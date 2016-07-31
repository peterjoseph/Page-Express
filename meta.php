<?php
    $author = get_theme_mod('content_meta_box_author','1');
    $comments = get_theme_mod('content_meta_box_comments','1');
    $categories = get_theme_mod('content_meta_box_categories','0');
    $time = get_theme_mod('content_meta_box_time','1');
?>

<div class="metadata">
     <?php if($author == true) { ?>
        <div class="mauthor">By <?php the_author_posts_link(); ?></div>
     <?php } ?>
     <?php if($time == true) { ?> 
        <div class="mtime"><?php the_time('F jS, Y'); ?></div>
     <?php } ?>
     <?php if($comments == true) { ?>
        <div class="mcomments"><?php comments_popup_link('0 comments', '1 comment', '% comments', 'comments-link', ''); ?></div>
     <?php } ?>
     <?php if($categories == true) { ?>
        <div class="mcategories"><?php _e( 'Posted In:' ) ?> <?php the_category( ', ' ); ?></div>
     <?php } ?>
</div>