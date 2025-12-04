<!-- Media Slider -->
<div class="bringer-hero-media-wrap bringer-masked-block stg-bottom-gap stg-m-bottom-gap-s" data-appear="zoom-out">
    <div class="swiper bringer-slider bringer-masked-media" data-autoplay="6000" data-duration="1000" data-effect="">
        <div class="swiper-wrapper">
            <!-- Slider Item -->
            <div class="swiper-slide">
                <div class="bringer-hero-media bringer-masked-media" data-appear="fade-right" data-unload="fade-left" data-delay="150" data-threshold="0">
                    <h1 data-appear="fade-right" data-unload="fade-up" data-delay="200" class="bringer-page-title adaptive" style="color:#000;">Адаптируем проекты<br>под все устройства</h1>
                    <video  data-video-src="./video/adaptive.mp4"  playsinline muted autoplay></video>
                </div>
            </div>
            <!-- Slider Item -->
            <div class="swiper-slide">
                <div class="bringer-hero-media bringer-masked-media" data-appear="fade-right" data-unload="fade-left" data-delay="150" data-threshold="0">
                    <h1 data-appear="fade-right" data-unload="fade-up" data-delay="200" class="bringer-page-title adaptive">Проектируем<br>самые сложные интерфейсы</h1>
                    <video data-video-src="video/maproad.mp4" poster="img/preview_1.jpg" playsinline muted loop autoplay></video>
                </div>
            </div>
            <!-- Slider Item -->
            <div class="swiper-slide">
                <div class="bringer-hero-media bringer-masked-media" data-appear="fade-right" data-unload="fade-left" data-delay="150" data-threshold="0">
                    <h1 data-appear="fade-right" data-unload="fade-up" data-delay="200" class="bringer-page-title adaptive">Создаем самые вкусные сайты</h1>
                    <video  data-video-src="video/blackberry.mp4"  playsinline muted loop autoplay></video>
                </div>
            </div>
            <style>
                @media (width <= 500px) {
                    .adaptive{
                        font-size: 1.8em;
                    }
                }


                .swiper-slide .bringer-page-title{
                    position: absolute; padding:20% 5%; z-index: 10;
                }
            </style>
        </div>
    </div><!-- .bringer-slider -->
    <!-- Masked Navigation -->
    <div class="bringer-slider-nav bringer-masked-content at-bottom-right">
        <a href="#" class="bringer-slider-prev">
            <span class="bringer-icon bringer-icon-chevron-left"></span>
        </a>
        <a href="#" class="bringer-slider-next">
            <span class="bringer-icon bringer-icon-chevron-right"></span>
        </a>
    </div>
</div><!-- .bringer-hero-media-wrap -->
