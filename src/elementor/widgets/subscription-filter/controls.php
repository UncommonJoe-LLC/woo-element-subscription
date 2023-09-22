<?php
require_once('tab-content.php');
require_once('tab-style.php');

function register_filter_controls($widget)
{
    // Get content widgets
    filter_tab_content($widget);

    // Get styles widgets
    filter_tab_styles($widget);
}
