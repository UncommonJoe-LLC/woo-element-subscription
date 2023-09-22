<?php
function render_table_body($subscriptions)
{
    if (!empty($subscriptions)) {
        // Get the selected date format from the control
        $custom_date_format = !empty($settings['custom_date_format']) ? $settings['custom_date_format'] : 'd/m/Y';
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
                <td><?php echo esc_html($customer_name); ?></td>
                <td><?php echo esc_html($customer_email); ?></td>
                <td><?php echo esc_html($customer_phone); ?></td>
                <td><?php echo esc_html($purchase_date); ?></td>
                <td><?php echo esc_html('$' . $total_amount); ?></td>
                <td><?php echo esc_html($status); ?></td>
            </tr>
<?php
        endforeach;
    } else {
        echo '<tr><td colspan="4">No active subscriptions found.</td></tr>';
    }

    echo '</table>';
}
?>