// $('.img-bg').each(function(){ 
// 	if( $(this).attr('data-bg') ) $(this).css('background-image', 'url(' + $(this).attr('data-bg') + ')'); 
// 	if( $(this).attr('data-bgc') ) $(this).css('background-color', '#' + $(this).attr('data-bgc')); 
// });

(function(){
	var imgdivs = document.querySelectorAll('.img-bg');
	for (var i = 0; i < imgdivs.length; i++) {
		if(imgdivs[i].dataset.bg) {
			var url = imgdivs[i].dataset.bg;
			imgdivs[i].style.backgroundImage = 'url('+url+')';
		}
	}
})();
