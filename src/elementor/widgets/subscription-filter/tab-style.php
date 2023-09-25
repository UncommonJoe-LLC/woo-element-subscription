<?php
function filter_tab_styles($widget)
{

    /********************************************************************************************/
    /************************************* Filter **************************************/
    /********************************************************************************************/
    $widget->start_controls_section(
        'subscription_filter_style',
        [
            'label' => __('Filter', 'elementor-subscription-table'),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );

    $widget->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'subscription_filter_title',
            'selector' => '{{WRAPPER}} #filterListBtn',
        ]
    );

    $widget->start_controls_tabs(
        'subscription_filter_tabs'
    );

    /*** Filter Button Tab ***/
    $widget->start_controls_tab(
        'subscription_filter_button_tab_normal',
        [
            'label' => esc_html__('Normal', 'textdomain'),
        ]
    );

    $widget->add_control(
        'subscription_filter_button_normal_color',
        [
            'label'     => __('Text', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} #filterListBtn' => 'color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'subscription_filter_button_normal_background',
        [
            'label'     => __('Background', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} #filterListBtn' => 'background-color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'subscription_filter_button_normal_border_color',
        [
            'label'     => __('Border', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} #filterListBtn' => 'border-color: {{VALUE}};',
            ],
        ]
    );

    $widget->end_controls_tab();

    /*** Filter Button Tab Hover ***/
    $widget->start_controls_tab(
        'subscription_filter_button_tab_hover',
        [
            'label' => esc_html__('Hover', 'textdomain'),
        ]
    );

    $widget->add_control(
        'subscription_filter_button_hover_color',
        [
            'label'     => __('Text', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} #filterListBtn:hover' => 'color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'subscription_filter_button_hover_background',
        [
            'label'     => __('Background', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} #filterListBtn:hover' => 'background-color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'subscription_filter_button_hover_border_color',
        [
            'label'     => __('Border', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} #filterListBtn:hover' => 'border-color: {{VALUE}};',
            ],
        ]
    );

    $widget->end_controls_tab();

    /*** Filter Button Tab Active ***/
    $widget->start_controls_tab(
        'subscription_filter_button_tab_active',
        [
            'label' => esc_html__('Active', 'textdomain'),
        ]
    );

    $widget->add_control(
        'subscription_filter_button_active_color',
        [
            'label'     => __('Text', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} #filterListBtn.show' => 'color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'subscription_filter_button_active_background',
        [
            'label'     => __('Background', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} #filterListBtn.show' => 'background-color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'subscription_filter_button_active_border_color',
        [
            'label'     => __('Border', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} #filterListBtn.show' => 'border-color: {{VALUE}};',
            ],
        ]
    );

    $widget->end_controls_tab();
    $widget->end_controls_tabs();

    // Add separator control
    $widget->add_control(
        'divider_search',
        [
            'label'     => __('Separator', 'elementor-subscription-table'),
            'show_label' => true,
            'type'      => \Elementor\Controls_Manager::DIVIDER,
        ]
    );

    $widget->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        [
            'name' => 'search_input_border',
            'selector' => '{{WRAPPER}} #filterListBtn',
        ]
    );

    $widget->add_responsive_control(
        'search_input_margin',
        [
            'label'      => __('Margin', 'elementor-subscription-table'),
            'type'       => \Elementor\Controls_Manager::DIMENSIONS,
            'selectors'  => [
                '{{WRAPPER}} #filterListBtn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
            'default'    => [
                'top'    => '',
                'right'  => '',
                'bottom' => '',
                'left'   => '',
                'unit'   => 'px',
            ],
            'separator'  => ' ',
            'size_units' => ['px', '%', 'em', 'rem', 'custom'],
        ]
    );

    $widget->add_responsive_control(
        'search_input_padding',
        [
            'label'      => __('Padding', 'elementor-subscription-table'),
            'type'       => \Elementor\Controls_Manager::DIMENSIONS,
            'selectors'  => [
                '{{WRAPPER}} #filterListBtn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
            'default'    => [
                'top'    => '8',
                'right'  => '10',
                'bottom' => '8',
                'left'   => '10',
                'unit'   => 'px',
            ],
            'separator'  => ' ',
            'size_units' => ['px', '%', 'em', 'rem', 'custom'],
        ]
    );

    // Add control for cell padding
    $widget->add_responsive_control(
        'search_input_border_radius',
        [
            'label'      => __('Border Radius', 'elementor-subscription-table'),
            'type'       => \Elementor\Controls_Manager::DIMENSIONS,
            'selectors'  => [
                '{{WRAPPER}} #filterListBtn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
            'default'    => [
                'top'    => '',
                'right'  => '',
                'bottom' => '',
                'left'   => '',
                'unit'   => 'px',
            ],
            'separator'  => ' ',
            'size_units' => ['px', '%', 'em', 'rem', 'custom'],
        ]
    );

    $widget->end_controls_section(); // Close Search & Filter
}
