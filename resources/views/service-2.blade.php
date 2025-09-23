@extends('head')
@section('title', 'Разработка интернет-магазина')
@section('meta-description', 'Разработаем интернет-магазин недорого в кратчайшие сроки.')
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
        <!-- Section: Intro -->
        <section>
            <div class="stg-row stg-large-gap stg-tp-normal-gap stg-tp-column-reverse">
                <div class="stg-col-6 stg-vertical-space-between" data-unload="fade-left">
                    <div class="stg-tp-bottom-gap">
                        <h1 class="bringer-page-title" data-split-appear="fade-up">Интернет магазин</h1>
                        <p class="bringer-large-text" data-appear="fade-right" data-delay="100">Интернет магазин или E-commerce — является дополнительным каналом сбыта оффлайнового магазина или же создается как отдельный флагманский сайт, который предлагает товары для покупки через интернет. Он позволяет пользователям формировать заказы, выбирать способы оплаты и доставки, не выходя из дома или офиса.</p>
                        <p class="bringer-large-text bringer-tp-normal-text" data-appear="fade-right" data-delay="200">Процесс покупки происходит онлайн, что делает его удобным и доступным для широкой аудитории. Интернет-магазины позволяют клиентам просматривать ассортимент продукции, читать описания товаров, сравнивать цены и характеристики, а также использовать функцию поиска и умные фильтры для нахождения конкретных моделей или брендов.</p>
                        @php
                        /*
                        <div class="bringer-price-card-footer">
                            <span class="bringer-label">Стоимость от</span>
                            <div class="bringer-price">₽450 000</div>
                        </div>
                        */
                        @endphp
                    </div>
                    <div class="tp-align-right">
                        <a href="/project-art-of-tea" class="bringer-icon-link">
                            <div class="bringer-icon-wrap">
                                <i class="bringer-icon bringer-icon-explore"></i>
                            </div>
                            <div class="bringer-icon-link-content">
                                <h6>
                                    Посмотрите
                                    <br>
                                    наш e-com
                                </h6>
                                <span class="bringer-label">для Art of Tea</span>
                            </div>
                        </a><!-- .bringer-icon-link -->
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-bottom-gap-l" data-appear="fade-left" data-unload="fade-right">
                    <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details2.jpg" alt="Brainding" width="800" height="1200">
                </div>
            </div>
        </section>

        <!-- Section: Details -->
        <section class="backlight-both">
            <!-- Section Title -->
            <div class="stg-row stg-bottom-gap-l">
                <div class="stg-col-7">
                    <h2 data-split-appear="fade-up" data-unload="fade-up">Преимущества интернет-магазина</h2>
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
                    <h4>Низкий порог входа</h4>
                    <p>Создание интернет-магазина требует относительно небольших начальных инвестиций по сравнению с открытием традиционного магазина. Это делает его доступным для малого и среднего бизнеса.</p>
                </div>
            </div>
            <!-- Details 02 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l" data-unload="fade-right">
                <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details025.jpg" alt="Branding 02" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                    <span class="bringer-label">преимущество 02</span>
                    <h4>Гибкость</h4>
                    <p>Возможность легко вносить изменения в дизайн, функционал и ассортимент товаров, что позволяет быстро адаптироваться к меняющимся потребностям рынка и предпочтениям клиентов.</p>
                </div>
                <div class="stg-col-3"><!-- Empty Column --></div>
            </div>
            <!-- Details 03 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details023.jpg" alt="Branding 03" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                    <span class="bringer-label">преимущество 03</span>
                    <h4>Круглосуточный доступ</h4>
                    <p>Интернет-магазины работают 24/7, что позволяет покупателям совершать покупки в удобное для них время.</p>
                </div>
            </div>
            <!-- Details 04 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l" data-unload="fade-right">
                <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details024.jpg" alt="Branding 04" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                    <span class="bringer-label">преимущество 04</span>
                    <h4>Поиск / умные фильтры</h4>
                    <p>Поиск и умные фильтры позволяют посетителям магазина быстро находить нужные товары, не просматривая весь каталог. Это повышает удобство использования сайта и увеличивает вероятность совершения покупки. Увеличение конверсии: Эффективная фильтрация товаров сокращает время, затрачиваемое на поиск, что может привести к увеличению количества покупок. Посетители, которые находят то, что им нужно быстрее, с большей вероятностью совершат покупку.</p>
                </div>
                <div class="stg-col-3"><!-- Empty Column --></div>
            </div>
            <!-- Details 05 Row -->
            <div class="stg-row stg-valign-middle" data-unload="fade-left">
                <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details022.jpg" alt="Branding 04" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                    <span class="bringer-label">преимущество 05</span>
                    <h4>Быстрый запуск</h4>
                    <p>Интернет-магазин можно запустить без необходимости аренды помещения, закупки оборудования и длительного процесса подготовки, что снижает риски и расходы на старте.</p></div>
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
