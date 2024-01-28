<?php

/**
 * Plugin Name: WooCommerce Subscription Table for Elementor
 * Description: Adds subscription table widget to Elementor
 * Version: 1.6
 * Author: UncommonJoe LLC
 * Author URI: https://uncommonjoe.com
 */

add_action('init', 'initialize_plugin');
add_action('elementor/elements/categories_registered', 'add_elementor_widget_categories');

function initialize_plugin()
{
    add_action('admin_notices', 'my_plugin_dependency_notice');
    add_action('wp_enqueue_scripts', 'enqueue_plugin_scripts');

    // Get Subscription Table
    require_once('src/elementor/widgets/subscription-table/subscription-table.php');
    require_once('src/elementor/widgets/subscription-filter/subscription-filter.php');
    require_once('src/elementor/widgets/subscription-search/subscription-search.php');
}

function my_plugin_dependency_notice()
{
    if (
        !is_plugin_active('elementor/elementor.php') ||
        !is_plugin_active('woocommerce-subscriptions/woocommerce-subscriptions.php')
    ) {
        echo '<div class="error"><p>WooElement Subscription Table requires Elementor and WooCommerce Subscriptions to be active.</p></div>';
    }
}

// Add scripts and stylesheets
function enqueue_plugin_scripts()
{

    // Localize the script to pass the AJAX URL
    wp_localize_script('subscription-scripts', 'scripts', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));

    // Register the DataTables scripts
    wp_enqueue_script('dataTables-script', 'https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.js');

    //Bootstrap
    wp_enqueue_script('bootstrap-script', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js');


    // Enqueue the DataTables CSS stylesheet from the CDN
    wp_enqueue_style('datatables-style', 'https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.css');
    wp_enqueue_style('bootstrap-style', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css');

    // Enqueue the stylesheet.
    wp_enqueue_style('custom-styles', plugin_dir_url(__FILE__) . 'src/css/styles.css', array(), '1.0', 'all');
    add_action('wp_enqueue_scripts', 'enqueue_datatables_script');

    // Enqueue your JavaScript file
    wp_enqueue_script('subscription-scripts', plugin_dir_url(__FILE__) . 'src/js/scripts.js', ['jquery', 'dataTables-script'], '1.0', true);
}

function add_elementor_widget_categories($elements_manager)
{

    $elements_manager->add_category(
        'woo-subscription',
        [
            'title' => esc_html__('WooCommerce Subscription', 'elementor-subscription-table'),
            'icon' => 'fa fa-plug',
        ]
    );
}
