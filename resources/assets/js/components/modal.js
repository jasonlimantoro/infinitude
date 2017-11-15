window.openModal = openModal;
window.closeModal = closeModal;
window.showModalSlides = showModalSlides;
window.plusModalSlide = plusModalSlide;
window.currentModalSlide = currentModalSlide;

var modals = document.getElementsByClassName('modal');

function openModal() {
    activeModal = modals[galleryIndex]
    activeModal.style.display = "block";
}

function closeModal() {
    activeModal = modals[galleryIndex]
    activeModal.style.display = "none";
}

var modalSlideIndex = 0;
showModalSlides(modalSlideIndex);

function plusModalSlide(n) {
    showModalSlides(modalSlideIndex += n);
}

function currentModalSlide(n) {
    showModalSlides(modalSlideIndex = n);
}

function showModalSlides(n) {
    var activeModal = modals[galleryIndex]
    var activeModalId = activeModal.id;
    var slides = document.querySelectorAll("#" + activeModalId + " .modalSlide");
    var dots = document.querySelectorAll("#" + activeModalId + " .modalSlideIndicator");
    var captionText = document.querySelector("#" + activeModalId + " #caption");
    if (n >= slides.length) { modalSlideIndex = 0 }
    if (n < 0) { modalSlideIndex = slides.length - 1 }
    $(slides[modalSlideIndex]).addClass('show');
    $(dots[modalSlideIndex]).addClass('active');

    for (let i = 0; i < slides.length; i++) {
        if (i != modalSlideIndex) {
            $(slides[i]).removeClass('show');
            $(dots[i]).removeClass('active');
        }
    }
    captionText.innerHTML = dots[modalSlideIndex].alt;
}