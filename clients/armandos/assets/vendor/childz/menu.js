(function ($) {
	let itemText = '';
	$.ajax({
		type: "GET",
		url: "assets/menus/brunch.json",
		dataType: 'json',
		async: false,
		contentType: 'application/json; charset=utf-8',
		success: function (response) {
			//menu section list
			let menuName = response.menu;
			//$('.menu-section-name').append(sectionName);
			//menu item list
			
			for (var itm = 0; itm < response.items.length; itm++) {
				let itemName = response.items[itm].name;
				let price = response.items[itm].price;
				let description = response.items[itm].description;
				itemText += '<div class="col-lg-6 menu-item filter-'+ menuName +'">';
				itemText += '<div class="menu-content"> <a href="#">' + itemName + '</a><span>' + price + '</span> </div>';
				itemText += '<div class="menu-ingredients">' + description + '</div>';
				itemText += '</div>';
			}

			$('.menu-container').append(itemText);
		},
		error: function (xhr, status, error) {
			alert('Error: ' + error);
		}
	});
})(jQuery);