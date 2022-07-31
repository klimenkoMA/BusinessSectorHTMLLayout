const openMobileMenuBtn = document.querySelector(".device-menu");
const headerMenu = document.querySelector(".header-nav");

openMobileMenuBtn.addEventListener("click", () => {
    if (openMobileMenuBtn.classList.contains("open")) {
        openMobileMenuBtn.classList.remove("open");
        headerMenu.classList.remove("active");
    } else {
        headerMenu.classList.add("active");
        openMobileMenuBtn.classList.add("open");
    }
})

$('.slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
});

$('.stoks-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
});

$('.proiz-slider').slick({
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 3,
                infinite: true
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true
            }
        },
    ]
});

$('.categories-slider').slick({
    slidesPerRow: 3,
    rows: 2,
    //fade: true,
    arrows: true,
    responsive: [{
            breakpoint: 1200,
            settings: {
                slidesPerRow: 3,
                rows: 2,
                arrows: true,
                dots: false,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesPerRow: 2,
                rows: 2,
                arrows: true,
                dots: false,
            }
        },
        {
            breakpoint: 769,
            settings: {
                slidesPerRow: 2,
                rows: 2,
                dots: false,
                arrows: true,
            }

        },
        {
            breakpoint: 576,
            settings: {
                slidesPerRow: 1,
                rows: 2,
                dots: false,
                arrows: true,
            }

        }
    ]
});



let loc = location.href;
let substring = '/categories';
if (loc.includes(substring) && !loc.includes("?")) {
    $('.new-products').css("padding", "21px 0 0 0");
};

if (window.innerWidth < 576) {
    document.querySelector('.pagination-row .page-item:first-child a').textContent = "<";
    document.querySelector('.pagination-row .page-item:last-child a').textContent = ">";
    $('.options').on('click', function() {
        filterToggle();
    });
    $('.options').addClass('active');
    filterToggle();

    function filterToggle() {
        if (!$('.options').hasClass('active')) {
            $('.options').toggleClass('active');
            document.querySelector('.prod-filter-container').style.transition = '2s';
            document.querySelector('.prod-filter-container').style.opacity = '0';
            document.querySelector('.prod-filter-container').style.display = 'block';
            document.querySelector('.prod-filter-container').style.marginTop = '165px';
            document.querySelector('.stoks-card-container').style.marginTop = '';
            setTimeout(function() {
                document.querySelector('.prod-filter-container').style.opacity = '1';
            }, 250);
        } else {
            document.querySelector('.prod-filter-container').style.display = 'none';
            document.querySelector('.prod-filter-container').style.marginTop = '35px';
            document.querySelector('.stoks-card-container').style.marginTop = '165px';
            $('.options').removeClass('active');
        }
    }
}