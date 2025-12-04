@extends('head')
@section('title', 'IT - шеринг (sharing)')
@section('meta-description', 'Услуги веб-специалиста')
@section('meta-keywords', 'айти, шеринг, it, sharing')
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
                        <h1 class="bringer-page-title" data-split-appear="fade-up">IT - шеринг</h1>
                        <p class="bringer-large-text" data-appear="fade-right" data-delay="100">модель, при которой компании арендуют IT-специалистов или целые команды на определенный период времени вместо того, чтобы нанимать их в штат. Эта модель стала популярной в последние годы, особенно в условиях растущего дефицита IT-кадров и оптимизации расходов.</p>
                        <p class="bringer-large-text bringer-tp-normal-text" data-appear="fade-right" data-delay="200">IT - шеринг напоминает каршеринг ( "Сar - шеринг"). Когда Вы не покупаете автомобиль, а пользуетесь его арендой.</p>
                        @php
                        /*
                        <div class="bringer-price-card-footer">
                            <span class="bringer-label">Стоимость</span>
                            <div class="bringer-price">₽ 4800 / час.</div>
                        </div>*/
                        @endphp
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-bottom-gap-l" data-appear="fade-left" data-unload="fade-right">
                    <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details4.png" alt="Brainding" width="800" height="1200">
                </div>
            </div>
        </section>

        <!-- Section: Details -->
        <section class="backlight-both">
            <!-- Section Title -->
            <div class="stg-row stg-bottom-gap-l">
                <div class="stg-col-7">
                    <h2 data-split-appear="fade-up" data-unload="fade-up">Преимущества IT - шеринга</h2>
                </div>
                <div class="stg-col-5"></div>
            </div>
            <!-- Details 01 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details040.png" alt="Branding 03" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                    <span class="bringer-label">преимущество 01</span>
                    <h4>Скорость</h4>
                    <p>Возможность быстро привлекать и освобождать IT-ресурсы в зависимости от текущих потребностей бизнеса, что особенно важно в условиях быстро меняющегося рынка.</p>
                </div>
            </div>
            <!-- Details 02 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l" data-unload="fade-right">
                <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details041.png" alt="Branding 02" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                    <span class="bringer-label">преимущество 02</span>
                    <h4>Плата только за время</h4>
                    <p>Компании могут значительно сократить расходы на IT-персонал, так как они платят только за время использования специалистов, а не за их постоянное содержание.</p>
                </div>
                <div class="stg-col-3"><!-- Empty Column --></div>
            </div>
            <!-- Details 03 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details042.png" alt="Branding 03" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                    <span class="bringer-label">преимущество 03</span>
                    <h4>Экономия 30%</h4>
                    <p>Аутстаффинг позволяет компаниям экономить до 30% расходов на IT-персонал. Это достигается за счет отсутствия необходимости нанимать, развивать и управлять персоналом, а также за счет налоговых льгот и отсутствия расходов на офис.</p>
                </div>
            </div>
            <!-- Details 04 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l" data-unload="fade-right">
                <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details045.png" alt="Branding 04" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                    <span class="bringer-label">преимущество 04</span>
                    <h4>Прозрачность</h4>
                    <p>Прозрачность достигается за счет того, что Вы ставите задачу. Мы ее анализируем и оцениванием в человеко-часах. Согласовываем с Вами и сразу же приступаем к ее выполнению.</p>
                </div>
                <div class="stg-col-3"><!-- Empty Column --></div>
            </div>
            <!-- Details 05 Row -->
            <div class="stg-row stg-valign-middle" data-unload="fade-left">
                <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-details044.png" alt="Branding 04" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                    <span class="bringer-label">преимущество 05</span>
                    <h4>Использование опыта экспертов</h4>
                    <p>Возможность использовать высококвалифицированных специалистов, которые могут быть труднодоступны на рынке труда.</p></div>
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
