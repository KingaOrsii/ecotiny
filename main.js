import PhotoSwipe from 'https://cdn.jsdelivr.net/npm/photoswipe@5.4.4/dist/photoswipe.esm.min.js';
import PhotoSwipeLightbox from 'https://cdn.jsdelivr.net/npm/photoswipe@5.4.4/dist/photoswipe-lightbox.esm.min.js';

// Parallax effect for gallery items
function initParallax() {
    const galleryItems = document.querySelectorAll('.parallax__image::before');
    
    function updateParallax() {
        const scrollTop = window.pageYOffset;
        
        document.querySelectorAll('.parallax__image').forEach((item, index) => {
            const rect = item.getBoundingClientRect();
            const itemTop = rect.top + scrollTop;
            const itemHeight = rect.height;
            const windowHeight = window.innerHeight;
            
            // Check if item is in viewport
            if (rect.bottom >= 0 && rect.top <= windowHeight) {
                // Simple parallax calculation relative to viewport center
                const speed = 0.15; // Much slower parallax speed
                const viewportCenter = scrollTop + (windowHeight / 2);
                const itemCenter = itemTop + (itemHeight / 2);
                const distance = viewportCenter - itemCenter;
                const yPos = distance * speed;
                
                // Clamp the movement to prevent excessive displacement
                const maxMovement = 50;
                const clampedYPos = Math.max(-maxMovement, Math.min(maxMovement, yPos));
                
                // Apply transform to the pseudo-element via CSS custom property
                item.style.setProperty('--parallax-y', `${clampedYPos}px`);
            }
        });
    }
    
    // Throttle scroll events for better performance
    let ticking = false;
    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateParallax);
            ticking = true;
            setTimeout(() => { ticking = false; }, 16); // ~60fps
        }
    }
    
    window.addEventListener('scroll', requestTick);
    updateParallax(); // Initial call
}

// Initialize when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initParallax);
} else {
    initParallax();
}


const listItems = document.querySelectorAll(".vertical-accordion__item");

for (let i = 0; i < listItems.length; i++) {
    listItems[i].addEventListener("click", () => {
        unselectAll()
        listItems[i].classList.add("selected");
    }, false);
};

function unselectAll(){
    for (let i = 0; i < listItems.length; i++) {
        listItems[i].classList.remove("selected");
    };
}

document.addEventListener('DOMContentLoaded', function () {
    // Main gallery slider
    initializeSwiper(document.querySelector('.lg-slider'), 1.4, 1, 30, {
        320: {
            slidesPerView: 1.4,
        },
        640: {
            slidesPerView: 1.3,
            slidesPerGroup: 1
        },
        1024: {
            slidesPerView: 2,
        },
        1280: {
            slidesPerView: 1.3,
        },
        1440: {
            slidesPerView: 1.3,
        },
        1920: {
            slidesPerView: 1.4,
        }
    });

    // Accordion sliders
    document.querySelectorAll('.accordion__slider').forEach(function(slider, idx) {
        // Give each gallery a unique id for lightGallery
        slider.querySelector('.swiper-wrapper').setAttribute('id', 'slider__gallery_' + idx);
        initializeSwiper(slider, 1.4, 1, 15, {
            1440: {
                slidesPerView: 1.2,
            },
            1920: {
                slidesPerView: 1.4,
                slidesPerGroup: 1,
            }
        });
    });

    // Text slider
    initializeSwiper('.text-slider', 'auto', 1, 30, {}, true, '#fff', false, false);

    // Featured slider
    initializeSwiper('.featured-slider', 'auto', 1, 30, {}, true, '#7AC942', false, false);
    
});

function initializeSwiper(container, slidesPerView, slidesPerGroup, spaceBetween, breakpoints, loop = true, arrowColor = '#7AC942', showNumbers = true, withGallery = true) {
    // Accepts either a selector string or a DOM element
    let sliderElem = typeof container === 'string' ? document.querySelector(container) : container;
    if (!sliderElem) return;
    let $gallery = sliderElem.querySelector('.swiper-wrapper');
    let paginationElem = sliderElem.querySelector('.swiper-pagination');

    const swiper = new Swiper(sliderElem, {
        loop,
        slidesPerView,
        slidesPerGroup,
        centeredSlides: false,
        spaceBetween,
        pagination: {
            el: paginationElem,
            type: 'custom',
            renderCustom: function (swiper, current, total) {
                let pagination = `
                    <div class="swiper-pagination-custom">
                        <span class="swiper-pagination-prev" data-action="prev">
                            <svg width="40" height="18" viewBox="0 0 40 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.5 16.5L2 9M2 9L9.5 1.5M2 9L38 9" stroke="${arrowColor}" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>`;
                if (showNumbers) {
                    pagination += `<span class="swiper-pagination-counter">${current} - ${total}</span>`;
                }
                pagination += `<span class="swiper-pagination-next" data-action="next">
                            <svg width="40" height="18" viewBox="0 0 40 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.5 1.5L38 9M38 9L30.5 16.5M38 9L2 9" stroke="${arrowColor}" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>`;
                pagination += `</div>`;
                return pagination;
            }
        },
        breakpoints,
        on: {
            init: function () {
                if (!withGallery) return;
                if ($gallery && !$gallery.pswpInitialized) {
                    // Remove default link behavior for gallery links
                    $gallery.querySelectorAll('a.swiper-slide').forEach(function(link) {
                        link.addEventListener('click', function(e) {
                            e.preventDefault();
                        });
                    });
                    // Initialize PhotoSwipeLightbox
                    const lightbox = new PhotoSwipeLightbox({
                        gallery: '#' + $gallery.id,
                        children: 'a.swiper-slide',
                        pswpModule: PhotoSwipe
                    });
                    lightbox.init();
                    $gallery.pswpInitialized = true;
                }
            },
            paginationRender: function () {
                setTimeout(() => {
                    const prevBtn = sliderElem.querySelector('.swiper-pagination-prev');
                    const nextBtn = sliderElem.querySelector('.swiper-pagination-next');
                    if (prevBtn) {
                        prevBtn.addEventListener('click', () => {
                            swiper.slidePrev();
                        });
                    }
                    if (nextBtn) {
                        nextBtn.addEventListener('click', () => {
                            swiper.slideNext();
                        });
                    }
                }, 10);
            }
        }
    });
}

// FAQ accordion logic
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.faq__question').forEach(function(btn) {
        btn.addEventListener('click', function() {
            const item = btn.parentElement;
            const open = item.classList.contains('open');
            document.querySelectorAll('.faq__item').forEach(i => i.classList.remove('open'));
            if (!open) item.classList.add('open');
        });
    });
});


const container = document.querySelector('.sliding-text__container');
const fixText = document.querySelector('.sliding-text__fix');
const slides = document.querySelectorAll('.sliding-text');
let current = 0;

function showNextSlide() {
  const currentSlide = slides[current];
  const next = (current + 1) % slides.length;
  const nextSlide = slides[next];

  // Add exit and active classes
  currentSlide.classList.remove('active');
  currentSlide.classList.add('exit');

  nextSlide.classList.remove('exit');
  nextSlide.classList.add('active');

  // Adjust container width for smooth fixed text movement
  const nextWidth = nextSlide.offsetWidth;
  container.style.width = nextWidth + 'px';

  current = next;
}

// initialize width to match the first slide
container.style.width = slides[0].offsetWidth + 'px';

// update width and slide every 2.5s
setInterval(showNextSlide, 2500);

