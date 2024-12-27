@extends('head')
@section('title', 'Сайт визитка для Vasiliev Groove')
@section('meta-description', 'Рассказываем о cайте визитке для Vasiliev Groove')
@section('meta-keywords', 'сайт визитка, разработка сайт визитки')
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

        <div class="stg-row stg-no-gap stg-top-gap"  style="background-color:#fff; overflow: hidden; border-radius: 2em; margin-top:10%">
            <div class="stg-col-8">
                <div data-appear="fade-right" data-unload="fade-left">
                    <h1 style="color: #000; margin: 5% 10% 0 10%">Сайт визитка<br>Vasiliev Groove</h1>
                    <p style="color: #888; margin: 3% 10% 0 10%">
                        Срок реализации: 7 дней
                        <br>
                        Технологии: Bootstrap, Html5, Javascript, CSS
                        <br>
                        <br>
                        Проект разработан на современном фрейморке Bootstrap v5.3 c адаптивным html-шаблоном. Это позволило получить промо сайт с большим количеством фото и видео материалами, которые корректно отображаются на всех электронных устройствах: ноутбуки, планшеты и смартфоны.
                        <br>
                        <br>
                    <div class="stg-no-gap" style="padding-left: 10%">
                        <a href="https://vgroove.ru/afisha/event1.html#ticket" target="_blank" class="bringer-icon-link">
                            <div class="bringer-icon-wrap" style="background-color: #000;">
                                <i class="bringer-icon bringer-icon-explore"></i>
                            </div>
                            <div class="bringer-icon-link-content">
                                <h6 style="color: #000">Открыть
                                </h6>
                                <span class="bringer-label" style="color:#888">vgroove.ru</span>
                            </div>
                        </a><!-- .bringer-icon-link -->
                    </div>
                    </p>

                </div>
            </div>
            <div class="stg-col-3">
                <video data-video-src="video/project_vasiliev_groove_landing/mobile.mp4"  style="border-radius:unset;  padding:0;" playsinline muted reverce autoplay></video>
            </div>
        </div>


        <!-- Section: Page Title -->
        <section>

            <div class="tp-align-right stg-bottom-gap" style="text-align: right">
                <a href="/landing-page" class="bringer-icon-link">
                    <div class="bringer-icon-wrap">
                        <i class="bringer-icon bringer-icon-explore"></i>
                    </div>
                    <div class="bringer-icon-link-content">
                        <h6>
                            Что такое
                            <br>
                            сайт визитка?
                        </h6>
                        <span class="bringer-label">подробности здесь</span>
                    </div>
                </a><!-- .bringer-icon-link -->
            </div>




            <!-- Meta -->
            <div class="bringer-hero-info-line" data-stagger-appear="fade-up" data-delay="200" data-stager-delay="100" data-unload="fade-up">

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
