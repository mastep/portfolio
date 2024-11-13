@extends('head')
@section('title', 'Корпоративный портал для ChimElements Group')
@section('meta-description', 'Рассказываем о интернет-магазине для ChimElements Group')
@section('meta-keywords', 'корпоративный портал, разработка корпоративного портала')
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
                    <h1 class="bringer-post-title" data-appear="fade-up" data-unload="fade-left">Корпоративный портал</h1>
                </div>
                <div class="stg-col-6 stg-tp-col-9 stg-tp-offset-3 align-right" data-appear="fade-up" data-delay="100" data-unload="fade-right">
                    <p>Мы разработали дизайн-шаблон корпоративного портала для крупного химического холдинга. Проект сочетает в себе современный стиль, удобство использования и высокую функциональность. Современный и лаконичный дизайн. Мы использовали чистые линии, минималистичные элементы и нейтральные цвета, чтобы создать стильный и профессиональный образ.</p>
                </div>
            </div>

            <div class="tp-align-right stg-bottom-gap">
                <a target="_blank" href="https://www.figma.com/proto/lgKys6u1oXUe8Mht7yPOFG/Scrolling-Animation-(Community)?node-id=1-161&starting-point-node-id=1%3A161&t=tBiRh2UrZ0ucJiS3-1" class="bringer-icon-link">
                    <div class="bringer-icon-wrap">
                        <i class="bringer-icon bringer-icon-explore"></i>
                    </div>
                    <div class="bringer-icon-link-content">
                        <h6>
                            Пощёлкайте
                            <br>
                            прототип
                        </h6>
                        <span class="bringer-label">на Figma.com</span>
                    </div>
                </a><!-- .bringer-icon-link -->
            </div>

            <!-- Slider -->
            <div class="bringer-slider-wrapper stg-bottom-gap" data-appear="fade-up" data-delay="200" data-unload="fade-up">
                <div class="swiper bringer-slider" data-autoplay="2000" data-duration="800" data-effect="slide">
                    <div class="swiper-wrapper">
                        <!-- Slider Item -->
                        <div class="swiper-slide">
                            <img src="img/portfolio/portfolio02/slider01.jpg" alt="Curology" width="1920" height="1080">
                        </div>
                        <!-- Slider Item -->
                        <div class="swiper-slide">
                            <img src="img/portfolio/portfolio02/slider02.jpg" alt="Curology" width="1920" height="1080">
                        </div>
                        <!-- Slider Item -->
                        <div class="swiper-slide">
                            <img src="img/portfolio/portfolio02/slider03.jpg" alt="Curology" width="1920" height="1080">
                        </div>
                        <!-- Slider Item -->
                        <div class="swiper-slide">
                            <img src="img/portfolio/portfolio02/slider04.jpg" alt="Curology" width="1920" height="1080">
                        </div>
                        <!-- Slider Item -->
                        <div class="swiper-slide">
                            <img src="img/portfolio/portfolio02/slider05.jpg" alt="Curology" width="1920" height="1080">
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
                    Client: <span>ChimElements Group</span>
                </div>
                <div class="bringer-meta">
                    Service: <span>Corporate portal</span>
                </div>
                <div class="bringer-meta">
                    Date: <span>May '2024</span>
                </div>
            </div><!-- .bringer-hero-info-line -->
        </section>

        <section data-padding="top" class="backlight-top">
            <div class="stg-row stg-bottom-gap-l">
                <div class="stg-col-6 stg-tp-bottom-gap" data-appear="fade-right" data-unload="fade-left">
                    <h2>Внутренние коммуникации</h2>
                </div>
                <div class="stg-col-6 stg-tp-col-10 stg-tp-offset-2" data-appear="fade-left" data-unload="fade-right">
                    <p class="bringer-large-text">Корпоративный портал является ключевым элементом внутренней коммуникации в компании, и новости играют в нём важную роль. Они информируют сотрудников о последних событиях и достижениях. Поэтому информационный блок занял центральную часть проекта, а превью фото создает настроение главной страницы при каждом добавлении новой новости.</p>
                    <p class="bringer-large-text">Вовлечение аудитории: Возможность комментирования новостей, выражать эмоции ♥ и участия в обсуждениях способствует укреплению внутренних связей и созданию активной корпоративной культуры.</p>
                </div>
            </div>
            <div class="stg-row" data-appear="fade-up" data-unload="zoom-out">
                <div class="stg-col-9">
                    <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio02/image03.jpg" alt="Curology" width="1920" height="1080">
                </div>
            </div>
        </section>
        <!-- Section: The Challenge -->
        <section data-padding="top" class="backlight-top">
            <div class="stg-row stg-bottom-gap-l">
                <div class="stg-col-6 stg-tp-bottom-gap" data-appear="fade-right" data-unload="fade-left">
                    <h2>Важные слова</h2>
                </div>
                <div class="stg-col-6 stg-tp-col-10 stg-tp-offset-2" data-appear="fade-left" data-unload="fade-right">
                    <p class="bringer-large-text">Важность приветственного слова в корпоративной культуре и межличностном общении невозможно переоценить. Приветствие играет ключевую роль в установлении первого впечатления, создании позитивной атмосферы и укреплении межличностных отношений. Поэтому мы проработали привественный блок от СЕО в видео формате.</p>
                </div>
            </div>
            <div class="stg-row" data-appear="fade-up" data-unload="zoom-out">
                <div class="stg-col-6 stg-offset-3 stg-tp-col-8 stg-tp-offset-2">
                    <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio02/image02.jpg" alt="Curology" width="1200" height="1200">
                </div>
            </div>
        </section>

        <!-- Section: Our Approach -->
        <section data-padding="top">
            <div class="stg-row stg-bottom-gap">
                <div class="stg-col-6">
                    <h2 data-appear="fade-up" data-unload="fade-left">Новые сотрудники</h2>
                </div>
            </div>
            <div class="stg-row stg-bottom-gap-l" data-appear="fade-up" data-delay="100" data-unload="fade-right">
                <div class="stg-col-9 stg-offset-3 stg-tp-col-10 stg-tp-offset-2">
                    <p class="bringer-large-text">Блок "Новые сотрудники" позволяет познакомиться с новыми сотрудниками, понять их должности и задачи. Это способствует повышению эффективности командной работы, ее сплоченности и скорости решения задач.</p>
                </div>
            </div>
            <div class="stg-row" data-appear="fade-left" data-unload="fade-left">
                <div class="stg-col-9">
                    <video class="data-poster" autoplay loop muted>
                        <source src="./video/project-corportal.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </section>

        <!-- Section: The Solution -->
        <section data-padding="top">
            <div class="stg-row stg-bottom-gap-l">
                <div class="stg-col-6 stg-tp-bottom-gap" data-appear="fade-right" data-unload="fade-left">
                    <h2>Быстрее на 17%</h2>
                </div>
                <div class="stg-col-6 stg-tp-col-10 stg-tp-offset-2" data-appear="fade-left" data-unload="fade-right">
                    <p class="bringer-large-text">Благодаря единому пространству для поиска информации и подачи заявок на услуги, сотрудники могут быстрее получать необходимую помощь и решать рабочие вопросы, что приводит к снижению временных затрат на повторяющиеся задачи до 17%.
                    </p>
                </div>
            </div>
            <!-- Gallery -->
            <div class="bringer-grid-3cols" data-stagger-appear="fade-up" data-stagger-unload="fade-left">
                <div>
                    <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio02/image04.jpg" alt="Curology" data-speed="0.95" data-m-speed="1" width="800" height="1200">
                </div>
                <div>
                    <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio02/image05.jpg" alt="Curology" width="800" height="1200">
                </div>
                <div>
                    <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio02/image06.jpg" alt="Curology" data-speed="1.05" data-m-speed="1" width="800" height="1200">
                </div>
            </div>
        </section>

        <!-- Section: Results & Impact -->
        <section>
            <div class="stg-row stg-bottom-gap">
                <div class="stg-col-6" data-appear="fade-up" data-unload="fade-left">
                    <h2>Повышение имиджа</h2>
                </div>
            </div>
            <div class="stg-row" data-appear="fade-up" data-delay="100" data-unload="fade-right">
                <div class="stg-col-9 stg-offset-3 stg-tp-col-10 stg-tp-offset-2">
                    <p class="bringer-large-text">Наш дизайн-шаблон является идеальным решением для создания современного и эффективного корпоративного портала, который будет способствовать повышению имиджа компании и улучшению взаимодействия с клиентами и партнёрами.</p>
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
