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
    heightSection = screenHeight * 0.8
}

// Array of section needs to be set
let container = [
    '.section3 .container-history',
    '.section4 .row'
]

for (var i = 0; i < container.length; i++) {
    $(container[i]).css('height', heightSection);
}