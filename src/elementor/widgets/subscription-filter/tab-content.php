<?php
function filter_tab_content($widget)
{

    $widget->start_controls_section(
        'content_section',
        [
            'label' => esc_html__('Content', 'elementor-subscription-table'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );

    /********************************************************************************************/
    /************************************* Search & Filter **************************************/
    /********************************************************************************************/

    $widget->add_control(
        'subscription_search_label_text',
        [
            'label' => esc_html__('Search Label', 'elementor-subscription-table'),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__('Search', 'elementor-subscription-table'),
            'placeholder' => esc_html__('Type your search label here', 'elementor-subscription-table'),
        ]
    );

    $widget->add_control(
        'subscription_search_length_text',
        [
            'label' => esc_html__('Length Label', 'elementor-subscription-table'),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__('Length', 'elementor-subscription-table'),
            'placeholder' => esc_html__('Type your length label here', 'elementor-subscription-table'),
        ]
    );

    $widget->end_controls_section(); // Close Content Section
}
