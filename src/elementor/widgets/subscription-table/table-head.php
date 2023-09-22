<?php
function render_table_head($widget)
{
    // Get the value of the "Default Entries Per Page" control from Elementor
    $entries_per_page = get_post_meta(get_the_ID(), 'elementor-control-default-c773', true);
    print_r($entries_per_page);
    // Set a default value if the control hasn't been set
    $entries_per_page = empty($entries_per_page) ? 10 : $entries_per_page;
?>
    <table id="subscription-table" class="table">
        <thead>
            <tr>
                <th>Customer</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Purchases</th>
                <th>Amount</th>
                <th>Status</th>
            </tr>
        </thead>
    <?php
}
