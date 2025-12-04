@extends('head')
@section('title', 'Разработка корпоративного портала')
@section('meta-description', 'Разработка корпоративного портала на платформе 1С-Битрикс')
@section('meta-keywords', 'корпоративный портал, crm')
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
                        <h1 class="bringer-page-title" data-split-appear="fade-up"><nobr>Корпоративные</nobr> порталы</h1>
                        <p class="bringer-large-text" data-appear="fade-right" data-delay="100">Корпоративный портал — это веб-платформа, обеспечивающая централизованный доступ к информации, инструментам и знаниям для всех сотрудников компании. Мы запускаем корпоративные порталы на платформе <a href="https://www.1c-bitrix.ru/products/bitrix24/" target="_blank">Битрикс24</a>.</p>
                        <p class="bringer-large-text bringer-tp-normal-text" data-appear="fade-right" data-delay="200">Он предназначен для автоматизации внутренних процессов взаимодействия компании с работниками и улучшения внутренней коммуникации.</p>
                        @php
                        /*
                        <div class="bringer-price-card-footer">
                            <span class="bringer-label">Стоимость от</span>
                            <div class="bringer-price">₽450 000</div>
                        </div>*/
                        @endphp
                    </div>
                    @include("link-content",['link_title1'=>'Посмотрите кейс<br>корпоративного портала', 'link_title2'=>'на Figma.com', 'link_href'=>'https://www.figma.com/proto/lgKys6u1oXUe8Mht7yPOFG/Scrolling-Animation--Community-?node-id=1-161&starting-point-node-id=1%3A161&t=tBiRh2UrZ0ucJiS3-1', 'link_target'=>'_blank'])
                </div>
                <div class="stg-col-6 stg-tp-bottom-gap-l" data-appear="fade-left" data-unload="fade-right">
                    <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details3.jpg" alt="Brainding" width="800" height="1200">
                </div>
            </div>
        </section>

        <!-- Section: Details -->
        <section class="backlight-both">
            <!-- Section Title -->
            <div class="stg-row stg-bottom-gap-l">
                <div class="stg-col-7">
                    <h2 data-split-appear="fade-up" data-unload="fade-up">Преимущества корпоративного портала</h2>
                </div>
                <div class="stg-col-5"></div>
            </div>
            <!-- Details 01 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details033.jpg" alt="Branding 03" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                    <span class="bringer-label">преимущество 01</span>
                    <h4>Взаимодействие</h4>
                    <p>Эффективное взаимодействие между сотрудниками благодаря доступу к информации с любого устройства.</p>
                </div>
            </div>
            <!-- Details 02 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l" data-unload="fade-right">
                <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details031.jpg" alt="Branding 02" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                    <span class="bringer-label">преимущество 02</span>
                    <h4>Улучшение коммуникации</h4>
                    <p>Улучшение внутренней коммуникации с помощью встроенных мессенджеров и чатов.</p>
                </div>
                <div class="stg-col-3"><!-- Empty Column --></div>
            </div>
            <!-- Details 03 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details032.jpg" alt="Branding 03" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                    <span class="bringer-label">преимущество 03</span>
                    <h4>Совместная работа</h4>
                    <p>Организация совместной работы над документами и проектами в реальном времени.</p>
                </div>
            </div>
            <!-- Details 04 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l" data-unload="fade-right">
                <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details030.jpg" alt="Branding 04" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                    <span class="bringer-label">преимущество 04</span>
                    <h4>Повышение эффективности</h4>
                    <p>Ускорение решения задач и повышение эффективности работы благодаря централизованной платформе.</p>
                </div>
                <div class="stg-col-3"><!-- Empty Column --></div>
            </div>
            <!-- Details 05 Row -->
            <div class="stg-row stg-valign-middle" data-unload="fade-left">
                <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details034.jpg" alt="Branding 04" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                    <span class="bringer-label">преимущество 05</span>
                    <h4>База знаний</h4>
                    <p>Улучшение корпоративной культуры и развитие сотрудников через базу знаний и обучающие материалы.</p></div>
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
