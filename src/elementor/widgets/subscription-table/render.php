<?php

function render_table_widget($widget)
{
    $subscription_args = array(
        'post_type' => 'shop_subscription',
        'post_status' => 'any',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => -1,
    );

    $query = new WP_Query($subscription_args);


    // Get list of all providers
    $provider_args = array(
        'post_type' => 'provider_info',
        'posts_per_page' => -1
    );

    $post = new WP_Query($provider_args);
    $providers = $post->posts;

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
                if ($query->have_posts()) {
                    while ($query->have_posts()) :
                        $query->the_post();
                        $subscription = wcs_get_subscription(get_the_ID());

                        $user_id = $subscription->get_user_id();
                        $user_data = get_userdata($user_id);

                        $status = $subscription->get_status();
                        $customer_name = $user_data->first_name . ' ' . $user_data->last_name;
                        $purchase_date = $subscription->get_date_created()->format('m/d/Y');
                        $total_amount = $subscription->get_total();
                        $customer_email = $user_data->user_email;
                        $customer_phone = get_user_meta($user_id, 'billing_phone', true);

                        // Retrieve the provider id saved on user profile
                        $provider_id = get_user_meta($user_id, 'provider', true);

                        // Iterate over each provider and match id saved to users
                        // profile to get the name and update provider_title with that
                        foreach ($providers as $provider) {
                            if ($provider->ID == $provider_id) {
                                // Update $provider_title with the title from the matched provider
                                $provider_title = $provider->post_title;
                                break; // Stop the loop if a match is found
                            }
                        }
                ?>
                        <tr>
                            <?php foreach ($columns as $column) : ?>
                                <td>
                                    <?php
                                    switch ($column['table_column_type']) {
                                        case 'Customer':
                                            echo esc_html(ucwords($customer_name));
                                            break;
                                        case 'Email':
                                            echo esc_html($customer_email);
                                            break;
                                        case 'Phone':
                                            echo esc_html($customer_phone);
                                            break;
                                        case 'Date':
                                            echo esc_html($purchase_date);
                                            break;
                                        case 'Amount':
                                            echo esc_html('$' . $total_amount);
                                            break;
                                        case 'Status':
                                            echo esc_html(ucwords($status));
                                            break;
                                        case 'Provider':
                                            echo esc_html(ucwords($provider_title));
                                            break;
                                        default:
                                            echo '';  // Output nothing if the column label doesn't match any of the above
                                            break;
                                    }
                                    ?>
                                </td>
                            <?php endforeach; ?>
                        </tr>
                <?php
                    endwhile;
                    wp_reset_postdata();
                } else {
                    echo '<tr><td colspan="4">No active subscriptions found.</td></tr>';
                }
                ?>

        </table>
        </tbody>
    </div>
<?php } ?>