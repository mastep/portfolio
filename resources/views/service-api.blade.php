@extends('head')
@section('title', 'Разработка API - цифровая нервная система вашего бизнеса')
@section('meta-description', 'Разработка API, синхронизация, обмен между системами')
@section('meta-keywords', 'api, обмен, данные, синхронизация')
@section('link-title1', 'Заказать API')
@section('link-title3', '')
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
        <!-- Section: Intro -->
        <section>
            <div class="stg-row stg-large-gap stg-tp-normal-gap stg-tp-column-reverse">
                <div class="stg-col-6 stg-vertical-space-between" data-unload="fade-left">
                    <div class="stg-tp-bottom-gap">
                        <h1 class="bringer-page-title" data-split-appear="fade-up">Разработка API</h1>
                        <p class="bringer-large-text" data-appear="fade-right" data-delay="100">API (Application programming interface) это набор правил и протоколов, который позволяет разным программам общаться друг с другом и обмениваться данными.</p>
                        <p class="bringer-large-text bringer-tp-normal-text" data-appear="fade-right" data-delay="200">
                            Ваш сайт не общается с мобильным приложением?Данные для 1C-бухгалтерии приходится вводить вручную? Партнеры не могут подключиться к вашим сервисам?
                        </p>
                        <p class="bringer-large-text bringer-tp-normal-text" data-appear="fade-right" data-delay="200">
                            Мы разрабатываем API — надежные «мосты» между вашими программами, сайтами и сервисами.
                        </p>
                        <div class="stg-row stg-valign-middle stg-top-gap stg-no-gap" data-unload="fade-left">
                            <a href="{{asset('REST-API-Solution.pdf')}}" class="bringer-icon-link">
                                <div class="bringer-icon-wrap">
                                    <i class="bringer-icon bringer-icon-explore"></i>
                                </div>
                                <div class="bringer-icon-link-content">
                                    <h6>
                                        Посмотреть план работ<br> разработки REST API
                                    </h6>
                                    <span class="bringer-label">pdf</span>
                                </div>
                            </a><!-- .bringer-icon-link -->
                        </div>

                    </div>
                </div>
                <div class="stg-col-6 stg-tp-bottom-gap-l" data-appear="fade-left" data-unload="fade-right">
                    <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-api.jpg" alt="Brainding" width="800" height="1200">
                </div>
            </div>
        </section>

        <!-- Section: Details -->
        <section class="backlight-both">
            <!-- Section Title -->
            <div class="stg-row stg-bottom-gap-l">
                <div class="stg-col-7">
                    <h2 data-split-appear="fade-up" data-unload="fade-up">Преимущества API</h2>
                </div>
                <div class="stg-col-5"></div>
            </div>
            <!-- Details 01 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-api-1.jpg" alt="API 01" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                    <span class="bringer-label">преимущество 01</span>
                    <h4>Автоматизация</h4>
                    <p>Данные автоматически синхронизируются между сайтом, CRM и складом.</p>
                </div>
            </div>
            <!-- Details 02 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l" data-unload="fade-right">
                <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-api-2.jpg" alt="API 02" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                    <span class="bringer-label">преимущество 02</span>
                    <h4>Интеграция</h4>
                    <p>Легко подключайте партнеров, платежные системы и маркетплощадки.</p>
                </div>
                <div class="stg-col-3"><!-- Empty Column --></div>
            </div>
            <!-- Details 03 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-api-3.jpg" alt="API 03" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                    <span class="bringer-label">преимущество 03</span>
                    <h4>Масштабирование</h4>
                    <p>Создайте мобильное приложение или личный кабинет на готовом API.</p>
                </div>
            </div>
            <!-- Details 04 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l" data-unload="fade-right">
                <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-api-4.jpg" alt="API 04" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                    <span class="bringer-label">преимущество 04</span>
                    <h4>Экономия</h4>
                    <p>Больше никакой ручной работы и человеческих ошибок.</p>
                </div>
                <div class="stg-col-3"><!-- Empty Column --></div>
            </div>
            @include("link-content")
        </section>


    </div><!-- .stg-container -->
    @include("footer")
</main>
@include('protect')
@include('show-message')
@include('backlight')
@include('scripts')
</body>
</html>
@endsection
