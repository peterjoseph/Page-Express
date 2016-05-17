<?php
/** POST & PAGES META BOX - RIGHT SIDEBAR **/
    add_action( 'add_meta_boxes', 'meta_panel_visibility' );
    function meta_panel_visibility() {
        add_meta_box( 'panel_visibility', 'Panel Visibility', 'panel_visibility_options', null, 'side', 'high' );
    }
    
    function panel_visibility_options($post) {
        wp_nonce_field( basename( __FILE__ ), 'nonce' );
        $pv_store = get_post_meta( $post->ID );
    
        ?> 
        <script type="text/javascript">
            window.onload = function() {
                if(document.getElementById('enable-control').checked) {
                        document.getElementById('visibility_options').setAttribute("style", "visibility:visible; padding:10px; background-color:#F4F4F4; border-radius:3px; margin-top:10px;");
                }
                else {
                    document.getElementById('visibility_options').setAttribute("style", "visibility:hidden; height:0px;");
                }
                document.getElementById('enable-control').onclick = function() {
                    if(this.checked) {
                        document.getElementById('visibility_options').setAttribute("style", "visibility:visible; padding:10px; background-color:#F3F3F3; border-radius:3px; margin-top:10px;");
                    }
                    else {
                        document.getElementById('visibility_options').setAttribute("style", "visibility:hidden; padding:0px; height:0px; margin-top:0px;");
                    }
                }
            }
        </script>
        
        <p>
            <i>
                Click 'Enable Visibility' to uniquely control the visibility of theme content areas on this post/page.
            </i>
        </p>
                   
        <label for="enable-control">
                <input type="checkbox" name="enable-control" id="enable-control" value="yes" <?php if ( isset ( $pv_store['enable-control'] ) ) checked( $pv_store['enable-control'][0], 'yes' ); ?> />
                <?php _e( 'Enable Visibility Control', 'pv_checkbox' )?>
        </label>

                
         <div id="visibility_options">
             
             <div id="meta-box-title">
                 <b>Headers</b>
             </div>
             <div id="meta-box-content">
                <label for="header1-control">
                        <input type="checkbox" name="header1-control" id="header1-control" value="yes" <?php if ( isset ( $pv_store['header1-control'] ) ) checked( $pv_store['header1-control'][0], 'yes' ); ?> />
                        <?php _e( 'Show Primary Header', 'pv_checkbox' )?>
                </label><br>
                <label for="header2-control">
                        <input type="checkbox" name="header2-control" id="header2-control" value="yes" <?php if ( isset ( $pv_store['header2-control'] ) ) checked( $pv_store['header2-control'][0], 'yes' ); ?> />
                        <?php _e( 'Show Secondary Header', 'pv_checkbox' )?>
                </label><br>
                <label for="header3-control">
                        <input type="checkbox" name="header3-control" id="header3-control" value="yes" <?php if ( isset ( $pv_store['header3-control'] ) ) checked( $pv_store['header3-control'][0], 'yes' ); ?> />
                        <?php _e( 'Show Tertiary Header', 'pv_checkbox' )?>
                </label>
             </div>
             
             <div id="meta-box-title">
                 <b>Upper Uni-Bar</b>
             </div>
             <div id="meta-box-content">
                <label for="upperunibar-control">
                        <input type="checkbox" name="upperunibar-control" id="upperunibar-control" value="yes" <?php if ( isset ( $pv_store['upperunibar-control'] ) ) checked( $pv_store['upperunibar-control'][0], 'yes' ); ?> />
                        <?php _e( 'Show Upper Uni-bar', 'pv_checkbox' )?>
                </label>
             </div>
             
             <div id="meta-box-title">
                 <b>Content & Sidebars</b>
             </div>
             <div id="meta-box-content">
                <label for="wrapper-control">
                        <input type="checkbox" name="wrapper-control" id="wrapper-control" value="yes" <?php if ( isset ( $pv_store['wrapper-control'] ) ) checked( $pv_store['wrapper-control'][0], 'yes' ); ?> />
                        <?php _e( 'Show Main Wrapper', 'pv_checkbox' )?>
                </label><br>
                <label for="leftsidebar-control">
                        <input type="checkbox" name="leftsidebar-control" id="leftsidebar-control" value="yes" <?php if ( isset ( $pv_store['leftsidebar-control'] ) ) checked( $pv_store['leftsidebar-control'][0], 'yes' ); ?> />
                        <?php _e( 'Show Left Sidebar', 'pv_checkbox' )?>
                </label><br>
                <label for="rightsidebar-control">
                        <input type="checkbox" name="rightsidebar-control" id="rightsidebar-control" value="yes" <?php if ( isset ( $pv_store['rightsidebar-control'] ) ) checked( $pv_store['rightsidebar-control'][0], 'yes' ); ?> />
                        <?php _e( 'Show Right Sidebar', 'pv_checkbox' )?>
                </label><br>
                <label for="content-control">
                        <input type="checkbox" name="content-control" id="content-control" value="yes" <?php if ( isset ( $pv_store['content-control'] ) ) checked( $pv_store['content-control'][0], 'yes' ); ?> />
                        <?php _e( 'Show Post/Page Content', 'pv_checkbox' )?>
                </label>
             </div>
             
             <div id="meta-box-title">
                 <b>Lower Uni-bar</b>
             </div>
             <div id="meta-box-content">
                <label for="lowerunibar-control">
                        <input type="checkbox" name="lowerunibar-control" id="lowerunibar-control" value="yes" <?php if ( isset ( $pv_store['lowerunibar-control'] ) ) checked( $pv_store['lowerunibar-control'][0], 'yes' ); ?> />
                        <?php _e( 'Show Lower Uni-bar', 'pv_checkbox' )?>
                </label>
             </div>
             
             <div id="meta-box-title">
                 <b>Footer Area</b>
             </div>
             <div id="meta-box-content">
                <label for="multibar-control">
                        <input type="checkbox" name="multibar-control" id="multibar-control" value="yes" <?php if ( isset ( $pv_store['multibar-control'] ) ) checked( $pv_store['multibar-control'][0], 'yes' ); ?> />
                        <?php _e( 'Show Multi-bar', 'pv_checkbox' )?>
                </label><br>
                <label for="footer-control">
                        <input type="checkbox" name="footer-control" id="footer-control" value="yes" <?php if ( isset ( $pv_store['footer-control'] ) ) checked( $pv_store['footer-control'][0], 'yes' ); ?> />
                        <?php _e( 'Show Footer', 'pv_checkbox' )?>
                </label>
             </div>
             
         </div>
<?php }
    add_action( 'save_post', 'meta_panel_visibility_save' );     
    function meta_panel_visibility_save( $post_id ) {
        $is_autosave = wp_is_post_autosave( $post_id );
        $is_revision = wp_is_post_revision( $post_id );
        $is_valid_nonce = ( isset( $_POST[ 'nonce' ] ) && wp_verify_nonce( $_POST[ 'nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

        if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
            return;
        }
    
        //Visibility control
        if( isset( $_POST[ 'enable-control' ] ) ) {
            update_post_meta( $post_id, 'enable-control', 'yes' );
        } else {
            update_post_meta( $post_id, 'enable-control', '' );
        }

        //Header controls
        if( isset( $_POST[ 'header1-control' ] ) ) {
            update_post_meta( $post_id, 'header1-control', 'yes' );
        } else {
            update_post_meta( $post_id, 'header1-control', '' );
        }

        if( isset( $_POST[ 'header2-control' ] ) ) {
            update_post_meta( $post_id, 'header2-control', 'yes' );
        } else {
            update_post_meta( $post_id, 'header2-control', '' );
        }

        if( isset( $_POST[ 'header3-control' ] ) ) {
            update_post_meta( $post_id, 'header3-control', 'yes' );
        } else {
            update_post_meta( $post_id, 'header3-control', '' );
        }
        
        //Upper Uni-bar control
        if( isset( $_POST[ 'upperunibar-control' ] ) ) {
            update_post_meta( $post_id, 'upperunibar-control', 'yes' );
        } else {
            update_post_meta( $post_id, 'upperunibar-control', '' );
        }
        
        //Content & Sidebars control
        if( isset( $_POST[ 'wrapper-control' ] ) ) {
            update_post_meta( $post_id, 'wrapper-control', 'yes' );
        } else {
            update_post_meta( $post_id, 'wrapper-control', '' );
        }
        
        if( isset( $_POST[ 'leftsidebar-control' ] ) ) {
            update_post_meta( $post_id, 'leftsidebar-control', 'yes' );
        } else {
            update_post_meta( $post_id, 'leftsidebar-control', '' );
        }
        
        if( isset( $_POST[ 'rightsidebar-control' ] ) ) {
            update_post_meta( $post_id, 'rightsidebar-control', 'yes' );
        } else {
            update_post_meta( $post_id, 'rightsidebar-control', '' );
        }
        
        if( isset( $_POST[ 'content-control' ] ) ) {
            update_post_meta( $post_id, 'content-control', 'yes' );
        } else {
            update_post_meta( $post_id, 'content-control', '' );
        }
        
        //Lower Uni-Bar control
        if( isset( $_POST[ 'lowerunibar-control' ] ) ) {
            update_post_meta( $post_id, 'lowerunibar-control', 'yes' );
        } else {
            update_post_meta( $post_id, 'lowerunibar-control', '' );
        }
        
        //Footer control
        if( isset( $_POST[ 'multibar-control' ] ) ) {
            update_post_meta( $post_id, 'multibar-control', 'yes' );
        } else {
            update_post_meta( $post_id, 'multibar-control', '' );
        }
        
        if( isset( $_POST[ 'footer-control' ] ) ) {
            update_post_meta( $post_id, 'footer-control', 'yes' );
        } else {
            update_post_meta( $post_id, 'footer-control', '' );
        }
        
    }
?>