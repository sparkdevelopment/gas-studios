// Import Lethargy
// import * as Lethargy from './lethargy.min.js';

// Get elements and variables
const fade_in_elements = document.querySelectorAll('.fade-in');
const window_height = window.innerHeight;
window.lethargy = new Lethargy();

// Check if element is visible
function isElementVisible(element) {
    const rect = element.getBoundingClientRect();
    const windowHeight = window.innerHeight || document.documentElement.clientHeight;
    return rect.top >= 0 && rect.bottom <= windowHeight;
}

// Handle hamburger menu click
const main_navigation = document.querySelector('#primary-menu');
const nav_cross = document.querySelector('.nav-cross');
const nav_hamburger = document.querySelector('.nav-hamburger');
const custom_logo_link = document.querySelector('.custom-logo-link');
document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
    e.preventDefault();
    main_navigation.classList.toggle('visible');
    nav_cross.classList.toggle('hidden');
    nav_hamburger.classList.toggle('hidden');
});

// Initialize DocSlider is docSlider exists
const docSliderContainer = document.querySelector('.docSlider');

if (docSliderContainer) {
    docSlider.init({
        pager: false,
        afterChange: function (index) {
            fade_in_elements.forEach(function (element) {
                if (isElementVisible(element)) {
                    element.classList.add('fade-in--visible');
                } else {
                    element.classList.remove('fade-in--visible');
                }
            });
            if (index == 6) {
                document.querySelector('header').classList.add('header--scrolled');
            } else {
                document.querySelector('header').classList.remove('header--scrolled');
            }

            // Change hamburger color
            const backgroundColor = getComputedStyle(document.querySelector('.docSlider-current')).backgroundColor;
            if (backgroundColor === 'rgb(255, 255, 255)' && index > 0) {
                nav_hamburger.classList.add('dark');
                custom_logo_link.classList.add('dark');
            } else {
                nav_hamburger.classList.remove('dark');
                custom_logo_link.classList.remove('dark');
            }
        }
    });
}

// Initialize OwlCarousel
// import owlCarousel from 'owl.carousel';
const owl = document.querySelector('.owl-carousel');
$(owl).owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplaySpeed: 5000,
    autoplayHoverPause: true,
    autoHeight: true,
    items: 4,
    stageClass: "flex items-center",
    slideTransition: 'linear',
    stagePadding: 150,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            stagePadding: 100,
        },
        640: {
            items: 2,
            stagePadding: 50,
        },
        768: {
            items: 2,
            stagePadding: 75,
        },
        1024: {
            items: 3,
            stagePadding: 100,
        }
    }
});

// If the footer logo comes into view, fade out the header logo
// If the footer logo leaves the view, fade in the header logo
var footerLogo = document.querySelector('.js-footer-logo');
var header = document.querySelector('header');
var options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5
};
var observer = new IntersectionObserver(function (entries, observer) {
    entries.forEach(function (entry) {
        if (entry.isIntersecting) {
            header.classList.add('header--scrolled');
        } else {
            header.classList.remove('header--scrolled');
        }
    });
}
    , options);
observer.observe(footerLogo);