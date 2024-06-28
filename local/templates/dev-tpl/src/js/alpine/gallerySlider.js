export default (perPage = 1, between = 0) => ({
    swiper: null,
    async init() {
        const { default: Swiper } = await import("../libs/Swiper");
        this.swiper = new Swiper(this.$refs.reviewSwiper, {
            slidesPerView: 1,
            loop:true,
            autoplay: {
                delay: 900,
            },
            breakpoints: {
                1024:{
                    slidesPerView: 4.3,
                },
                768:{
                    slidesPerView: 3,
                },
            },
            navigation: {
                prevEl: this.$refs.prev,
                nextEl: this.$refs.next,
            },
        });

    },
});