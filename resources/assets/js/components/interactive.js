// Make these window functions
window.showSlides = showSlides;
window.plusSlide = plusSlide;
window.currentSlide = currentSlide;

// Initialized values
let percentageBottom = 0.03;
let percentageLeft = 0.05;
let baseRise = 0.06;
let exponentRise = 0.045;
if (screen.availWidth >= 1400 && screen.availWidth < 1600) {
    percentageLeft = 0.1;
    exponentRise = 0.05;
}
else if (screen.availWidth >= 1600) {
    percentageLeft = 0.12;
    exponentRise = 0.05;
    baseRise = 0.06;
}
let bottom = calculateBottom(percentageBottom);
let left = calculateLeft(percentageLeft);

// The date array
let month_array = ['SEP', 'JAN', 'APR', 'MAY', 'AUG', 'DEC'];
let year_array = [' 2016', ' 2017', ' 2017', ' 2017', ' 2017', ' 2017'];
for (var index = 0; index < 6 ; index++) {
    nodeSpan = document.createTextNode(year_array[index]);
    spanElement = document.createElement('span');
    spanElement.appendChild(nodeSpan);
    nodeDate = document.createTextNode(month_array[index]);
    createDate(bottom + 45, left - 25, nodeDate, spanElement, index + 1);
    createCircle(bottom, left, index + 1);
    // Exponentially rising
    percentageBottom += baseRise + (index * exponentRise);

    // Constant distance to the right
    percentageLeft += 0.15;

    // Update bottom and left calculations
    bottom = calculateBottom(percentageBottom);
    left = calculateLeft(percentageLeft);

}

function createCircle(bottom, left, slideNumber) {
    // bottom and left arguments are the position of the circle
    // Create DOM element and assign style to it
    let div = document.createElement("div");
    div.className = 'circle';
    div.style.bottom = bottom + 'px';
    div.style.left = left + 'px';
    div.onclick = function () {
        currentSlide(slideNumber);
    } 
    
    // Append the DOM to the container
    let container = document.querySelector('.section3 .interactive');
    container.appendChild(div);
}
function createDate(bottom, left, node, spanElement, index) {
    let headingDate = document.createElement('h3');
    // add node to the date
    headingDate.appendChild(node);
    headingDate.appendChild(spanElement);
    headingDate.className = 'date';
    headingDate.style.bottom = bottom + 'px';
    headingDate.style.left = left + 'px';
    if (index > 3) {
        headingDate.style.color = 'black';
    }

    // Append the DOM to the container
    let container = document.querySelector('.section3 .interactive');
    container.appendChild(headingDate);
}

function calculateBottom(percentage) {
    let heightContainerHistory = document.getElementsByClassName('container-history')[0].clientHeight;
    let heightDescHistory = document.querySelector('.slide-header').clientHeight + document.querySelector('.slide') + document.querySelector + 11;
    let diff = heightContainerHistory - heightDescHistory;
    let positionCircleBottom = percentage * heightContainerHistory;
    return positionCircleBottom;

}
function calculateLeft(percentage) {
    let widthContainer = document.querySelector('.interactive').clientWidth;
    let positionCircleLeft = percentage * widthContainer;
    return positionCircleLeft;
}

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
    var circles = document.getElementsByClassName('circle');
    if (n > slides.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = slides.length}

    for (i = 0; i < slides.length; i++) {
        // hide other slides
        slides[i].style.display = "none";

        // remove active class from other circles
        $(circles[i]).removeClass('active');
    }
    // display current slide
    slides[slideIndex-1].style.display = "block";

    // add active class to current circle
    $(circles[slideIndex-1]).addClass('active');
}
