<?php

function render_filter_widget($widget)
{
    $selected_icon = $widget->get_settings('subscription_filter_button_icon');

    // Get list of providers
    global $wpdb;

    $args = array(
        'post_type' => 'provider_info',
        'posts_per_page' => -1
    );

    $query = new WP_Query($args);

    // Get first name of logged in user
    $current_user_firstname = is_user_logged_in() ? wp_get_current_user()->user_firstname : '';

    $titles = array();
    foreach ($query->posts as $post) {
        $titles[] = $post->post_title;
    }
?>

    <!-- Filter button -->
    <div class="dropdown">
        <button type="button" id="filterListBtn" class="btn btn-light d-flex align-items-center" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            <?php echo $widget->get_settings('subscription_filter_button_text'); ?>
            <div class="ps-2">
                <i class="<?php echo esc_attr($selected_icon['value']); ?>" aria-hidden="true"></i>
            </div>
        </button>

        <div id="filterDropdown" class="dropdown-menu bg-light dropdown-menu-end p-4">
            <form>
                <div class="form-container">
                    <label class="mb-1">Practice</label>
                    <div class="card mb-3">
                        <div id="subscriptionFilterProvider" class="card-body overflow-auto" style="max-height: 200px" role="group" aria-label="Basic checkbox toggle button group">
                            <?php foreach ($query->posts as $post) : ?>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" value="<?php echo esc_attr($post->post_title); ?>" id="post-<?php echo esc_attr($post->ID); ?>" name="filterProvider[]" <?php echo ($post->post_title == $current_user_firstname) ? 'checked' : ''; ?> />
                                    <label class="form-check-label" for="post-<?php echo esc_attr($post->ID); ?>"><?php echo esc_html($post->post_title); ?></label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="form-container">
                    <label for="subscriptionFilterDateRange" class="mb-1">Status</label>
                    <div class="card mb-3">
                        <div id="subscriptionFilterStatus" class="card-body" role="group" aria-label="Basic checkbox toggle button group">

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="active" id="active" name="filterStatus" />
                                <label class="form-check-label" for="active">Active</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="expired" name="filterStatus" id="expired" />
                                <label class="form-check-label" for="expired">Expired</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="on-hold" name="filterStatus" id="onHold" />
                                <label class="form-check-label" for="onHold">On-Hold</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="pending" name="filterStatus" id="pending" />
                                <label class="form-check-label" for="pending">Pending</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Buttons -->
                <button type="button" id="applyFilter" class="btn btn-primary btn-sm">Apply</button>
                <button type="button" id="clearFilter" class="btn btn-light btn-sm">Clear</button>
            </form>
        </div>
    </div>

<?php } ?>