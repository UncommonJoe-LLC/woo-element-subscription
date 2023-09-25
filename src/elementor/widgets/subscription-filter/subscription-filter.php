<?php

require_once('controls.php');
require_once('render.php');

// Add your custom widget using the 'elementor/widgets/widgets_registered' hook
add_action('elementor/widgets/widgets_registered', 'subscription_filter');

function subscription_filter()
{
    class Subscription_Filter_Widget extends \Elementor\Widget_Base
    {

        // Widget Name
        public function get_name()
        {
            return 'subscription-filter-widget';
        }

        // Widget Title
        public function get_title()
        {
            return __('Filter', 'elementor-subscription-table');
        }

        // Icon for widget
        public function get_icon()
        {
            return 'eicon-filter';
        }

        // Category
        public function get_categories()
        {
            return ['woo-subscription']; // Use your own category name
        }

        protected function _register_controls()
        {
            // Call function from controls.php
            register_filter_controls($this); // Include the control registration from controls.php
        }

        protected function render()
        {
            // Call function from render.php
            render_filter_widget($this); // Include the rendering code from render.php
        }
    }

    // Register your widget
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Subscription_Filter_Widget());
};
