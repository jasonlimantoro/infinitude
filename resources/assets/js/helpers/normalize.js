// default height section, 80% of the screen view
heightSection = screen.availHeight * 0.8;

// Array of section needs to be set
let container = [
    '.section3 .container-history'
]

for (var i = 0; i < container.length; i++) {
    $(container[i]).css('height', heightSection);
}