<?php

function render_filter_widget($widget)
{
?>

    <!-- Filter button -->
    <div class="dropdown">
        <button type="button" id="filterListBtn" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            Filter
        </button>

        <div class="dropdown-menu p-4">
            <form>
                <div class="form-container">
                    <label for="subscriptionFilterDateRange">Purchased</label>
                    <select id="subscriptionFilterDateRange" class="form-select">
                        <option value="999999999999999999" selected>All</option>
                        <option value="7">Last 1 week</option>
                        <option value="30">Last 1 month</option>
                        <option value="180">Last 6 months</option>
                        <option value="365">Last 1 year</option>
                    </select>
                </div>

                <div class="card my-3">
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

                        <input type="checkbox" class="form-check-input" value="pending" name="filterStatus" id="pending" />
                        <label for="pending">Pending</label>
                    </div>
                </div>

                <!-- Buttons -->
                <button type="button" id="applyFilter" class="btn btn-primary btn-sm">Apply</button>
                <button type="button" id="clearFilter" class="btn btn-light">Clear</button>
            </form>
        </div>
    </div>

<?php } ?>