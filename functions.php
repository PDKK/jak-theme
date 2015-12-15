<?php

// Simple Query String Login page protection
function example_simple_query_string_protection_for_login_page() {
$QS = '?mySecretString=foobar';
$theRequest = 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress/' . 'wp-login.php' . '?'. $_SERVER['QUERY_STRING'];

// these are for testing
// echo $theRequest . '<br>';
// echo site_url('/wp-login.php').$QS.'<br>';   

    if ( site_url('/wp-login.php').$QS == $theRequest ) {
        echo 'Query string matches';
    } else {
        echo 'no match<br/>';
        echo 'Request ' . $theRequest . '<br/>';
        echo 'Expected ' . site_url('/wp-login.php').$QS;

    }
}
add_action('login_head', 'example_simple_query_string_protection_for_login_page');
add_action('get_header', 'my_filter_head');

function my_filter_head() {
   remove_action('wp_head', '_admin_bar_bump_cb');
} 
?>
