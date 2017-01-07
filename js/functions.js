jQuery(document).ready(function() {
		
	if(jQuery('div.trigger').length > 0) {
		jQuery('div.trigger').click(function() {
			if (jQuery(this).hasClass('open')) {
				jQuery(this).removeClass('open');
				jQuery(this).addClass('close');
				jQuery(this).next().slideDown(100);
				return false;
			} else {
				jQuery(this).removeClass('close');
				jQuery(this).addClass('open');
				jQuery(this).next().slideUp(100);
				return false;
			}			
		});
	}
	
});