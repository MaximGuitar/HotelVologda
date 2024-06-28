export default (perPage = 1, between = 0) => ({
    swiper: null,
    async init() {
        const { default: Swiper } = await import("../libs/Swiper");
        this.swiper = new Swiper(this.$refs.CatalogSwiper, {

            slidesPerView: perPage,
            loop: true,
            spaceBetween: between,

            pagination: {
                el: this.$refs.pag,
            },
        });

    },
    SlideTo(slide = 0) {
        this.swiper.slideTo(slide, 500, true)
    }

});