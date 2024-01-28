<?php
function table_tab_styles($widget)
{
    // Table Style
    $widget->start_controls_section(
        'table_style',
        [
            'label' => __('Table', 'elementor-subscription-table'),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );

    $widget->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        [
            'name' => 'border',
            'selector' => '#subscription-table',
        ]
    );

    // Add separator control
    $widget->add_control(
        'separator_heading',
        [
            'label'     => __('Separator', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::DIVIDER,
        ]
    );

    // Primary cell background color
    $widget->add_control(
        'cell_background_color',
        [
            'label'     => __('Cell Color', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#subscription-table tr:nth-child(even) td' => 'background-color: {{VALUE}};',
            ],
        ]
    );

    // Alternate cell background color
    $widget->add_control(
        'alternate_cell_background_color',
        [
            'label'     => __('Alternate Cell Color', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#subscription-table tr:nth-child(odd) td' => 'background-color: {{VALUE}};',
            ],
        ]
    );

    $widget->end_controls_section(); // Close Table

    /********************************************************************************************/
    /*************************************** Table Header ***************************************/
    /********************************************************************************************/
    $widget->start_controls_section(
        'table_header',
        [
            'label' => __('Table Header', 'elementor-subscription-table'),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );

    $widget->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'table_head_typography',
            'selector' => '#subscription-table th',
        ]
    );

    $widget->add_control(
        'table_header_font_color',
        [
            'label' => __('Color', 'elementor-subscription-table'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#subscription-table th' => 'color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'table_header_background_color',
        [
            'label' => __('Background Color', 'elementor-subscription-table'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#subscription-table th' => 'background-color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        [
            'name' => 'table_head_th_border',
            'selector' => '#subscription-table th',
        ]
    );

    $widget->end_controls_section(); // Close Table Header


    /********************************************************************************************/
    /**************************************** Table Body ****************************************/
    /********************************************************************************************/
    $widget->start_controls_section(
        'table_body',
        [
            'label' => __('Table Body', 'elementor-subscription-table'),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );

    $widget->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'table_body_typography',
            'selector' => '#subscription-table td',
        ]
    );

    $widget->add_control(
        'table_body_font_color',
        [
            'label' => __('Color', 'elementor-subscription-table'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '#subscription-table td' => 'color: {{VALUE}};',
            ],
        ]
    );

    // Add control for cell padding
    $widget->add_responsive_control(
        'cell_padding',
        [
            'label'      => __('Cell Padding', 'elementor-subscription-table'),
            'type'       => \Elementor\Controls_Manager::DIMENSIONS,
            'selectors'  => [
                '#subscription-table td' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
            'default'    => [
                'top'    => '10',
                'right'  => '10',
                'bottom' => '10',
                'left'   => '10',
                'unit'   => 'px', // Default unit (you can change it)
            ],
            'separator'  => ' ',
            'size_units' => ['px', '%', 'em', 'rem', 'custom'],
        ]
    );

    $widget->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        [
            'name' => 'table_body_td_border',
            'selector' => '#subscription-table td',
        ]
    );

    $widget->end_controls_section(); // Close Table Body

    /********************************************************************************************/
    /**************************************** Pagination ****************************************/
    /********************************************************************************************/

    $widget->start_controls_section(
        'search_pagination',
        [
            'label' => __('Pagination', 'elementor-subscription-table'),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );

    $widget->start_controls_tabs(
        'pagination_tabs'
    );

    /*** Pagination Button Tab ***/
    $widget->start_controls_tab(
        'pagination_button_tab_normal',
        [
            'label' => esc_html__('Normal', 'textdomain'),
        ]
    );

    $widget->add_control(
        'pagination_button_normal_background',
        [
            'label'     => __('Background', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '.dataTables_paginate .paginate_button a' => 'background-color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'pagination_button_normal_color',
        [
            'label'     => __('Color', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '.dataTables_paginate .paginate_button a' => 'color: {{VALUE}};',
            ],
        ]
    );

    $widget->end_controls_tab();

    /*** Pagination Button Tab Active ***/
    $widget->start_controls_tab(
        'pagination_button_tab_active',
        [
            'label' => esc_html__('Active', 'textdomain'),
        ]
    );

    $widget->add_control(
        'pagination_button_active_background',
        [
            'label'     => __('Background', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '.dataTables_paginate .paginate_button.active a' => 'background-color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'pagination_button_active_color',
        [
            'label'     => __('Color', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '.dataTables_paginate .paginate_button.active a' => 'color: {{VALUE}};',
            ],
        ]
    );

    $widget->end_controls_tab();

    /*** Pagination Button Tab Hover ***/
    $widget->start_controls_tab(
        'pagination_button_tab_hover',
        [
            'label' => esc_html__('Hover', 'textdomain'),
        ]
    );

    $widget->add_control(
        'pagination_button_hover_background',
        [
            'label'     => __('Background', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '.dataTables_paginate .paginate_button a:hover' => 'background-color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'pagination_button_hover_color',
        [
            'label'     => __('Color', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '.dataTables_paginate .paginate_button a:hover' => 'color: {{VALUE}};',
            ],
        ]
    );

    $widget->end_controls_tab();

    /*** Pagination Button Tab Disabled ***/
    $widget->start_controls_tab(
        'pagination_button_tab_disabled',
        [
            'label' => esc_html__('Disabled', 'textdomain'),
        ]
    );

    $widget->add_control(
        'pagination_button_disabled_background',
        [
            'label'     => __('Background', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '.dataTables_paginate .paginate_button.disabled a' => 'background-color: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'pagination_button_disabled_color',
        [
            'label'     => __('Color', 'elementor-subscription-table'),
            'type'      => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '.dataTables_paginate .paginate_button.disabled a' => 'color: {{VALUE}};',
            ],
        ]
    );

    $widget->end_controls_tab();
    $widget->end_controls_tabs();

    $widget->add_responsive_control(
        'pagination_button_margin',
        [
            'label'      => __('Margin', 'elementor-subscription-table'),
            'type'       => \Elementor\Controls_Manager::DIMENSIONS,
            'selectors'  => [
                '.dataTables_paginate .paginate_button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        'pagination_button_padding',
        [
            'label'      => __('Padding', 'elementor-subscription-table'),
            'type'       => \Elementor\Controls_Manager::DIMENSIONS,
            'selectors'  => [
                '.dataTables_paginate .paginate_button a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
            'default'    => [
                'top'    => '6',
                'right'  => '12',
                'bottom' => '6',
                'left'   => '12',
                'unit'   => 'px',
            ],
            'separator'  => ' ',
            'size_units' => ['px', '%', 'em', 'rem', 'custom'],
        ]
    );

    $widget->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        [
            'name' => 'pagination_button_border',
            'selector' => '.dataTables_paginate .paginate_button a',
        ]
    );

    $widget->add_responsive_control(
        'pagination_button_radius',
        [
            'label'      => __('Border Radius', 'elementor-subscription-table'),
            'type'       => \Elementor\Controls_Manager::DIMENSIONS,
            'selectors'  => [
                '.dataTables_paginate .paginate_button a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

    $widget->end_controls_section(); // Close Pagination
}
