$('.accordion-group .accordion-tab').each(function() {

	if ($(this).hasClass('open')) {
		// Let accordion remain open
	}
	else {
		$(this).next('.accordion-content').hide();
	}

});

$('.accordion-group').on('click', '.accordion-tab', function() {

	var $tab = $(this),
		$content = $tab.next('.accordion-content');

	$tab.toggleClass('open');
	$content.slideToggle();

});

console.log('test');