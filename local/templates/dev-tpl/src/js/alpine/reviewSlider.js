export default (perPage = 1, between = 0) => ({
    swiper: null,
    async init() {
        const { default: Swiper } = await import("../libs/Swiper");
        this.swiper = new Swiper(this.$refs.reviewSwiper, {
            slidesPerView: 1,
            spaceBetween: between,
            breakpoints: {
                1024:{
                    slidesPerView: 2.7,
                },
                768:{
                    slidesPerView: 2,
                },
            },
            navigation: {
                prevEl: this.$refs.prev,
                nextEl: this.$refs.next,
            },
        });

    },
});