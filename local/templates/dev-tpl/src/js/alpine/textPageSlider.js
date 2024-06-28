export default ({ speed = 900, spaceBetween = 0, autoHeight = false }) => ({
  async init() {
    const { default: Swiper } = await import("../libs/Swiper");
    new Swiper(this.$refs.swiper, {
      effect: "coverflow",
      grabCursor: true,
      spaceBetween: 0,
      slidesPerView: 1.17,
      centeredSlides: true,
      loop: true,
      coverflowEffect: {
        rotate: 0,
        depth: 750,
        slideShadows: false,
      },

      breakpoints: {
        767: {
          slidesPerView: 3,
          centeredSlides: true,
        }
      },

      navigation: {
        prevEl: this.$refs.prev,
        nextEl: this.$refs.next,
      },
      pagination: {
        el: this.$refs.pag,
        type: "fraction",
      },
    });
  },
});
