window.currentCaption = currentCaption;

var captionIndex = 0; // default value
showCaption(captionIndex);

function currentCaption(n) {
    captionIndex = n;
    showCaption(captionIndex);
}

function showCaption(n) {
    var icons = document.querySelectorAll('.icon > img'); // working-guide icon
    var caption_containers = document.getElementsByClassName('caption-container'); // consisting of icon and text
    // keep looping
    if (n > icons.length) { n = 0; }
    if (n < 0) { n = icons.length; }

    $(caption_containers[n]).addClass('show-caption')
    $(icons[n]).addClass('active');
    for (var i = 0; i < icons.length; i++) {
        // hide all other caption and remove active class except n
        if (i != n) {
            $(caption_containers[i]).removeClass('show-caption');
            $(icons[i]).removeClass('active');
        }
    }

}
