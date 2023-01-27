jQuery(document).ready(function($) {
    /**
     * Initialize the slider for Egypt's news section
     */
    $('.egypt-news-wrapper').slick({
        // infinite: true,
        // slidesToShow: 4,
        // slidesToScroll: 1,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        autoplaySpeed: 2000,
        prevArrow: '<div class="slider-arrow custom-arrow-prev cursor-pointer position-absolute d-flex justify-content-center align-items-center"><i class="fa fa-chevron-right"></i></div>',
        nextArrow: '<div class="slider-arrow custom-arrow-next cursor-pointer position-absolute d-flex justify-content-center align-items-center"><i class="fa fa-chevron-left"></i></div>',
        responsive: [
            {
            breakpoint: 1140,
            settings: {
                slidesToShow: 3,
            }
        },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows: false,
                }
            }
        ]
    })
});