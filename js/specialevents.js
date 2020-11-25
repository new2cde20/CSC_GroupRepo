var slider_img = document.querySelector('.slider-img-special');
var imagesSpecial = ['unGala-web-banner.jpg', 'annual-golf-outing.jpg', 'spring-walk-of-hope.jpg', 'fall-walk-of-hope.jpg', 'Holiday-Spirits.png'];	

var i = 0;

function prev(){
	if(i <= 0) i = imagesSpecial.length;	
	i--;
	return setImg();			 
}

function next(){
	if(i >= imagesSpecial.length-1) i = -1;
	i++;
	return setImg();			 
}

function setImg(){
    return slider_img.setAttribute('src', "css/special-events-tab-photos/"+imagesSpecial[i]);
}