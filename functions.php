<?php

function dragon_theme_support(){
    //dynamically add title tag to header
    add_theme_support('title-tag');
    //dynamically add logo to header
    add_theme_support('custom-logo');
    //dynamically add thumbnails and featured images to posts
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'dragon_theme_support');

function dragon_menus(){
    $locations = array(
        'primary' => "Main Menu",
        'footer' => "Footer Menu"
    );

    register_nav_menus($locations);
}
add_action('init','dragon_menus');


function dragon_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('site-css', get_template_directory_uri() . '/assets/styles/css/app.css', array(), '$version', 'all');
}
add_action('wp_enqueue_scripts', 'dragon_styles');


function dragon_scripts(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_script('jquery-main', get_template_directory_uri(). '/assets/scripts/js/vendor/jquery.js');
    wp_enqueue_script('site-js', get_template_directory_uri() . '/assets/scripts/scripts.js', array(), '$version', true);
}
add_action('wp_enqueue_scripts', 'dragon_scripts');

add_action('wp_ajax_wayce-form', 'dragon_enquiry');
add_action('wp_ajax_nopriv_wayce-form', 'dragon_enquiry');

function dragon_enquiry(){

    $form_data = [];

    wp_parse_str($_POST['wayce-form'], $form_data);

    //admin email
    $admin_email = get_option('admin_email');

    // email headers
    $headers[] = 'Content-Type: text/html; charset=UTF-8';
    $headers[] = 'From: WAYCE Website < ' . $admin_email . ' >';
    $headers[] = 'Reply to: ' . $form_data['form-email'];
    $headers[] = 'BCC: info@wayce.org';

    //email recipient
    $send_to = $admin_email;

    // subject
    $subject = "WAYCE Website " . $form_data['form-enquiry'] . " Enquiry from " . $form_data['form-firstname'] . ' ' . $form_data['form-lastname'];

    // message
    $message = '';

    foreach ($form_data as $index => $field) {
        $message .= '<strong>' . $index . '</strong>: ' . $field . '<br />';
    }

    try {
        if ( wp_mail($send_to, $subject, $message, $headers) ) {

            wp_send_json_success('Thank you for contacting us, a member of our team would get back to you shortly!');

        } else {

            wp_send_json_error('There was an error, please check servers and try again!');

        }
    } catch (Exception $e) {

        wp_send_json_error($e->getMessage());
    }



    wp_send_json_success( $form_data['form-firstname'] );
}

function dragon_widgets() {

    register_sidebar(
        array(
            'name' => 'Search Sidebar',
            'id' => 'search-sidebar',
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => ' ',
            'description' => 'Sidebar in widget area'
        )
    );

    register_sidebar(
        array(
            'name' => 'Category Sidebar',
            'id' => 'category-sidebar',
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="unordered-list bullet-primary text-reset">',
            'after_widget' => '</ul>',
            'description' => 'Sidebar in widget area'
        )
    );

    register_sidebar(
        array(
            'name' => 'Archive Sidebar',
            'id' => 'archive-sidebar',
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="unordered-list bullet-primary text-reset">',
            'after_widget' => '</ul>',
            'description' => 'Sidebar in widget area'
        )
    );

    register_sidebar(
        array(
            'name' => 'Tag Sidebar',
            'id' => 'tag-sidebar',
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="unordered-list bullet-primary text-reset">',
            'after_widget' => '</ul>',
            'description' => 'Sidebar in widget area'
        )
    );
}
add_action( 'widgets_init', 'dragon_widgets' );


function dragon_pagination() {
    $allowed_tags = [
        'span' => [
            'class' => [],
            'aria-hidden' => []
        ],
        'li' => [
            'class' => []
        ],
        'a' => [
            'class' => [],
            'aria-label' => [],
            'active' => [],
            'href' => []
        ],
        'i' => [
            'class' => []
        ]
    ];

    $args = [
        'before_page_number' => '<li class="page-item page-link">',
        'after_page_number' => '</li>',
        'prev_text' => '<li class="page-item page-link"><span aria-hidden="true"><i class="uil uil-arrow-left">' . __( ' ', 'dragon_pagination' ) . '</i></span></li>',
        'next_text' => '<li class="page-item page-link"><span aria-hidden="true"><i class="uil uil-arrow-right">' . __( ' ', 'dragon_pagination' ) . '</i></span></li>',
    ];

    printf( '<nav class="d-flex" aria-label="pagination"><ul class="pagination">%s</ul></nav>', wp_kses( paginate_links( $args ), $allowed_tags ) );
}

function dragon_search( $query ) {
    if ( $query -> is_search() ) {
        $query -> set('post_type', array('post'));
    }
}
add_filter('pre_get_posts', 'dragon_search');



?>
