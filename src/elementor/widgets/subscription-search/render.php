<?php

function render_search_widget($widget)
{
?>
    <!-- Search box for table -->
    <div id="subscriptionSearch" class="form-container d-flex">
        <label><?php echo $widget->get_settings('subscription_search_label_text'); ?></label>
        <input type="text" class="form-control" placeholder="">
    </div>

<?php } ?>