@include('head')
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
                    <h1 class="bringer-post-title" data-appear="fade-up" data-unload="fade-left">Сайт визитка Burton.Тим</h1>
                </div>
                <div class="stg-col-6 stg-tp-col-9 stg-tp-offset-3 align-right" data-appear="fade-up" data-delay="100" data-unload="fade-right">
                    <p>Здесь мы расскажем как создавали свою резиденцию в сети Интернет. Почему наш проект является более сложной версией, чем просто сайт визитка.  Покажем кто скрывается в нашем логотипе. Как происходит фоновая загрузка контента, чем она отличается от стандартной. Как выбирали название и домен. Почему не боимся взлома сайта. Как просходит обновление контента и многое другое.</p>
                </div>
            </div>

            <div class="tp-align-right stg-bottom-gap">
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

            <!-- Gallery -->
            <div class="bringer-grid-3cols" data-stagger-appear="fade-up" data-stagger-unload="fade-left">
                <div>
                    <video data-video-src="video/project-video2.mp4"  width="800" height="1200" playsinline muted loop autoplay></video>
                </div>
                <div>
                    <video data-video-src="video/project-video3.mp4"  width="800" height="1200" playsinline muted loop autoplay></video>
                </div>
                <div>
                    <video data-video-src="video/project-video4.mp4"  width="800" height="1200" playsinline muted loop autoplay></video>
                </div>
            </div>

            <!-- Meta -->
            <div class="bringer-hero-info-line" data-stagger-appear="fade-up" data-delay="200" data-stager-delay="100" data-unload="fade-up">
                <div class="bringer-meta">
                    Мы <span> очень чувствуем цвета, оттенки...</span>
                </div>
                <div class="bringer-meta">
                    Мы <span>чётко контролируем сроки</span>
                </div>
                <div class="bringer-meta">
                    Мы <span>применяем новые технологии</span>
                </div>
            </div><!-- .bringer-hero-info-line -->
        </section>

        <section data-padding="top" class="backlight-top">
            <div class="stg-row stg-bottom-gap-l">
                <div class="stg-col-6 stg-tp-bottom-gap" data-appear="fade-right" data-unload="fade-left">
                    <h2>Burton.Тим<br>как много в этом звуке</h2>
                </div>
                <div class="stg-col-6 stg-tp-col-10 stg-tp-offset-2" data-appear="fade-left" data-unload="fade-right">
                    <p class="bringer-large-text">Burton.team решили, что именно так будет называться наш проект, но выбирали очень долго. Проработывали различные имена, например: it-love.ru, top-site.su, 1-site.su, site-prod.ru,
                        site-fix.ru,
                        fix-site.ru,
                        30yumsters.ru,
                        view-code.ru,
                        edit1.ru,
                        off-record.ru и т.д. </p>
                    <p class="bringer-large-text"> Выбор доменного имени играет ключевую роль в поисковой оптимизации и продвижении сайта. Правильно подобранное доменное имя может значительно улучшить видимость и запонимаемость сайта в поисковых системах и привлечь большую аудиторию.</p>
                </div>
            </div>
            <div class="stg-row" data-appear="fade-up" data-unload="zoom-out">
                <div class="stg-col-9">
                    <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio03/image04.jpg" alt="Curology" width="1920" height="1080">
                </div>
            </div>
        </section>
        <!-- Section: The Challenge -->
        <section data-padding="top" class="backlight-top">
            <div class="stg-row stg-bottom-gap-l">
                <div class="stg-col-6 stg-tp-bottom-gap" data-appear="fade-right" data-unload="fade-left">
                    <h2>107 commit's</h2>
                </div>
                <div class="stg-col-6 stg-tp-col-10 stg-tp-offset-2" data-appear="fade-left" data-unload="fade-right">
                    <p class="bringer-large-text">Создавая наш проект, мы решили реализовывать его как приложение. Разворачивая его при каждом коммите!</p>
                    <p class="bringer-large-text">Это означает, что при очепатке мы должны сделать правку, зафиксировать ее в журнале изменений (Git) и выкатить обновление на сайт.</p>
                    <p class="bringer-large-text">Это позволяет развернуть проект за 2 минуты на любом хостинге и не бояться вывода сайта из строя злоумышленниками</p>
                </div>
            </div>
            <div class="stg-row" data-appear="fade-up" data-unload="zoom-out">
                <div class="stg-col-8 stg-offset-4 stg-tp-col-8 stg-tp-offset-2">
                    <video data-video-src="video/project-video5.mp4"  width="1920" playsinline muted loop autoplay></video>
                </div>
            </div>
        </section>

        <!-- Section: Our Approach -->
        <section data-padding="top">
            <div class="stg-row stg-bottom-gap">
                <div class="stg-col-6">
                    <h2 data-appear="fade-up" data-unload="fade-left">Загрузка 100%</h2>
                </div>
            </div>
            <div class="stg-row stg-bottom-gap-l" data-appear="fade-up" data-delay="100" data-unload="fade-right">
                <div class="stg-col-9 stg-offset-3 stg-tp-col-10 stg-tp-offset-2">
                    <p class="bringer-large-text">Ещё у нас необычная загрузка тяжёлого и конфиденциального контента. Подгрузка данных после загрузки страницы, известная как AJAX (асинхронный JavaScript и XML), является мощным инструментом для улучшения взаимодействия с пользователем и повышения производительности веб-приложений.</p>
                    <p class="bringer-large-text">Именно такую технологию мы применяем для загрузки видео материалов и контактных данных. Подгрузка видео таким образом повышает скорость загрузки всего сайта, а подгрузка контактов позволяет защититься от роботов сборщиков.</p>
                </div>
            </div>
            <div class="stg-row" data-appear="fade-left" data-unload="fade-left">
                <div class="stg-col-9">
                    <video class="data-poster" autoplay loop muted>
                        <source src="./video/blackberry.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </section>

        <!-- Section: The Solution -->
        <section data-padding="top">
            <div class="stg-row stg-bottom-gap-l">
                <div class="stg-col-6 stg-tp-bottom-gap" data-appear="fade-right" data-unload="fade-left">
                    <h2>Laravel<br>под капотом</h2>
                </div>
                <div class="stg-col-6 stg-tp-col-10 stg-tp-offset-2" data-appear="fade-left" data-unload="fade-right">
                    <p class="bringer-large-text">Проект реализован на фреймворке Laravel. Это избыточно для сайта визитки, но мы решили сделать упор на развитие. Laravel предлагает широкий спектр функциональных возможностей для быстрой разработки веб-приложений и включает в себя механизмы для защиты от SQL-инъекций, что является критически важным аспектом для обеспечения безопасности данных пользователей.</p>
                </div>
            </div>
            <!-- Slider -->
            <div class="bringer-slider-wrapper stg-bottom-gap" data-appear="fade-up" data-delay="200" data-unload="fade-up">
                <div class="swiper bringer-slider" data-autoplay="2000" data-duration="800" data-effect="slide">
                    <div class="swiper-wrapper">
                        <!-- Slider Item -->
                        <div class="swiper-slide">
                            <video data-video-src="video/project-video1.mp4" width="1920" height="1080" playsinline muted loop autoplay></video>
                        </div>
                        <!-- Slider Item -->
                        <div class="swiper-slide">
                            <div style="text-align: left; padding:10%;">
                                <h2 class="stg-top-gap">Burton.team<br>сайт портфолио<br>реализованных проектов</h2>
                            </div>
                        </div>
                        <!-- Slider Item -->
                        <div class="swiper-slide">
                            <img src="img/portfolio/portfolio03/slider01.jpg" alt="Curology" width="1920" height="1080">
                        </div>
                        <!-- Slider Item -->
                        <div class="swiper-slide">
                            <img src="img/portfolio/portfolio03/slider02.jpg" alt="Curology" width="1920" height="1080">
                        </div>
                        <!-- Slider Item -->
                        <div class="swiper-slide">
                            <div style="text-align: left; padding:10%;">
                                <h2 class="stg-top-gap">Создаем сложные интернет магазины с интеграциями с сервисами доставки</h2>
                            </div>
                        </div>
                        <!-- Slider Item -->
                        <div class="swiper-slide">
                            <video  data-video-src="video/maproad.mp4" width="1920" height="1080"  playsinline muted loop autoplay></video>
                        </div>
                        <!-- Slider Item -->
                        <div class="swiper-slide">
                            <img src="img/portfolio/portfolio03/slider03.jpg" alt="Curology" width="1920" height="1080">
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

        </section>

        <!-- Section: Results & Impact -->
        <section>
            <div class="stg-row stg-bottom-gap">
                <div class="stg-col-6" data-appear="fade-up" data-unload="fade-left">
                    <h2>Наш логотип с пасхалкой</h2>
                </div>
            </div>
            <div class="stg-row" data-appear="fade-up" data-delay="100" data-unload="fade-right">
                <div class="stg-col-9 stg-offset-3 stg-tp-col-10 stg-tp-offset-2">
                    <style>
                        #bringer-header.light_color{
                            background-color:#fff;
                        }
                    </style>
                    <p class="bringer-large-text">Логотип был создан AI (искусственным интеллектом), скрывающий в себе пасхалку от Тима Бёртана.</p>
                    <p class="bringer-large-text">Чтобы посмотреть кто именно скрывается в лого нажмите <a href="#" onClick="$('#bringer-header').toggleClass('light_color')">здесь</a> и посмотрите на логотип.</p>
                    <p class="bringer-large-text">Мы обязательно будем дополнять информацию о нашем проекте как только реализуем какую-нибудь интересную фичу. Следите за обнолвениями.<br>А пока можете заказать себе <a href="/landing-page">сайт-визитку</a>.<br><br>Спасибо и до встречи!</p>
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
