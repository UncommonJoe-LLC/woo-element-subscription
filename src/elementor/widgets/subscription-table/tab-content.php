<?php
function table_tab_content($widget)
{

    $widget->start_controls_section(
        'content_section',
        [
            'label' => esc_html__('Content', 'elementor-subscription-table'),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );

    $repeater = new \Elementor\Repeater();

    $repeater->add_control(
        'table_column_type',
        [
            'label' => esc_html__('Columns', 'elementor-subscription-table'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => 'Customer',
            'options' => [
                'Customer' => esc_html__('Name', 'elementor-subscription-table'),
                'Email' => esc_html__('Email', 'elementor-subscription-table'),
                'Phone'  => esc_html__('Phone', 'elementor-subscription-table'),
                'Date' => esc_html__('Purchased', 'elementor-subscription-table'),
                'Amount' => esc_html__('Amount', 'elementor-subscription-table'),
                'Status' => esc_html__('Status', 'elementor-subscription-table'),
            ],
            'selectors' => [
                '.your-class' => 'border-style: {{VALUE}};',
            ],
        ]
    );

    $repeater->add_control(
        'table_column_label',
        [
            'label' => __('Label', 'elementor-subscription-table'),
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => __('', 'elementor-subscription-table'),
            'label_block' => true,
        ]
    );

    $widget->add_control(
        'table_columns',
        [
            'label' => __('Table Columns', 'elementor-subscription-table'),
            'type' => \Elementor\Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'default' => [
                [
                    'table_column_type' => __('Customer', 'elementor-subscription-table'),
                    'table_column_label' => __('Customer', 'elementor-subscription-table'),
                ],
                [
                    'table_column_type' => __('Email', 'elementor-subscription-table'),
                    'table_column_label' => __('Email', 'elementor-subscription-table'),
                ],
                [
                    'table_column_type' => __('Status', 'elementor-subscription-table'),
                    'table_column_label' => __('Status', 'elementor-subscription-table'),
                ],

            ],
            'title_field' => '{{{ table_column_type }}}',
        ]
    );


    $widget->end_controls_section(); // Close Content Section
}
