@extends('head')
@section('title', 'Промо видео-ролики для 7lab.pro')
@section('meta-description', 'Рассказываем о разработке промо роликов для 7lab.pro')
@section('meta-keywords', 'video promo разработка видео')
@section('content')
    <body>
    <!-- Header -->
    <header id="bringer-header" class="is-frosted is-sticky" data-appear="fade-down" data-unload="fade-up">
        <!-- Desktop Header -->
        <div class="bringer-header-inner">
            @include('header-logo')
            @include('menu')
            @include('header-button')
        </div>
        @include('mobileheader')
    </header>

    <!-- Page Main -->
    <main id="bringer-main">
        <div class="stg-container">
            <!-- Section: Page Title -->
            <section>
                <div class="stg-row stg-bottom-gap-l stg-tp-bottom-gap">
                    <div class="stg-col-6 stg-tp-bottom-gap">
                        <h1 class="bringer-post-title" data-appear="fade-up" data-unload="fade-left">Промо ролики</h1>
                    </div>

                    <div class="stg-col-6 stg-tp-col-9 stg-tp-offset-3 align-right" data-appear="fade-up" data-delay="100" data-unload="fade-right">
                        <p>Наши ролики — отражение нашей креативности и ценностей. Мы упаковываем смыслы в короткий формат, показываем гибкость, динамику и креативность в каждом кадре. Оригинальный сценарий, музыкальное оформление и визуальные переходы — это интеллектуальная подпись нашего видения. </p>
                    </div>
                </div>

                <!-- Slider -->
                <div class="bringer-slider-wrapper stg-bottom-gap" data-appear="fade-up" data-delay="200" data-unload="fade-up">
                    <div class="swiper bringer-slider" data-autoplay="12000" data-duration="300" data-effect="slide">
                        <div class="swiper-wrapper">
                            <!-- Slider Item -->
                            <div class="swiper-slide stg-row">
                                <video src="./video/promo/intro5.mp4" class="data-poster stg-col-25" loop muted autoplay playsinline></video>
                                <video src="./video/promo/intro6.mp4" class="data-poster stg-col-25" loop muted autoplay playsinline></video>
                                <video src="./video/promo/intro7.mp4" class="data-poster stg-col-25" loop muted autoplay playsinline></video>
                                <video src="./video/promo/intro8.mp4" class="data-poster stg-col-25" loop muted autoplay playsinline></video>
                            </div>
                            <!-- Slider Item -->
                            <div class="swiper-slide stg-row">
                                <video src="./video/promo/intro1.mp4" class="data-poster stg-col-25" loop muted autoplay playsinline></video>
                                <video src="./video/promo/intro2.mp4" class="data-poster stg-col-25" loop muted autoplay playsinline></video>
                                <video src="./video/promo/intro3.mp4" class="data-poster stg-col-25" loop muted autoplay playsinline></video>
                                <video src="./video/promo/intro4.mp4" class="data-poster stg-col-25" loop muted autoplay playsinline></video>
                            </div>
                        </div>
                    </div><!-- .bringer-slider -->
                    <!-- Slider Navigation -->
                    <div class="bringer-slider-nav on-sides">
                        <a href="#" class="bringer-slider-prev">
                            <span class="bringer-icon bringer-icon-arrow-left"></span>
                        </a>
                        <a href="#" class="bringer-slider-next">
                            <span class="bringer-icon bringer-icon-arrow-right"></span>
                        </a>
                    </div>
                </div>

                <!-- Meta -->
                <div class="bringer-hero-info-line" data-stagger-appear="fade-up" data-delay="200" data-stager-delay="100" data-unload="fade-up">
                    <div class="bringer-meta">
                        Client: <span>7lab.pro</span>
                    </div>
                    <div class="bringer-meta">
                        Service: <span>Video production</span>
                    </div>
                    <div class="bringer-meta">
                        Date: <span>Dec '2025</span>
                    </div>
                </div><!-- .bringer-hero-info-line -->
            </section>



        </div><!-- .stg-container -->

        @include("footer")
    </main>

    @include('protect')
    @include('backlight')
    @include('scripts')
    </body>
    </html>
@endsection
