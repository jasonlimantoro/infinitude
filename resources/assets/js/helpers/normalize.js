screenHeight = screen.availHeight;
screenWidth = screen.availWidth;

// default height section, 95% of the screen view
heightSection = screenHeight * 0.95;

// if device is a desktop
if (screenWidth > 1200) {
    // add sticky-navbar
    $('.navbar-default').addClass('navbar-sticky');
    // fix body padding
    $('body').css('padding-top', 70);

    // reduce the height section
    if (screenWidth < 1400) {
        heightSection = screenHeight * 0.83;
    }
}

// Array of section needs to be set
let container = [
    // '.section1 .container-main-background',
    '.section3 .container-history',
    '.section4 .container-organization',
    // '.section6 .container-be-involved',
    // '.section7 .container-project'
]

for (var i = 0; i < container.length; i++) {
    $(container[i]).css('height', heightSection);
}

// for section 6
var boxes = document.getElementsByClassName('be-involved-box');
var boxContents = document.getElementsByClassName('box-content');
var involveds = document.getElementsByClassName('involved');
var boxHeight = boxes[0].clientHeight * boxes.length - 10;
for (let i = 0; i < involveds.length; i++) {
    $(involveds[i]).css('min-height', boxHeight);
}
