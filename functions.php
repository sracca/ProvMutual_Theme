<?php

add_filter('avf_logo','av_change_logo_url');
add_filter('avf_logo_link','av_change_logo_link');

function av_change_logo_url($url)
{
    if (is_page_template('template-president.php')) {
    	$url = get_site_url().'/wp-content/themes/enfold-child/img/presidentclub-logo.png';
    }
    if (is_page_template('template-productfair.php')) {
    	$url = get_site_url().'/wp-content/themes/enfold-child/img/PM_weblogo.jpg';
    }
    if (is_page_template('template-executive50.php')) {
        $url = get_site_url().'/wp-content/themes/enfold-child/img/E50_LogoHeader_1.png';
    }

    return $url; 

}


function av_change_logo_link($link)
{
    if (is_page_template('template-president.php')) {
    	$link = get_site_url().'/presidentsclub';
    }
    if (is_page_template('template-productfair.php')) {
    	$link = get_site_url().'/productfair';
    }
    if (is_page_template('template-executive50.php')) {
        $link = get_site_url().'/executive50';
    }
    return $link;
}

function register_my_menu() {
    register_nav_menu('quick-links',__( 'Quick Links' ));
}
add_action( 'init', 'register_my_menu' );


