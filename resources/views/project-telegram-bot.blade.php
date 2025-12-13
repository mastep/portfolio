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
                        <h1 class="bringer-post-title" data-appear="fade-up" data-unload="fade-left">Простота и легкость</h1>
                    </div>
                    <div class="stg-col-6 stg-tp-col-9 stg-tp-offset-3 align-right" data-appear="fade-up" data-delay="100" data-unload="fade-right">
                        <p>... именно  это главное правило балета! Только простота и легкость. Никаких мыслей о титанических усилиях и ежедневных тренировках, скрытых за кулисами сцены...</p>
                        <p>Далее мы расскажем при чем тут Telegram Bot...</p>
                    </div>
                </div>

                <!-- Slider -->
                <div class="bringer-slider-wrapper stg-bottom-gap" data-appear="fade-up" data-delay="200" data-unload="fade-up">
                    <div class="swiper bringer-slider" data-autoplay="12000" data-duration="300" data-effect="slide">
                        <div class="swiper-wrapper">
                            <!-- Slider Item -->
                            <div class="swiper-slide">
                                <img src="img/portfolio/portfolio-telegram-bot/main.jpg" alt="Telegram Bot Balet" width="1920" height="1080">
                            </div>
                            <!-- Slider Item -->
                            <div class="swiper-slide">
                                <img src="img/portfolio/portfolio-telegram-bot/main1.jpg" alt="Telegram Bot Balet" width="1920" height="1080">
                            </div>
                            <!-- Slider Item -->
                            <div class="swiper-slide">
                                <img src="img/portfolio/portfolio-telegram-bot/main22.png" alt="Telegram Bot Balet" width="1920" height="1080">
                            </div>
                            <!-- Slider Item -->
                            <div class="swiper-slide">
                                <img src="img/portfolio/portfolio-telegram-bot/main2.jpg" alt="Telegram Bot Balet" width="1920" height="1080">
                            </div>
                            <!-- Slider Item -->
                            <div class="swiper-slide">
                                <video src="./video/telegram-bot2.mp4" class="data-poster" loop muted autoplay playsinline></video>
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
                        Service: <span>Telegram Bot</span>
                    </div>
                    <div class="bringer-meta">
                        Date: <span>September '2025</span>
                    </div>
                </div><!-- .bringer-hero-info-line -->
            </section>

            <!-- Section: The Challenge -->
            <section data-padding="top" class="backlight-top">
                <div class="stg-row stg-bottom-gap-l">
                    <div class="stg-col-6 stg-tp-bottom-gap" data-appear="fade-right" data-unload="fade-left">
                        <h2>Большой танец технологий</h2>
                    </div>
                    <div class="stg-col-6 stg-tp-col-10 stg-tp-offset-2" data-appear="fade-left" data-unload="fade-right">
                        <p class="bringer-large-text">Наша команда подошла к разработке Telegram-бота как к постановке сложного, захватывающего танца. Каждый модуль, от обработчика команд до интеграции с внешними API, изначально представлял собой отдельного, независимого танцора, который разучивал свою партию в изоляции. Разрешите представить эти заслуженные имена: Laravel, Telegram, Kafka, Deep Seek.</p>
                    </div>
                </div>
            </section>
            <div class="bringer-hero-media-wrap bringer-masked-bottom-right bringer-masked-block stg-bottom-gap-l" data-appear="zoom-out" data-unload="zoom-out">
                <!-- Masked Media -->
                <div class="bringer-masked-media bringer-masked-media bringer-parallax-media">
                    <video src="./video/telegram-bot3.mp4" id="main_video" class="data-poster" loop muted autoplay playsinline></video>
                </div>
                <!-- Content -->
                <div class="bringer-masked-content at-bottom-right">
                    <a href="#page01" class="bringer-square-button" data-appear="fade-left">
                        <span class="bringer-icon bringer-icon-innovation"></span>
                    </a>
                </div>
            </div>




            <section class="backlight-both">
                <!-- Section Title -->
                <div class="stg-row stg-bottom-gap-l">
                    <div class="stg-col-7">
                        <h2 data-split-appear="fade-up" data-unload="fade-up"></h2>
                    </div>
                    <div class="stg-col-5"></div>
                </div>
                <!-- Details 01 Row -->
                <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                    <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                        <div class="bringer-parallax-media">
                            <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio-telegram-bot/image-4.jpg" alt="Telegram Bot 01" width="960" height="960">
                        </div>
                    </div>
                    <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                        <span class="bringer-label">Framework</span>
                        <h4>Laravel: Хореограф Управления</h4>
                        <p>
                            Мы использовали Laravel как центрального хореографа, чтобы задать четкий и предсказуемый паттерн движения данных. Он обеспечивает надежную структуру бэкенда, управляет состояниями сессий и координирует, куда и в какой момент должны быть переданы сообщения. Laravel гарантирует, что каждый запрос пользователя встречает отлаженную логику, а не хаос.</p>
                    </div>
                </div>
                <!-- Details 02 Row -->
                <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l" data-unload="fade-right">
                    <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                        <div class="bringer-parallax-media">
                            <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio-telegram-bot/image-3.jpg" alt="API 02" width="960" height="960">
                        </div>
                    </div>
                    <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                        <span class="bringer-label">Telegram API</span>
                        <h4>Telegram API: Зеркало Сцены</h4>
                        <p>Telegram API стало нашим зеркалом сцены, через которое пользователи видят результат выступления. Это интерфейс, который мы выбрали за его простоту и широкую аудиторию. Он позволил нам быстро наладить канал связи, получая мгновенный фидбэк и отправляя ответы.
                            /start"), предоставляя заранее подготовленную информацию без участия человека. Это обеспечивает круглосуточную поддержку и экономит время администраторов.</p>
                    </div>
                    <div class="stg-col-3"><!-- Empty Column --></div>
                </div>
                <!-- Details 03 Row -->
                <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                    <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                        <div class="bringer-parallax-media">
                            <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio-telegram-bot/image-2.jpg" alt="API 02" width="960" height="960">
                        </div>
                    </div>
                    <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                        <span class="bringer-label">Apache Kafka</span>
                        <h4>Kafka: Закулисная Механика</h4>
                        <p>Kafka была внедрена для управления потоком событий, как сложная закулисная механика, которая позволяет спектаклю идти без заминок. Когда пользователь просит сгенерировать что-то сложное (например, код или объемный текст), мы не заставляем его ждать. Laravel "отправляет сигнал" в Kafka, и процесс обработки уходит на другой, независимый поток. Эта асинхронность критически важна: она позволяет боту обрабатывать тысячи запросов одновременно, поддерживая безупречную отзывчивость.</p>
                    </div>
                </div>
                <!-- Details 04 Row -->
                <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l" data-unload="fade-right">
                    <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                        <div class="bringer-parallax-media">
                            <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio-telegram-bot/image-1.jpg" alt="API 02" width="960" height="960">
                        </div>
                    </div>
                    <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                        <span class="bringer-label">Artificial Intelligence</span>
                        <h4>DeepSeek: Сердце Интеллекта</h4>
                        <p>AI DeepSeek — это сердце нашего бота, его интеллект и душа. Мы применили эту модель, чтобы бот мог не просто отвечать по скрипту, а понимать контекст, генерировать код, вести осмысленный диалог и решать сложные задачи. DeepSeek привносит "искусство" в нашу систему, превращая набор технологий в полезного и умного собеседника.</p>
                    </div>
                    <div class="stg-col-3"><!-- Empty Column --></div>
                </div>
            </section>

            <section data-padding="top">
                <div class="stg-row stg-bottom-gap">
                    <div class="stg-col-6">
                        <h2 data-appear="fade-up" data-unload="fade-left"> Это просто балет какой-то</h2>
                    </div>
                </div>
                <div class="stg-row stg-bottom-gap-l" data-appear="fade-up" data-delay="100" data-unload="fade-right">
                    <div class="stg-col-9 stg-offset-3 stg-tp-col-10 stg-tp-offset-2">
                        <p class="bringer-large-text">Истинное волшебство началось на этапе их сведения: мы потратили бесчисленные часы на отладку их взаимодействия, синхронизируя каждый шаг и каждое движение данных, чтобы исключить фальшь и рассинхрон. В результате этого кропотливого процесса переплетение систем превратилось в единый, грациозный балет.</p>
                    </div>
                </div>
                <div class="stg-row" data-appear="fade-left" data-unload="fade-left">
                    <div class="stg-col-9">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio-telegram-bot/image1.jpg" alt="Curology" width="1200" height="1200">
                    </div>
                </div>
            </section>

            <section data-padding="top">
                <div class="stg-row stg-bottom-gap">
                    <div class="stg-col-6">
                        <h2 data-appear="fade-up" data-unload="fade-left"> Браво!</h2>
                    </div>
                </div>
                <div class="stg-row stg-bottom-gap-l" data-appear="fade-up" data-delay="100" data-unload="fade-right">
                    <div class="stg-col-9 stg-offset-3 stg-tp-col-10 stg-tp-offset-2">
                        <p class="bringer-large-text">У нас получилось! Нам показалось, что в этой осязаемой простоте, кроется истинное искусство инженерной мысли. Переплетение систем подобно тщательно срежиссированному танцу, где каждый участник (микросервис или компонент) движется в идеальном ритме и гармонии с остальными. Этот незримый балет данных и команд, подчиняющийся строгим правилам протоколов, обеспечивает грацию и безошибочность всего представления — от запроса пользователя до конечного результата.
                        </p>
                        <h4 data-appear="fade-up" data-unload="fade-left">Теперь и Вы знаете, что скрывается за "Привет!" с Telegram ботом.</h4>
                    </div>
                </div>
                @include("link-content",['link_href'=>'https://t.me/pro_7lab_bot', 'link_title1'=>'Наш чат бот', 'link_title2'=>'ждет Вашего "Привет!"'])
                <div class="stg-row stg-top-gap-l" data-appear="fade-left" data-unload="fade-left">
                    <div class="stg-col-9">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio-telegram-bot/image2.jpg" alt="Curology" width="1200" height="1200">
                    </div>
                </div>
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
