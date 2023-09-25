<?php

function render_table_widget($widget)
{
    $subscriptions = wcs_get_subscriptions([
        'orderby'                => 'start_date',
        'order'                  => 'DESC',
        'subscription_status'    => array('all'),
    ]);
    $settings = $widget->get_settings_for_display();
    $columns = $settings['table_columns'];

    // Get the position of the status column
    $status_column_index = array_search('Status', array_column($columns, 'table_column_type'));

    // Send the status column index to scripts.js
    wp_localize_script('subscription-scripts', 'statusColumnIndex', $status_column_index);
?>

    <!-- Display subscription data and render the table -->
    <div class="subscription-table-container">
        <table id="subscription-table" class="table">
            <thead>
                <tr>
                    <?php foreach ($columns as $column) : ?>
                        <th><?php echo $column['table_column_label']; ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody id="subscription-table">
                <?php
                if (!empty($subscriptions)) {
                ?>
                    <?php
                    foreach ($subscriptions as $subscription) :
                        $user_id = $subscription->get_user_id();
                        $user_data = get_userdata($user_id);

                        $status = $subscription->get_status();
                        $customer_name = $user_data->first_name . ' ' . $user_data->last_name;
                        $purchase_date = $subscription->get_date_created()->format('m/d/Y');
                        $total_amount = $subscription->get_total();
                        $customer_email = $user_data->user_email;
                        $customer_phone = get_user_meta($user_id, 'billing_phone', true);
                    ?>
                        <tr>
                            <?php foreach ($columns as $column) : ?>
                                <td>
                                    <?php
                                    switch ($column['table_column_type']) {
                                        case 'Customer':
                                            echo esc_html($customer_name);
                                            break;
                                        case 'Email':
                                            echo esc_html($customer_email);
                                            break;
                                        case 'Phone':
                                            echo esc_html($customer_phone);
                                            break;
                                        case 'Purchases':
                                            echo esc_html($purchase_date);
                                            break;
                                        case 'Amount':
                                            echo esc_html('$' . $total_amount);
                                            break;
                                        case 'Status':
                                            echo esc_html($status);
                                            break;
                                        default:
                                            echo '';  // Output nothing if the column label doesn't match any of the above
                                            break;
                                    }
                                    ?>
                                </td>
                            <?php endforeach; ?>

                            <!-- <td><?php echo esc_html($customer_name); ?></td>
                            <td><?php echo esc_html($customer_email); ?></td>
                            <td><?php echo esc_html($customer_phone); ?></td>
                            <td><?php echo esc_html($purchase_date); ?></td>
                            <td><?php echo esc_html('$' . $total_amount); ?></td>
                            <td><?php echo esc_html($status); ?></td> -->
                        </tr>
                <?php
                    endforeach;
                } else {
                    echo '<tr><td colspan="4">No active subscriptions found.</td></tr>';
                }
                ?>

        </table>
        </tbody>
    </div>

    <!-- <pre>
    <?php print_r($subscriptions); ?>
    </pre> -->

<?php } ?>