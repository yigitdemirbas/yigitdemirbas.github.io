
	
var container = document.querySelector('#masonry-container');
	var msnry; imagesLoaded( container, function() {
  	msnry = new Masonry( container, {
 	   itemSelector: '.masonry-post',
	   transitionDuration: '0.3s',
       columnWidth: container.querySelector('.masonry-post') })
	});	

