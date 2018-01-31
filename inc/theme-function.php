<?php
/**
 * petfirst specific theme functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage petfirst
 * @since petfirst 1.0
 */
//================================================================================//
/* Display post thumbnail meta box including description */
//================================================================================//
add_filter( 'admin_post_thumbnail_html', 'petfirst_thumbnail_add_description', 10, 2 );

function petfirst_thumbnail_add_description( $content, $post_id ){
$post = get_post( $post_id );
$post_type = $post->post_type;
    $content .= "<p><label for=\"html\">Add a hero image here to right of your pages content.</label></p>";
    return $content;
    return $post_id;
}

//================================================================================//
// Add Title/Subtitle Meta Box to all Pages
//================================================================================//
$prefix = 'petfirst_';
 
$meta_box_strapline = array(
    'id' => 'strapline',
    'title' => __('Custom Page Content Settings', 'petfirst'),
    'page' => 'page',
    'context' => 'normal',
    'priority' => 'default',
    'fields' => array(
        array(
            'name' => __( 'Page Title Heading', 'petfirst' ),
            'desc' => __('Enter a new page title that is different from the original name.<br />(ie; My page title)', 'petfirst'),
            'id' => $prefix . 'page_heading',
            'type' => 'text',
            'std' => ''
        ),
        array(
            'name' => __( 'Call To Action', 'petfirst' ),
            'desc' => __('Enter a CTA to appear below the main content besides the hero area.<br />(ie; image, video, CTA.)', 'petfirst'),
            'id' => $prefix . 'page_subtitle',
            'type' => 'text',
            'std' => ''
        )
        
    )
);

add_action('admin_menu', 'petfirst_add_box_strapline');

//================================================================================//
//  Callback function to show fields in meta box
//================================================================================//
function petfirst_show_box_strapline() {
    global $meta_box_strapline, $post;
    
    // Use nonce for verification
    echo '<input type="hidden" name="petfirst_add_box_strapline_nonce" value="', wp_create_nonce( basename( __FILE__ ) ), '" />';

    echo '<table class="form-table">';
        
    foreach ( $meta_box_strapline['fields'] as $field ) {
        // get current post meta data
        $meta = get_post_meta( $post->ID, $field['id'], true );
        switch ( $field['type'] ) {
 
            
            //If Text       
            case 'text':
            
            echo '<tr style="border-bottom:1px solid #eeeeee;">',
                '<th style="width:25%; font-weight: normal;"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><p style=" display:block; color:#666; margin:5px 0 0 0; line-height: 18px;">'. $field['desc'].'</p></label></th>',
                '<td>';
            echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '" size="30" style="width:75%; margin-right: 20px; float:left;" />';
            
            break;
            
            //If textarea       
            case 'textarea':
            
            echo '<tr>',
                '<th style="width:25%; font-weight: normal;"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><p style="line-height:18px; display:block; color:#666; margin:5px 0 0 0;">'. $field['desc'].'</p></label></th>',
                '<td>';
            echo '<textarea name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" rows="4" cols="5" style="width:75%; margin-right: 20px; float:left;">', $meta ? $meta : $field['std'], '</textarea>';
            
            break;
 
            //If Button 
            case 'button':
                echo '<input style="float: left;" type="button" class="button" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" />';
                echo    '</td>',
            '</tr>';
            
            break;
            
            //If Select 
            case 'select':
            
                echo '<tr>',
                '<th style="width:25%; font-weight: normal;"><label for="', $field['id'], '"><strong>', $field['name'], '</strong><p style=" display:block; color:#666; margin:5px 0 0 0; line-height: 18px;">'. $field['desc'].'</p></label></th>',
                '<td>';
            
                echo'<select id="' . $field['id'] . '" name="'.$field['id'].'">';
            
                foreach ($field['options'] as $option) {
                    
                    echo'<option';
                    if ($meta == $option ) { 
                        echo ' selected="selected"'; 
                    }
                    echo'>'. $option .'</option>';
                
                } 
                
                echo'</select>';
            
            break;
        }

    }
 
    echo '</table>';
}

add_action( 'save_post', 'petfirst_save_data_strapline' );

//================================================================================//
//  Add metabox to edit page
//================================================================================//
function petfirst_add_box_strapline() {
    global $meta_box_strapline;
    
    add_meta_box($meta_box_strapline['id'], $meta_box_strapline['title'], 'petfirst_show_box_strapline', $meta_box_strapline['page'], $meta_box_strapline['context'], $meta_box_strapline['priority']);
}
// Save data from meta box
function petfirst_save_data_strapline($post_id) {
    global $meta_box_strapline;

    // verify nonce
    if ( !isset($_POST['petfirst_add_box_strapline_nonce']) || !wp_verify_nonce($_POST['petfirst_add_box_strapline_nonce'], basename(__FILE__))) {
        return $post_id;
    }

    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }

    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return $post_id;
        }
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }

    foreach ($meta_box_strapline['fields'] as $field) { // save each option
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];

        if ($new && $new != $old) { // compare changes to existing values
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    }
}

//================================================================================//
//Search URL Re-Write
//================================================================================//
function petfirst_change_search_url_rewrite() {
    if ( is_search() && ! empty( $_GET['s'] ) ) {
        wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
        exit();
    }    
}
add_action( 'template_redirect', 'petfirst_change_search_url_rewrite' );