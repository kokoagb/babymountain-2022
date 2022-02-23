import Swiper, { Autoplay, Lazy, Navigation, Virtual } from 'swiper';
import 'swiper/scss';
import 'swiper/scss/autoplay';
import 'swiper/scss/lazy';
import 'swiper/scss/navigation';
import 'swiper/scss/virtual';

window.addEventListener('DOMContentLoaded', () => {
  new Swiper('.wp-block-bm-blocks-carousel', {
    loop: true,
    autoplay: true,
    modules: [Autoplay, Lazy, Navigation],
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    preloadImages: false,
    lazy: {
      checkInView: true,
    },
  });

  new Swiper('.wp-block-bm-blocks-testimonials .swiper', {
    loop: true,
    autoplay: true,
    modules: [Autoplay, Lazy, Navigation],
    navigation: {
      nextEl: document.querySelector(
        '.wp-block-bm-blocks-testimonials-swiper-button-next'
      ),
      prevEl: document.querySelector(
        '.wp-block-bm-blocks-testimonials-swiper-button-prev'
      ),
    },
    preloadImages: false,
    lazy: {
      checkInView: true,
    },
    centeredSlides: true,
    slidesPerView: 2,
    breakpoints: {
      200: {
        slidesPerView: 1,
      },
      600: {
        slidesPerView: 2,
      },
    },
  });

  new Swiper('.wp-block-bm-blocks-partners', {
    loop: true,
    autoplay: true,
    modules: [Autoplay, Lazy],
    preloadImages: false,
    lazy: {
      checkInView: true,
    },
    slidesPerView: 3,
    spaceBetween: 30,
    breakpoints: {
      768: {
        slidesPerView: 5,
      },
    },
  });

  new Swiper('.wp-block-bm-blocks-products .swiper', {
    autoplay: true,
    virtual: {
      enabled: true,
      slides: window.bmProducts ?? [],
      renderSlide(slide) {
        return `
          <a class="swiper-slide wp-block-bm-blocks-products-product product-${slide.id}" href="${slide.permalink}">
            <div class="wp-block-bm-blocks-products-product-image-wrapper">
              <img data-src="${slide.image_url}" class="swiper-lazy wp-block-bm-blocks-products-product-image" />
              <div class="wp-block-bm-blocks-products-product-cta">
                Tovább a termékre
              </div>
            </div>
            <div class="wp-block-bm-blocks-products-product-name">${slide.name}</div>
            <div class="wp-block-bm-blocks-products-price">${slide.price} Ft</div>
          </a>
        `;
      },
    },
    modules: [Autoplay, Lazy, Navigation, Virtual],
    navigation: {
      nextEl: document.querySelector(
        '.wp-block-bm-blocks-products-swiper-button-next'
      ),
      prevEl: document.querySelector(
        '.wp-block-bm-blocks-products-swiper-button-prev'
      ),
    },
    preloadImages: false,
    lazy: {
      checkInView: true,
    },
    slidesPerView: 4,
    spaceBetween: 16,
    breakpoints: {
      200: {
        slidesPerView: 1,
      },
      400: {
        slidesPerView: 2,
      },
      600: {
        slidesPerView: 3,
      },
      800: {
        slidesPerView: 4,
      },
    },
  });

  new Swiper('.wp-block-bm-blocks-product-categories .swiper', {
    // autoplay: true,
    virtual: {
      enabled: true,
      slides: window.bmCategories ?? [],
      renderSlide(slide) {
        return `
          <a class="swiper-slide wp-block-bm-blocks-product-categories-category" href="${slide.permalink}">
            <img data-src="${slide.image_url}" class="swiper-lazy wp-block-bm-blocks-product-categories-category-image" />
            <div class="wp-block-bm-blocks-product-categories-category-name">${slide.name}</div>
          </a>
        `;
      },
    },
    modules: [Autoplay, Lazy, Navigation, Virtual],
    navigation: {
      nextEl: document.querySelector(
        '.wp-block-bm-blocks-product-categories-swiper-button-next'
      ),
      prevEl: document.querySelector(
        '.wp-block-bm-blocks-product-categories-swiper-button-prev'
      ),
    },
    preloadImages: false,
    lazy: {
      checkInView: true,
    },
    slidesPerView: 3,
    spaceBetween: 16,
    breakpoints: {
      200: {
        slidesPerView: 1,
      },
      400: {
        slidesPerView: 2,
      },
      600: {
        slidesPerView: 3,
      },
    },
  });
});
