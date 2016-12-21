jQuery(document).ready(function(){

  	jQuery('.photo-thumbnails .thumbnail').click(function() {
  		// Setting class "current" to the thumbnail that was clicked.
  		jQuery('.photo-thumbnails .thumbnail').removeClass('current');
  		jQuery(this).addClass('current');
  		// Getting "src" attribute of the image that was clicked.
  		var path = jQuery(this).find('img').attr('src');
  		// Setting "src" attribute of the big image.
  		jQuery('#big-photo img').attr('src', path);
  	});

  });
