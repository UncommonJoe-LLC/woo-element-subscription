<?php
require_once('tab-content.php');
require_once('tab-style.php');

function register_search_controls($widget)
{
    // Get content widgets
    search_tab_content($widget);

    // Get styles widgets
    search_tab_styles($widget);
}
