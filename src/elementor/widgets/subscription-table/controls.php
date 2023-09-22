<?php
require_once('tab-content.php');
require_once('tab-style.php');

function register_table_controls($widget)
{
    // Get content widgets
    table_tab_content($widget);

    // Get styles widgets
    table_tab_styles($widget);
}
