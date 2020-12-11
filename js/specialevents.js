var slider_img = document.querySelector('.slider-img-special');
var slider_img_label = document.querySelector('.slider-label');
var images = [
    'unGala-web-banner.jpg',
    'annual-golf-outing.jpg',
    'spring-walk-of-hope.jpg',
    'fall-walk-of-hope.jpg',
    'Holiday-Spirits.png'
];
var imagesTitle = [
    "<strong>un-Gala – Harvest Moon</strong><br/> October 30, 2020",
    "<strong>Spring Walk of Hope</strong><br/> July 11 & 12, 2020",
    "<strong>Annual Golf Outing</strong><br/> September 14, 2020",
    "<strong>Fall Walk of Hope</strong><br/> October 4, 2020 ",
    "<strong>Holiday Spirits</strong><br/> December 11, 2020"
];
var i = 0;
setImg();

function prev() {
    if (i <= 0) i = images.length;
    i--;
    return setImg();
}

function next() {
    if (i >= images.length - 1) i = -1;
    i++;
    return setImg();
}

function setImg() {
    slider_img.setAttribute('title', imagesTitle[i]);
    slider_img_label.innerHTML = imagesTitle[i];
    return slider_img.setAttribute('src', "css/special-events-tab-photos/" + images[i])
}