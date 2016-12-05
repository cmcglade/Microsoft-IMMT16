	var imagenumber = 1
	var total = 6
	    /*manual*/


	/* to make it automatic*/
	window.setInterval(
	    function imageChange() {
	        var Image = document.getElementById('bioImage');
	        imagenumber = imagenumber + 1;
	        if (imagenumber > total /* if img # is greater then total number of images return to img1*/ ) {
	            imagenumber = 1;
	        }
	        if (imagenumber < 1) {
	            imagenumber = total
	        }
	        Image.src = "images/img" + imagenumber + ".jpg";
	    }, 0500); /*speed*/