var imgCurrent = 1;
setInterval(() => {
    nextImg(1);
}, 2000);
displayImg(imgCurrent);

function nextImg(n) {
    displayImg((imgCurrent += n));
}
function currentSlide(n) {
    displayImg((imgCurrent = n));
}
function displayImg(n) {
    var i;
    var img = document.getElementsByClassName("item");
    var dots = document.getElementsByClassName("dot");
    if (n > img.length) {
        imgCurrent = 1;
    }
    if (n < 1) {
        imgCurrent = img.length;
    }

    for (i = 0; i < img.length; i++) {
        img[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    img[imgCurrent - 1].style.display = "block";
    dots[imgCurrent - 1].className += " active";
}
