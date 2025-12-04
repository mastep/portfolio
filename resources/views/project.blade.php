@extends('head')
@section('title', 'Интернет-магазин для Art of Tea')
@section('meta-description', 'Рассказываем о интернет-магазине для Art of Tea')
@section('meta-keywords', 'интернет-магазин, разработка интернет-магазина')
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
                    <h1 class="bringer-post-title" data-appear="fade-up" data-unload="fade-left">Art Of Tea</h1>
                </div>
                <div class="stg-col-6 stg-tp-col-9 stg-tp-offset-3 align-right" data-appear="fade-up" data-delay="100" data-unload="fade-right">
                    <p>Интернет-магазин <a href="https://artoftea.lv/en/product/mint-variety">ArtOfTea.lv</a> специализируется на продаже высококачественных сортов чая и аксессуаров для чаепития. В ассортименте магазина представлен широкий выбор: от классического черного до экзотического зеленого и ароматного фруктового.</p>
                </div>
            </div>

            <!-- Slider -->
            <div class="bringer-slider-wrapper stg-bottom-gap" data-appear="fade-up" data-delay="200" data-unload="fade-up">
                <div class="swiper bringer-slider" data-autoplay="2000" data-duration="800" data-effect="slide">
                    <div class="swiper-wrapper">
                        <!-- Slider Item -->
                        <div class="swiper-slide">
                            <img src="img/portfolio/portfolio01/slider01.jpg" alt="Curology" width="1920" height="1080">
                        </div>
                        <!-- Slider Item -->
                        <div class="swiper-slide">
                            <img src="img/portfolio/portfolio01/slider04.jpg" alt="Curology" width="1920" height="1080">
                        </div>
                        <!-- Slider Item -->
                        <div class="swiper-slide">
                            <img src="img/portfolio/portfolio01/slider02.jpg" alt="Curology" width="1920" height="1080">
                        </div>
                        <!-- Slider Item -->
                        <div class="swiper-slide">
                            <img src="img/portfolio/portfolio01/slider03.jpg" alt="Curology" width="1920" height="1080">
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
                    Client: <span>SIA "Art Platz"</span>
                </div>
                <div class="bringer-meta">
                    Service: <span>Ecom</span>
                </div>
                <div class="bringer-meta">
                    Date: <span>August '2024</span>
                </div>
            </div><!-- .bringer-hero-info-line -->
        </section>

        <!-- Section: The Challenge -->
        <section data-padding="top" class="backlight-top">
            <div class="stg-row stg-bottom-gap-l">
                <div class="stg-col-6 stg-tp-bottom-gap" data-appear="fade-right" data-unload="fade-left">
                    <h2>eCommerce CMS</h2>
                </div>
                <div class="stg-col-6 stg-tp-col-10 stg-tp-offset-2" data-appear="fade-left" data-unload="fade-right">
                    <p class="bringer-large-text">Проект разработан на базе  eCommerce CMS OmniMart (Laravel eCommerce). OmniMart, мощная система управления контентом для электронной коммерции на базе Laravel, предлагает ряд преимуществ для бизнеса любого масштаба, стремящегося к созданию уникального и эффективного онлайн-магазина.</p>
                </div>
            </div>
            <div class="stg-row" data-appear="fade-up" data-unload="zoom-out">
                <div class="stg-col-6 stg-offset-3 stg-tp-col-8 stg-tp-offset-2">
                    <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio01/image01.jpg" alt="Curology" width="1200" height="1200">
                </div>
            </div>
        </section>

        <!-- Section: Our Approach -->
        <section data-padding="top">
            <div class="stg-row stg-bottom-gap">
                <div class="stg-col-6">
                    <h2 data-appear="fade-up" data-unload="fade-left">Поиск / умные фильтры</h2>
                </div>
            </div>
            <div class="stg-row stg-bottom-gap-l" data-appear="fade-up" data-delay="100" data-unload="fade-right">
                <div class="stg-col-9 stg-offset-3 stg-tp-col-10 stg-tp-offset-2">
                    <p class="bringer-large-text">Умные фильтры позволяют посетителям магазина быстро находить нужные товары, не просматривая весь каталог. Это повышает удобство использования сайта и увеличивает вероятность совершения покупки.
                        Увеличение конверсии: Эффективная фильтрация товаров сокращает время, затрачиваемое на поиск, что может привести к увеличению количества покупок. Посетители, которые находят то, что им нужно быстрее, с большей вероятностью совершат покупку.</p>
                </div>
            </div>
            <div class="stg-row" data-appear="fade-left" data-unload="fade-left">
                <div class="stg-col-9">
                    <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio01/slider03.jpg" alt="Curology" width="1200" height="1200">
                </div>
            </div>
        </section>

        <!-- Section: The Solution -->
        <section data-padding="top">
            <div class="stg-row stg-bottom-gap-l">
                <div class="stg-col-6 stg-tp-bottom-gap" data-appear="fade-right" data-unload="fade-left">
                    <h2>Онлайн оплата</h2>
                </div>
                <div class="stg-col-6 stg-tp-col-10 stg-tp-offset-2" data-appear="fade-left" data-unload="fade-right">
                    <p class="bringer-large-text">Интеграция с платежными системами - обеспечивает широкий выбор способов оплаты для удобства покупателей. Все операция и история заказов хранятся в личном кабинете покупателя. Функции интернет-магазина включают:
                        Удобная карточка товара - содержит подробное описание товара с фотографиями и отзывами.
                        Информационная рассылка - стимулирует повторные покупки и привлечение новых клиентов через рассылку новостей и акций.
                    </p>
                </div>
            </div>
            <!-- Gallery -->
            <div class="bringer-grid-3cols" data-stagger-appear="fade-up" data-stagger-unload="fade-left">
                <div>
                    <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio01/image02.jpg" alt="Curology" data-speed="0.95" data-m-speed="1" width="800" height="1200">
                </div>
                <div>
                    <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio01/image03.jpg" alt="Curology" width="800" height="1200">
                </div>
                <div>
                    <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio01/image04.jpg" alt="Curology" data-speed="1.05" data-m-speed="1" width="800" height="1200">
                </div>
            </div>
        </section>

        <!-- Section: Results & Impact -->
        <section>
            <div class="stg-row stg-bottom-gap">
                <div class="stg-col-6" data-appear="fade-up" data-unload="fade-left">
                    <h2>Адаптивность</h2>
                </div>
            </div>
            <div class="stg-row" data-appear="fade-up" data-delay="100" data-unload="fade-right">
                <div class="stg-col-9 stg-offset-3 stg-tp-col-10 stg-tp-offset-2">
                    <p class="bringer-large-text">Адаптивный дизайн - обеспечивает доступ к магазину с мобильных устройств.
                        Система обновления товаров - автоматизирует процесс обновления ассортимента товаров.
                        Управление заказами - включает обработку заказов, отслеживание статуса заказов и управление складом.
                        Интеллектуальный расчет доставки - автоматически рассчитывает стоимость доставки на основе веса и габаритов товара.</p>
                </div>
            </div>
            @include("link-content")
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
