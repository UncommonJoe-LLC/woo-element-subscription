<?php
function search_tab_styles($widget)
{

    /********************************************************************************************/
    /************************************* Search **************************************/
    /********************************************************************************************/
    $widget->start_controls_section(
        'search_filter',
        [
            'label' => __('Search', 'elementor-subscription-table'),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );

    $widget->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'search_title',
            'selector' => '{{WRAPPER}} #subscriptionSearch label, #subscription-table_length label',
        ]
    );

    $widget->add_control(
        'search_label_font_color',
        [
            'label' => __('Color', 'elementor-subscription-table'),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} #subscriptionSearch label, #subscription-table_length label' => 'color: {{VALUE}};',
            ],
        ]
    );

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
            'selector' => '{{WRAPPER}} #subscriptionSearch input, #subscriptionSearch input, #subscription-table_length select',
        ]
    );

    $widget->add_responsive_control(
        'search_input_width',
        [
            'label' => esc_html__('Width', 'textdomain'),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'size_units' => ['px', '%', 'em', 'rem', 'custom'],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
                    'step' => 5,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                ],
            ],

            'devices' => ['desktop', 'tablet', 'mobile'],
            'desktop_default' => [
                'size' => 30,
                'unit' => '%',
            ],
            'tablet_default' => [
                'size' => 50,
                'unit' => '%',
            ],
            'mobile_default' => [
                'size' => 100,
                'unit' => '%',
            ],
            'selectors' => [
                '{{WRAPPER}} #subscriptionSearch input' => 'width: {{SIZE}}{{UNIT}};',
            ],
        ]
    );

    $widget->add_responsive_control(
        'search_input_margin',
        [
            'label'      => __('Margin', 'elementor-subscription-table'),
            'type'       => \Elementor\Controls_Manager::DIMENSIONS,
            'selectors'  => [
                '{{WRAPPER}} #subscriptionSearch' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                '{{WRAPPER}} #subscriptionSearch input, #subscriptionSearch input, #subscription-table_length select' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
            'default'    => [
                'top'    => '8',
                'right'  => '28',
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
                '{{WRAPPER}} #subscriptionSearch input, #subscriptionSearch input, #subscription-table_length select' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

    $widget->end_controls_section(); // Close Search
}
