// Make these window functions
window.showSlides = showSlides;
window.plusSlide = plusSlide;
window.currentSlide = currentSlide;

// Slide functions
var slideIndex = 1;
showSlides(slideIndex);

function plusSlide(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName('slide');
    if (n > slides.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = slides.length}
    // hide other slides
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    // display current slide
    slides[slideIndex-1].style.display = "block"; 
}

function createCircle(bottom, left) {
    // bottom and left arguments are the position of the circle
    // Create DOM element and assign style to it
    let div = document.createElement("div");
    div.className = 'circle';
    div.style.bottom = bottom + 'px';
    div.style.left = left + 'px';
    
    // Append the DOM to the container
    let container = document.querySelector('.section3 .interactive div');
    container.appendChild(div);
}
function createDate(bottom, left, node) {
    let div = document.createElement('h4');
    // add node to the date
    div.appendChild(node);
    div.className = 'date';
    div.style.bottom = bottom + 'px';
    div.style.left = left + 'px';

    // Append the DOM to the container
    let container = document.querySelector('.section3 .interactive div');
    container.appendChild(div);
}

function calculateBottom(percentage) {
    let heightContainerHistory = document.getElementsByClassName('container-history')[0].clientHeight;
    let heightDescHistory = document.getElementsByClassName('desc-history')[0].clientHeight;
    let diff = heightContainerHistory - heightDescHistory;
    let positionCircleBottom = percentage * diff;
    return positionCircleBottom;

}
function calculateLeft(percentage) {
    let widthContainer = document.querySelector('.interactive').clientWidth;
    let positionCircleLeft = percentage * widthContainer;
    return positionCircleLeft;
}

// Initialized values
let percentageBottom = 0.05;
let percentageLeft = 0.15;
let bottom = calculateBottom(percentageBottom);
let left = calculateLeft(percentageLeft);

// The date array
let date_array = ['SEP 2016', 'JAN 2017', 'APR 2017', 'MAY 2017', 'AUG 2017', 'DEC 2017'];
for (var index = 0; index < 6 ; index++) {
    nodeDate = document.createTextNode(date_array[index]);
    createDate(bottom + 60, left - 15, nodeDate);
    createCircle(bottom, left);
    // Exponentially rising
    percentageBottom += 0.13 + (index * 0.05);

    // Constant distance to the right
    percentageLeft += 0.12;

    // Update bottom and left calculations
    bottom = calculateBottom(percentageBottom);
    left = calculateLeft(percentageLeft);

}
