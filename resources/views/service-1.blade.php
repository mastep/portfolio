@extends('head')
@section('title', 'Создать сайт визитку')
@section('meta-description', 'Создать сайт визитку. Что такое landing-page')
@section('meta-keywords', 'Создать сайт-визитку, landing-page, мини сайт, портфолио')
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
                        <h1 class="bringer-page-title" data-split-appear="fade-up">Сайт визитка</h1>
                        <p class="bringer-large-text" data-appear="fade-right" data-delay="100">Сайт-визитка или Landing Page — это небольшой веб-сайт, содержащий основную информацию о компании и предоставляемых услугах. Сайт-визитка обычно состоит из нескольких страниц с информацией о компании, контактных данных, а также, возможно, с отзывами клиентов и примерами работ.</p>
                        <p class="bringer-large-text bringer-tp-normal-text" data-appear="fade-right" data-delay="200">Такие сайты используются для первичного ознакомления потенциальных клиентов с компанией и её предложениями.</p>
                        @php
                        /*
                        <div class="bringer-price-card-footer">
                            <span class="bringer-label">Стоимость от</span>
                            <div class="bringer-price">₽35 000</div>
                        </div>*/
                        @endphp
                    </div>
                    <div class="tp-align-right">
                        <a href="/project-landing-page" class="bringer-icon-link">
                            <div class="bringer-icon-wrap">
                                <i class="bringer-icon bringer-icon-explore"></i>
                            </div>
                            <div class="bringer-icon-link-content">
                                <h6>
                                    Посмотрите
                                    <br>
                                    наш сайт-визитку
                                </h6>
                                <span class="bringer-label">для Burton.team</span>
                            </div>
                        </a><!-- .bringer-icon-link -->
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-bottom-gap-l" data-appear="fade-left" data-unload="fade-right">
                    <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details.jpg" alt="Brainding" width="800" height="1200">
                </div>
            </div>
        </section>

        <!-- Section: Details -->
        <section class="backlight-both">
            <!-- Section Title -->
            <div class="stg-row stg-bottom-gap-l">
                <div class="stg-col-7">
                    <h2 data-split-appear="fade-up" data-unload="fade-up">Преимущества сайта-визитки</h2>
                </div>
                <div class="stg-col-5"></div>
            </div>
            <!-- Details 01 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                    <div class="bringer-parallax-media">
                            <video width="960" height="960" autoplay loop muted>
                                <source src="./video/service01.mp4?v1" type="video/mp4">
                            </video>
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                    <span class="bringer-label">преимущество 01</span>
                    <h4>Выгодная цена</h4>
                    <p>Разработка сайта-визитки стоит значительно дешевле за счет отсутствия сложной навигации, тяжеловесных баз данных, форм регистраций и т.д.</p>
                </div>
            </div>
            <!-- Details 02 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l" data-unload="fade-right">
                <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details02.jpg" alt="Branding 02" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                    <span class="bringer-label">преимущество 02</span>
                    <h4>Cкорость запуска</h4>
                    <p>Качественные сайты-визитки под ключ создаются за 5–7 дней. Размещаются в любых хостинг-центрах.</p>
                </div>
                <div class="stg-col-3"><!-- Empty Column --></div>
            </div>
            <!-- Details 03 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details03.jpg" alt="Branding 03" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                    <span class="bringer-label">преимущество 03</span>
                    <h4>Готовые шаблоны</h4>
                    <p>Готовые шаблоны позволяют существенно экономить время на этапе html-верстки проекта. Достаточно просто обновить информационные блоки в готовых шаблонах.</p>
                </div>
            </div>
            <!-- Details 04 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l" data-unload="fade-right">
                <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details04.jpg" alt="Branding 04" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                    <span class="bringer-label">преимущество 04</span>
                    <h4>Простота использования</h4>
                    <p>Вся важная информация изложена на одной или нескольких страницах. Это позволяет клиенту вносить информацию самостоятельно без превличения программистов не боясь привести проект в нерабочее состояние.</p>
                </div>
                <div class="stg-col-3"><!-- Empty Column --></div>
            </div>
            <!-- Details 05 Row -->
            <div class="stg-row stg-valign-middle" data-unload="fade-left">
                <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                    <div class="bringer-parallax-media">
                        <video width="960" height="960" autoplay loop muted>
                            <source src="./video/service05.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                    <span class="bringer-label">преимущество 05</span>
                    <h4>Идеальный вариант для старта</h4>
                    <p>Сайт-визитка подходит для начинающих компаний, позволяя быстро понять основные тенденции и запросы клиентов, так сказать проверить концепт-идею и если она успешна, вывести сайт на новый уровень, разработав новую версию с большим функционалом для своих пользователей.</p>
                </div>
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
