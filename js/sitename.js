// autocomplet : this function will be executed every time we change the text
function autocomplet() {
	var min_length = 0; // min caracters to display the autocomplete
	var keyword = $('#siteID').val();
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'getsitename.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#getSiteName').show();
				$('#getSiteName').html(data);
			}
		});
	} else {
		$('#getSiteName').hide();
	}
}

// set_item : this function will be executed when we select an item
function set_item2(item) {
	// change input value
	$('#siteID').val(item);
	// hide proposition list
	$('#getSiteName').hide();
}