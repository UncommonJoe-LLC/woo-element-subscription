<?php
function search_tab_content($widget)
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
            'dynamic' => [
                'active' => true,
            ],
        ]
    );

    $widget->add_control(
        'flex_direction',
        [
            'label' => esc_html__('Alignment', 'elementor-subscription-table'),
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'options' => [
                'row' => [
                    'title' => esc_html__('Horizontal', 'elementor-subscription-table'),
                    'icon' => 'eicon-arrow-right',
                ],
                'column' => [
                    'title' => esc_html__('Vertical', 'elementor-subscription-table'),
                    'icon' => 'eicon-arrow-down',
                ],
            ],
            'default' => 'Vertical',
            'toggle' => true,
            'selectors' => [
                '#subscriptionSearch' => 'flex-direction: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'align_items_row',
        [
            'label' => esc_html__('Align Items', 'elementor-subscription-table'),
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'condition' => [
                'flex_direction' => 'row',
            ],
            'options' => [
                'flex-start' => [
                    'title' => esc_html__('Top', 'elementor-subscription-table'),
                    'icon' => 'eicon-v-align-top',
                ],
                'center' => [
                    'title' => esc_html__('Middle', 'elementor-subscription-table'),
                    'icon' => 'eicon-v-align-middle',
                ],
                'flex-end' => [
                    'title' => esc_html__('Bottom', 'elementor-subscription-table'),
                    'icon' => 'eicon-v-align-bottom',
                ],
            ],
            'default' => 'center',
            'toggle' => true,
            'selectors' => [
                '#subscriptionSearch' => 'align-items: {{VALUE}};',
            ],
        ]
    );

    $widget->add_control(
        'align_items_column',
        [
            'label' => esc_html__('Align Items', 'elementor-subscription-table'),
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'condition' => [
                'flex_direction' => 'column',
            ],
            'options' => [
                'flex-start' => [
                    'title' => esc_html__('Left', 'elementor-subscription-table'),
                    'icon' => 'eicon-h-align-left',
                ],
                'center' => [
                    'title' => esc_html__('Center', 'elementor-subscription-table'),
                    'icon' => 'eicon-h-align-center',
                ],
                'flex-end' => [
                    'title' => esc_html__('Right', 'elementor-subscription-table'),
                    'icon' => 'eicon-h-align-right',
                ],
            ],
            'default' => 'flex-start',
            'toggle' => true,
            'selectors' => [
                '#subscriptionSearch' => 'align-items: {{VALUE}};',
            ],
        ]
    );

    $widget->add_responsive_control(
        'search_spacing_row',
        [
            'label' => esc_html__('Spacing', 'elementor-subscription-table'),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'condition' => [
                'flex_direction' => 'row',
            ],
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
                'size' => 10,
                'unit' => 'px',
            ],
            'tablet_default' => [
                'size' => 10,
                'unit' => 'px',
            ],
            'mobile_default' => [
                'size' => 10,
                'unit' => 'px',
            ],
            'selectors' => [
                '#subscriptionSearch label' => 'margin-right: {{SIZE}}{{UNIT}};',
            ],
        ]
    );

    $widget->add_responsive_control(
        'search_spacing_column',
        [
            'label' => esc_html__('Spacing', 'elementor-subscription-table'),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'condition' => [
                'flex_direction' => 'column',
            ],
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
                'size' => 10,
                'unit' => 'px',
            ],
            'tablet_default' => [
                'size' => 10,
                'unit' => 'px',
            ],
            'mobile_default' => [
                'size' => 10,
                'unit' => 'px',
            ],
            'selectors' => [
                '#subscriptionSearch label' => 'margin-bottom: {{SIZE}}{{UNIT}};',
            ],
        ]
    );

    $widget->end_controls_section(); // Close Content Section
}
