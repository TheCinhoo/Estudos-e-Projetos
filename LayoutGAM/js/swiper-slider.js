var swiper_slider = {
  galleries: ['.slider .galeria'],
  swipers: {},
  ndx: 0,
  slider: function () {
    var options
    $(swiper_slider.galleries).each(function (n,item) {
      $(item).not('.swp-act').addClass('swp-act').each(function (nn,itemx) {
        options = {
          speed:750,
          // autoplay:5000,
          pagination:"._sbullets"+swiper_slider.ndx,
          paginationClickable:true,
          slidesPerView:'auto',
          // slidesPerView:4,
          nextButton: '._sright'+swiper_slider.ndx,
          prevButton: '._sleft'+swiper_slider.ndx, 
          buttonDisabledClass: '_swp-disabled',
          watchActiveIndex: true,
          onInit: function (swiper) {
            swiper_slider.log("index:",swiper_slider.ndx);
            swiper_slider.log(swiper);
          },
          // onReachBeginning: function () {
          // },      
          // onReachEnd: function () {
          // },
          grabCursor: true,
          mode:'horizontal'
        };

        $(itemx).children().addClass('swiper-wrapper');
        $(itemx).children().wrapAll('<div class="swiper-container"></div>');
        $(itemx).find('.swiper-wrapper').children().addClass('swiper-slide');

        $(itemx).append('<span class="swiper-button-prev previous _sleft'+swiper_slider.ndx+'" ndx="'+swiper_slider.ndx+'"></span>');
        $(itemx).append('<span class="swiper-button-next next _sright'+swiper_slider.ndx+'" ndx="'+swiper_slider.ndx+'"></span>');
        $(itemx).append('<div class="banner-bullets-wrap _sbulletsWrap'+swiper_slider.ndx+'"><div class="banner-bullets _sbullets'+swiper_slider.ndx+'"></div></div>');

        var curGallery = $(itemx).find('.swiper-container');
        swiper_slider.swipers['swp'+swiper_slider.ndx] = $(curGallery).swiper(options);
        swiper_slider.ndx++;
      });
    });
  },
  log: function () {
    if(typeof(console)==="undefined") return false;
    console.log(arguments);
  }
}
$(swiper_slider.slider);