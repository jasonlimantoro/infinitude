window.currentGallery = currentGallery;

var galleryIndex = 0;
showGallery(galleryIndex);

function currentGallery(n) {
    galleryIndex = n;
    showGallery(n);
}

function showGallery(n) {
    var indicators = document.getElementsByClassName('project-indicator');
    var infos = document.getElementsByClassName('project-info');
    var galleries = document.getElementsByClassName('gallery');

    $(galleries[n]).addClass('show');
    $(infos[n]).addClass('show');
    $(indicators[n]).addClass('active');

    for (let i = 0; i < galleries.length; i++) {
        if (i != n) {
            $(galleries[i]).removeClass('show');
            $(infos[i]).removeClass('show');
            $(indicators[i]).removeClass('active');
        }
    }
}