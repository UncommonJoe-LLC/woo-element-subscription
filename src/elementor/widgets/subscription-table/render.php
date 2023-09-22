<?php

require_once('table-head.php');
require_once('table-body.php');

function render_table_widget($widget)
{

    // Get settings
    $settings = $widget->get_settings_for_display();

    $subscriptions = wcs_get_subscriptions([
        'subscriptions_per_page' => 10,
        'orderby'                => 'start_date',
        'order'                  => 'DESC',
        'subscription_status'    => array('all'),
    ]);
?>

    <!-- Display subscription data and render the table -->
    <div class="subscription-table-container">
        <?php render_table_head($widget); ?>
        <tbody id="subscription-table">
            <?php render_table_body($subscriptions); ?>
        </tbody>
    </div>

    <!-- <pre>
    <?php print_r($subscriptions); ?>
    </pre> -->

<?php } ?>