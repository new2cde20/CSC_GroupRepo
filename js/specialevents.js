var slider_img = document.querySelector('.slider-img-special');
var images = ['unGala-web-banner.jpg', 'annual-golf-outing.jpg', 'spring-walk-of-hope.jpg', 'fall-walk-of-hope.jpg', 'Holiday-Spirits.png'];

var captions = [
	"caption 1", 
	"caption 2", 
	"caption 3",
	"caption 4", 
	"caption 5" 
	];
	
	
	var imagePos = 0;
	var imagesLenth = images.length - 1;
	
	function prev(x){
			imagePos += x;
	
			if(imagePos > imagesLenth) {
				imagePos =0;
			}
	
			if(imagePos < 0) {
				imagePos = imagesLenth;
			}
	
	document.getElementById('slider-img-special').src = images[imagePos];
	document.getElementById('cap').innerHTML = captions[imagePos];
	
	}
	
	
	setInterval(function next(){
			imagePos ++;
	
			if(imagePos > imagesLenth) {
				imagePos =0;
			}
	
			if(imagePos < 0) {
				imagePos = imagesLenth;
			}
	
	document.getElementById('slider-img-special').src = images[imagePos];
	document.getElementById('cap').innerHTML = captions[imagePos];

	},1000);
	

// var i = 0;

// function prev(){
// 	if(i <= 0) i = images.length;	
// 	i--;
// 	return setImg();			 
// }

// function next(){
// 	if(i >= images.length-1) i = -1;
// 	i++;
// 	return setImg();			 
// }

// function setImg(){
//     return slider_img.setAttribute('src', "css/special-events-tab-photos/"+images[i])
// }