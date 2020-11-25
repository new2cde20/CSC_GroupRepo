var slider_img = document.querySelector('.slider-img');
var images = ['YACS.jpg', 'horseback-riding.jpeg', 'halloween-dress.jpg', 'children-in-blankets.jpg'];
var i = 0;

function prev(){
	if(i <= 0) i = images.length;	
	i--;
	return setImg();			 
}

function next(){
	if(i >= images.length-1) i = -1;
	i++;
	return setImg();			 
}

function setImg(){
    return slider_img.setAttribute('src', "css/family-and-children/"+images[i]);   	
}