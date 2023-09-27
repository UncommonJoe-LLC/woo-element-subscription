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
    /************************************* Filter **************************************/
    /********************************************************************************************/

    $widget->add_control(
        'subscription_filter_button_text',
        [
            'label' => esc_html__('Label', 'elementor-subscription-table'),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => esc_html__('Filter', 'elementor-subscription-table'),
            'placeholder' => esc_html__('Type your label here', 'elementor-subscription-table'),
            'dynamic' => [
                'active' => true,
            ],
        ]
    );

    $widget->add_control(
        'subscription_filter_button_icon',
        [
            'label' => esc_html__('Icon', 'elementor-subscription-table'),
            'type' => \Elementor\Controls_Manager::ICONS,
            'default' => [
                'value' => 'fas fa-caret-down',
                'library' => 'fa-solid',
            ],
            'recommended' => [
                'fa-solid' => [
                    'aret-down',
                    'filter',
                    'angle-down',
                ],
                'fa-regular' => [
                    'caret-down',
                    'filter',
                    'angle-down',
                ],
            ],
        ]
    );

    $widget->add_responsive_control(
        'subscription_filter_button_icon_size',
        [
            'label' => esc_html__('Icon Size', 'textdomain'),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'size_units' => ['px', '%', 'em', 'rem', 'custom'],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
                    'step' => 1,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                ],
            ],

            'devices' => ['desktop', 'tablet', 'mobile'],
            'desktop_default' => [
                'size' => '12',
                'unit' => 'px',
            ],
            'tablet_default' => [
                'size' => '12',
                'unit' => 'px',
            ],
            'mobile_default' => [
                'size' => '12',
                'unit' => 'px',
            ],
            'selectors' => [
                '#filterListBtn i.fas' => 'font-size: {{SIZE}}{{UNIT}};',
            ],
        ]
    );

    $widget->end_controls_section(); // Close Filter
}
