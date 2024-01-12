// Menu

function toggleMenu() {
    var icon = document.getElementById('menu-icon');
    var isOpen = document.getElementById('menu-links').style.display === 'block';

    if (isOpen) {
        icon.innerHTML = '<i class="fa fa-bars"></i>';
        document.getElementById('menu-links').style.display = 'none';

    } else {
        icon.innerHTML = '<i class="fa fa-times"></i>';
        document.getElementById('menu-links').style.display = 'block';
    }

    var menuLinks = document.querySelectorAll('#menu-links ul li a.dynamic-title');
    menuLinks.forEach(function(link) {
    link.addEventListener('click', function() {
        toggleMenu();
    });
});}

// Parralax hero header

      jQuery(document).ready(function($) {
            var controller = new ScrollMagic.Controller();

            var scene = new ScrollMagic.Scene({
            triggerElement: "#pinned-trigger",
            duration: 150,
            triggerHook: 0,
            reverse: true
            })
            .setPin("#parallax-image")
            .addTo(controller);
        });


// Characters swiper

var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });


// Intersection functions


function handleIntersectionForClouds(entries, observer) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('animate-clouds');
    }
  });
}

function handleIntersectionForTitles(entries, observer) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('animate-title')
    }
  })
}

const observerClouds = new IntersectionObserver(handleIntersectionForClouds);
const observerTitles = new IntersectionObserver(handleIntersectionForTitles);

const placeSection = document.getElementById('place');
const titleToObserve = document.querySelectorAll('.dynamic-title');

observerClouds.observe(placeSection);
titleToObserve.forEach((title) => {
observerTitles.observe(title);
});

