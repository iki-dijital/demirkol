import Swiper from 'swiper';
import {
  Navigation,
  Pagination,
  EffectFade,
  Autoplay,
} from 'swiper/modules';
import GLightbox from 'glightbox';


/* ------ Ana Sayfa ------ */

const bannerSwiperEl = document.getElementById('main-swiper');
const bannerSwiperIndex = document.getElementById(
  'main_swiper_index'
);

bannerSwiperEl &&
  new Swiper(bannerSwiperEl, {
    modules: [Navigation, Autoplay, EffectFade],
    effect: 'fade',
    crossFade: true,
    navigation: {
      prevEl: '#main-swiper .prev',
      nextEl: '#main-swiper .next',
    },
    autoplay: {
      delay: 2000,
    },
    on: {
      slideChange: function () {
        bannerSwiperIndex.textContent = this.activeIndex + 1;
      },
    },
  });

const mainServicesSwiperEl =
  document.getElementById('services-swiper');
const mainServicesTitle = document.getElementById(
  'services-swiper-title'
);
const mainServicesDesc = document.getElementById(
  'services-swiper-desc'
);

/**
 *
 * @param {string} titleText
 * @param {string} descText
 */
function updateText(titleText, descText) {
  mainServicesTitle.innerHTML = titleText;
  mainServicesDesc.innerHTML = descText;
}

mainServicesSwiperEl &&
  new Swiper(mainServicesSwiperEl, {
    modules: [Navigation, Pagination, Autoplay],
    slidesPerView: 1.2,
    speed: 200,
    loop: true,
    pagination: {
      el: '#main-services .swiper-pag',
    },
    navigation: {
      nextEl: '#main-services .next',
      prevEl: '#main-services .prev',
    },
    autoplay: {
      delay: 2000,
    },
    on: {
      init: function () {
        const slideEl = this.slides[this.activeIndex];
        updateText(slideEl.dataset.title, slideEl.dataset.desc);
      },
      slideChange: function () {
        const slideEl = this.slides[this.activeIndex];
        updateText(slideEl.dataset.title, slideEl.dataset.desc);
      },
    },
  });

const homePageVideo = document.getElementById('video_wrapper');

homePageVideo &&
  new GLightbox({
    plyr: {
      config: {
        ratio: '16:9',
        youtube: {
          noCookie: true,
          rel: 0,
          showinfo: 0,
          iv_load_policy: 3,
        },
      },
    },
  });

/* ------ End Ana Sayfa ------ */


/* ------ Proje Detay ------ */

const projectDetail = document.getElementById("project-detail");
projectDetail && new GLightbox()

/* ------ End Proje Detay ------ */

/* ------ İletişim ------ */

const directionsButton = document.getElementById('directions');

function mapGo(mapLat, mapLong) {
  if ((navigator.userAgentData.platform.indexOf("iPhone") !== -1)
    || (navigator.userAgentData.platform.indexOf("iPod") !== -1)
    || (navigator.userAgentData.platform.indexOf("iPad") !== -1)) {
    window.open("maps://maps.google.com/maps?daddr=" + mapLat + "," + mapLong + "&amp;ll=");
  } else {
    window.open("http://maps.google.com/maps?daddr=" + mapLat + "," + mapLong + "&amp;ll=");
  }
}

directionsButton?.addEventListener("click", function (e) {
  let [lat,long] = directionsButton.dataset.coordinates.split(',');
  mapGo(lat,long);
  e.preventDefault();

});

/* ------ End İletişim ------ */