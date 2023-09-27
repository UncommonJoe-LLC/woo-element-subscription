<?php
function filter_tab_styles($widget)
{

    /********************************************************************************************/
    /************************************* Filter Button **************************************/
    /********************************************************************************************/
    $widget->start_controls_section(
        'subscription_filter_style',
        [
            'label' => __('Filter Button', 'elementor-subscription-table'),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );

    $widget->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'subscription_filter_title',
            'selector' => '#filterListBtn',
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
                '#filterListBtn' => 'color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'subscription_filter_button_normal_background',
        [
            'label'     => __('Background', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#filterListBtn' => 'background-color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'subscription_filter_button_normal_border_color',
        [
            'label'     => __('Border', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#filterListBtn' => 'border-color: {{VALUE}};',
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
                '#filterListBtn:hover' => 'color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'subscription_filter_button_hover_background',
        [
            'label'     => __('Background', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#filterListBtn:hover' => 'background-color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'subscription_filter_button_hover_border_color',
        [
            'label'     => __('Border', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#filterListBtn:hover' => 'border-color: {{VALUE}};',
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
                '#filterListBtn.show' => 'color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'subscription_filter_button_active_background',
        [
            'label'     => __('Background', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#filterListBtn.show' => 'background-color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'subscription_filter_button_active_border_color',
        [
            'label'     => __('Border', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#filterListBtn.show' => 'border-color: {{VALUE}};',
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
            'selector' => '#filterListBtn',
        ]
    );

    $widget->add_responsive_control(
        'search_input_padding',
        [
            'label'      => __('Padding', 'elementor-subscription-table'),
            'type'       => \Elementor\Controls_Manager::DIMENSIONS,
            'selectors'  => [
                '#filterListBtn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                '#filterListBtn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

    $widget->end_controls_section(); // Close Filter Button

    /********************************************************************************************/
    /************************************* Filter Dropdown **************************************/
    /********************************************************************************************/
    $widget->start_controls_section(
        'subscription_filter_dropdown_style',
        [
            'label' => __('Dropdown', 'elementor-subscription-table'),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );

    // Add separator control
    $widget->add_control(
        'divider_dropdown',
        [
            'label'     => __('Separator', 'elementor-subscription-table'),
            'show_label' => true,
            'type'      => \Elementor\Controls_Manager::DIVIDER,
        ]
    );

    $widget->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        [
            'name' => 'filter_dropdown_border',
            'selector' => '#filterDropdown',
        ]
    );

    $widget->add_group_control(
        \Elementor\Group_Control_Box_Shadow::get_type(),
        [
            'name' => 'box_shadow',
            'selector' => '#filterDropdown',
        ]
    );

    $widget->add_responsive_control(
        'filter_dropdown_width',
        [
            'label' => esc_html__('Width', 'textdomain'),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'size_units' => ['px', 'vw', 'custom'],
            'range' => [
                'px' => [
                    'min' => 250,
                    'max' => 1000,
                    'step' => 1,
                ],
                'vw' => [
                    'min' => 0,
                    'max' => 100,
                ],
            ],
            'devices' => ['desktop', 'tablet', 'mobile'],
            'desktop_default' => [
                'size' => '250',
                'unit' => 'px',
            ],
            'tablet_default' => [
                'size' => '250',
                'unit' => 'px',
            ],
            'mobile_default' => [
                'size' => '250',
                'unit' => 'px',
            ],
            'selectors' => [
                '#filterDropdown' => 'width: {{SIZE}}{{UNIT}};',
            ],
        ]
    );

    $widget->add_responsive_control(
        'filter_dropdown_padding',
        [
            'label'      => __('Padding', 'elementor-subscription-table'),
            'type'       => \Elementor\Controls_Manager::DIMENSIONS,
            'selectors'  => [
                '#filterDropdown' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
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
        'filter_dropdown_border_radius',
        [
            'label'      => __('Border Radius', 'elementor-subscription-table'),
            'type'       => \Elementor\Controls_Manager::DIMENSIONS,
            'selectors'  => [
                '#filterDropdown' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

    $widget->end_controls_section(); // Close Filter Dropdown

    /********************************************************************************************/
    /**************************** Filter Dropdown Action Buttons ********************************/
    /********************************************************************************************/
    $widget->start_controls_section(
        'filter_dropdown_buttons_style',
        [
            'label' => __('Action Buttons', 'elementor-subscription-table'),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );

    $widget->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'filter_dropdown_buttons_title',
            'selector' => '#filterListBtn',
        ]
    );

    $widget->start_controls_tabs(
        'filter_dropdown_buttons_tabs'
    );

    /*** Filter Button Tab ***/
    $widget->start_controls_tab(
        'filter_dropdown_buttons_tab_normal',
        [
            'label' => esc_html__('Normal', 'textdomain'),
        ]
    );

    $widget->add_control(
        'filter_dropdown_buttons_apply_normal_color',
        [
            'label'     => __('Apply Text', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#applyFilter' => 'color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'filter_dropdown_buttons_apply_normal_background',
        [
            'label'     => __('Apply Background', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#applyFilter' => 'background-color: {{VALUE}};',
            ],
        ]
    );


    $widget->add_control(
        'filter_dropdown_buttons_apply_normal_border_color',
        [
            'label'     => __('Apply Border', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#applyFilter' => 'border-color: {{VALUE}};',
            ],
        ]
    );

    // Add separator control
    $widget->add_control(
        'filter_buttons_divider_search',
        [
            'label'     => __('Separator', 'elementor-subscription-table'),
            'show_label' => true,
            'type'      => \Elementor\Controls_Manager::DIVIDER,
        ]
    );

    $widget->add_control(
        'filter_dropdown_buttons_clear_normal_color',
        [
            'label'     => __('Clear Text', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#clearFilter' => 'color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'filter_dropdown_buttons_clear_normal_background',
        [
            'label'     => __('Clear Background', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#clearFilter' => 'background-color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'filter_dropdown_buttons_clear_normal_border_color',
        [
            'label'     => __('Clear Border', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#clearFilter' => 'border-color: {{VALUE}};',
            ],
        ]
    );

    $widget->end_controls_tab(); // End tabs_normal

    /*** Filter Button Tab ***/
    $widget->start_controls_tab(
        'filter_dropdown_buttons_tab_hover',
        [
            'label' => esc_html__('Hover', 'textdomain'),
        ]
    );

    $widget->add_control(
        'filter_dropdown_buttons_apply_hover_color',
        [
            'label'     => __('Apply Text', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#applyFilter:hover' => 'color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'filter_dropdown_buttons_apply_hover_background',
        [
            'label'     => __('Apply Background', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#applyFilter:hover' => 'background-color: {{VALUE}};',
            ],
        ]
    );


    $widget->add_control(
        'filter_dropdown_buttons_apply_hover_border_color',
        [
            'label'     => __('Apply Border', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#applyFilter:hover' => 'border-color: {{VALUE}};',
            ],
        ]
    );

    // Add separator control
    $widget->add_control(
        'filter_buttons_divider_hover',
        [
            'label'     => __('Separator', 'elementor-subscription-table'),
            'show_label' => true,
            'type'      => \Elementor\Controls_Manager::DIVIDER,
        ]
    );

    $widget->add_control(
        'filter_dropdown_buttons_clear_hover_color',
        [
            'label'     => __('Clear Text', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#clearFilter:hover' => 'color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'filter_dropdown_buttons_clear_hover_background',
        [
            'label'     => __('Clear Background', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#clearFilter:hover' => 'background-color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'filter_dropdown_buttons_clear_hover_border_color',
        [
            'label'     => __('Clear Border', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#clearFilter:hover' => 'border-color: {{VALUE}};',
            ],
        ]
    );

    $widget->end_controls_tab(); // End tabs_hover
    $widget->end_controls_tabs(); // End group


    // Add separator control
    $widget->add_control(
        'filter_dropdown_buttons_divider_search',
        [
            'label'     => __('Separator', 'elementor-subscription-table'),
            'show_label' => true,
            'type'      => \Elementor\Controls_Manager::DIVIDER,
        ]
    );

    $widget->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        [
            'name' => 'filter_dropdown_buttons_border',
            'selector' => '#applyFilter, #clearFilter',
        ]
    );

    $widget->add_responsive_control(
        'filter_dropdown_buttons_padding',
        [
            'label'      => __('Padding', 'elementor-subscription-table'),
            'type'       => \Elementor\Controls_Manager::DIMENSIONS,
            'selectors'  => [
                '#applyFilter, #clearFilter' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        'filter_dropdown_buttons_border_radius',
        [
            'label'      => __('Border Radius', 'elementor-subscription-table'),
            'type'       => \Elementor\Controls_Manager::DIMENSIONS,
            'selectors'  => [
                '#applyFilter, #clearFilter' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

    $widget->end_controls_section(); // Close Dropdown Buttons
}
