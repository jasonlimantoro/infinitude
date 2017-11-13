$(document).ready(function(){
    $('.organization-slide-container').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        // autoplay: true,
        // autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});
