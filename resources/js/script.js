$(".-carousel").slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    speed: 1000,
    autoplaySpeed: 3000,
    nextArrow: $("#arrowNext"),
    prevArrow: $("#arrowPrev"),
    responsive: [
        {
            breakpoint: 767,
            settings: {
                dots: true,
                slidesToShow: 1,
                arrows: false,
            }
        },
        {
            breakpoint: 998,
            settings: {
                dots:true,
                slidesToShow: 1,
                arrows: false,
            },
        }
    ]
});
