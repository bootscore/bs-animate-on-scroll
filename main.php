<?php
/*Plugin Name: bS5 Animate On Scroll
Plugin URI: https://bootscore.me/plugins/bs-animate-on-scroll/
Description: This plugin registers and initializes AOS library https://michalsnik.github.io/aos/ in WordPress. You can then use the animations by writing them into your HTML code like &lt;div data-aos="zoom-in-down"&gt;&lt;/div&gt;.
Version: 5.0.0.1
Author: Bastian Kreiter
Author URI: https://crftwrk.de
License: GPLv2
*/


// Register Styles and Scripts
function bs_aos_scripts() {
    
    wp_enqueue_script( 'aos-js', plugins_url( '/js/aos.js' , __FILE__ ), array( 'jquery' ), '1.0', true );

    wp_register_style( 'aos-css', plugins_url('css/aos.css', __FILE__) );
        wp_enqueue_style( 'aos-css' );
        
        }
    
add_action('wp_enqueue_scripts','bs_aos_scripts');
