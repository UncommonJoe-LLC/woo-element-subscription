jQuery(document).ready(function ($) {
	var subscriptionTable = $('#subscription-table').DataTable({
		paging: true,
		searching: true,
		ordering: true,
		info: true,
		lengthChange: true,
		dom: '<"top">t<"bottom"ip>',
		language: {
			paginate: {
				next: 'Next',
				previous: 'Previous',
			},
		},
	});

	redrawTable();

	// Search subscription table
	$('#subscriptionSearch input').on('input', redrawTable);

	// Create a function to handle table redraw
	function redrawTable() {
		const searchValue = $('#subscriptionSearch input').val();
		const selectedRange = $('#subscriptionFilterDateRange').val();
		const status = $(
			'#subscriptionFilterStatus input[type="checkbox"]:checked'
		)
			.map(function () {
				return this.value;
			})
			.get();

		const providers = $(
			'#subscriptionFilterProvider input[type="checkbox"]:checked'
		)
			.map(function () {
				return this.value;
			})
			.get();

		subscriptionTable.search(searchValue);

		$.fn.dataTable.ext.search.pop(); // Remove previous date filter
		$.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
			const endDate = new Date();
			const startDate = new Date();
			startDate.setDate(startDate.getDate() - selectedRange);
			const purchaseDate = Date.parse(data[3]);

			if (purchaseDate >= startDate && purchaseDate <= endDate) {
				return true;
			}

			return false;
		});

		$.fn.dataTable.ext.search.pop(); // Remove previous status filter
		if (status.length > 0) {
			$.fn.dataTable.ext.search.push(function (
				settings,
				searchData,
				index
			) {
				if (status.indexOf(searchData[statusColumnIndex]) !== -1) {
					return true;
				}
				return false;
			});
		}

		$.fn.dataTable.ext.search.pop(); // Remove previous provider filter
		if (providers.length > 0) {
			$.fn.dataTable.ext.search.push(function (
				settings,
				searchData,
				index
			) {
				// Assuming the provider column is the last one (index 6),
				// if it's not, replace 6 with the correct index
				if (providers.indexOf(searchData[6]) !== -1) {
					return true;
				}
				return false;
			});
		}

		// Redraw the table
		subscriptionTable.draw();
	}

	// Apply filter when "Apply" button is clicked
	$('#applyFilter').on('click', function () {
		$('#filterListBtn').dropdown('toggle');
		console.log('a');
		redrawTable();
	});

	// Clear filter and update the table when "Clear" button is clicked
	$('#clearFilter').on('click', function () {
		$('#subscriptionSearch input').val('');
		$('#subscriptionFilterDateRange').val('999999999999999999');
		$('#subscriptionFilterStatus input[type="checkbox"]').prop(
			'checked',
			false
		);
		$('#filterListBtn').dropdown('toggle');
		redrawTable();
	});
});
