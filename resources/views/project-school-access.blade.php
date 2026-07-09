@extends('head')
@section('title', 'Пропуск сотрудников в школу по фото | 7LAB.PRO')
@section('meta-description', 'Кейс: система пропуска сотрудников школы по фото с YOLOE и zero-shot. Этапы реализации - от покупки сервера до запуска камеры у входа.')
@section('meta-keywords', 'YOLOE, zero-shot, распознавание лиц, пропуск в школу, computer vision, IP-камера')
@section('content')
    <body>
    <!-- Header -->
    <header id="bringer-header" class="is-frosted is-sticky" data-appear="fade-down" data-unload="fade-up">
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
                        <h1 class="bringer-post-title" data-appear="fade-up" data-unload="fade-left">Пропуск по лицу / YOLOE</h1>
                    </div>

                    <div class="stg-col-6 stg-tp-col-9 stg-tp-offset-3 align-justify" data-appear="fade-up" data-delay="100" data-unload="fade-left">
                        <p>Маленькая частная школа попросила добавить на объект видеонаблюдение.
                            Мы предложили подключить не просто камеру, а добавить компьютерное зрение (Computer Vision). Снаружи - обычная дверь и незаметная камера. Внутри - YOLOE, zero-shot сопоставление с базой сотрудников и автоматический журнал проходов. Ниже история реализации по этапам.</p>
                    </div>
                </div>

                <!-- Slider -->
                <div class="bringer-slider-wrapper stg-bottom-gap" data-appear="fade-up" data-delay="200" data-unload="fade-up">
                    <div class="swiper bringer-slider" data-autoplay="12000" data-duration="300" data-effect="slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="position: relative">
                                <img src="img/portfolio/portfolio-school-access/main22.jpg" alt="Распознавание лиц" width="1920" height="1080" style="position: absolute; z-index: 300; opacity: 0.75">
                                <img src="img/portfolio/portfolio-school-access/main1.jpg" alt="Камера у входа в школу" width="1920" height="1080">
                            </div>
                            <div class="swiper-slide">
                                <img src="img/portfolio/portfolio-school-access/main2.jpg" alt="Детекция YOLOE в реальном времени" width="1920" height="1080">
                            </div>
                            <div class="swiper-slide">
                                <img src="img/portfolio/portfolio-school-access/main-4.jpg" alt="Сервер и журнал проходов" width="1920" height="1080">
                            </div>
                            <div class="swiper-slide">
                                <img src="img/portfolio/portfolio-school-access/main1.jpg" alt="Монтаж камеры у входа" width="1920" height="1080">
                            </div>
                        </div>
                    </div>
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
                        Client: <span>Частная школа</span>
                    </div>
                    <div class="bringer-meta">
                        Service: <span>Computer Vision</span>
                    </div>
                    <div class="bringer-meta">
                        Date: <span>June '2026</span>
                    </div>
                </div>
            </section>

            <!-- Section: The Challenge -->
            <section data-padding="top" class="backlight-top">
                <div class="stg-row stg-bottom-gap-l">
                    <div class="stg-col-6 stg-tp-bottom-gap" data-appear="fade-right" data-unload="fade-left">
                        <h2>Автоматизация ручной идентификации</h2>
                    </div>
                    <div class="stg-col-6 stg-tp-col-10 stg-tp-offset-2" data-appear="fade-left" data-unload="fade-right">
                        <p class="bringer-large-text">Охранник вручную сверял лица с бумажным списком. Утром образовывалась очередь, а карточки терялись. Нужна была система, которая узнаёт сотрудника по одному эталонному фото, не требует недельного обучения модели и работает локально данные не уходят в облако. Мы выбрали связку <strong>YOLOE + zero-shot</strong>: детекция людей и лиц в кадре, затем сопоставление эмбеддингов с базой школы.</p>
                    </div>
                </div>
            </section>
            <div class="bringer-hero-media-wrap bringer-masked-bottom-right bringer-masked-block stg-bottom-gap-l" data-appear="zoom-out" data-unload="zoom-out">
                <div class="bringer-masked-media bringer-masked-media bringer-parallax-media">
                    <img src="img/portfolio/portfolio-school-access/main2.jpg" alt="YOLOE detection demo" width="1920" height="1080">
                </div>
                <div class="bringer-masked-content at-bottom-right">
                    <a href="#page01" class="bringer-square-button" data-appear="fade-left">
                        <span class="bringer-icon bringer-icon-innovation"></span>
                    </a>
                </div>
            </div>

            <section class="backlight-both" id="page01">
                <div class="stg-row stg-bottom-gap-l">
                    <div class="stg-col-7">
                        <h2 data-split-appear="fade-up" data-unload="fade-up">Как это было по этапам</h2>
                    </div>
                    <div class="stg-col-5"></div>
                </div>

                <!-- Step 1: Server -->
                <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                    <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                        <div class="bringer-parallax-media">
                            <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio-school-access/main-4.jpg" alt="Сервер" width="960" height="960">
                        </div>
                    </div>
                    <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                        <span class="bringer-label">Этап 01</span>
                        <h4>Сервер: фундамент системы</h4>
                        <p>Арендовали VPS с GPU для инференса - 8 vCPU, 16 GB RAM. Установили Ubuntu 22.04, Docker, настроил firewall и VPN для удалённого доступа. Подняли PostgreSQL для журнала проходов, Redis для кэша эмбеддингов и FastAPI как единую точку входа. Весь стек завели одной командой <b>docker compose up -d</b> - чтобы на объекте осталось только подключить камеру.</p>
                    </div>
                </div>

                <!-- Step 2: Camera -->
                <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l" data-unload="fade-right">
                    <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                        <div class="bringer-parallax-media">
                            <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio-school-access/image-2.jpg" alt="IP-камера" width="960" height="960">
                        </div>
                    </div>
                    <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                        <span class="bringer-label">Этап 02</span>
                        <h4>Камера у входа: глаз системы</h4>
                        <p>Купили IP-камеру с RTSP-потоком и установили её над стеклянными дверями, чтобы угол обзора захватывал лицо до того, как человек дотянется до ручки. Протянули PoE-кабель, настроили экспозицию под утренний контровой свет. Поток идёт на сервер через <b>rtsp-ingest</b>: 25 fps, задержка до детектора меньше 50 мс.</p>
                    </div>
                    <div class="stg-col-3"></div>
                </div>

                <!-- Step 3: YOLOE -->
                <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                    <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                        <div class="bringer-parallax-media">
                            <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio-school-access/img-1.jpg" alt="YOLOE" width="960" height="960">
                        </div>
                    </div>
                    <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                        <span class="bringer-label">Этап 03</span>
                        <h4>YOLOE: детекция без дообучения</h4>
                        <p>YOLOE находит в кадре людей и лица - даже в очках и с разным освещением. Модель не переобучалась под конкретную школу: использовали встроенные классы детекции и вынесли распознавание личности на отдельный zero-shot модуль. На выходе - bounding box, crop лица и метаданные кадра для журнала.</p>
                    </div>
                </div>

                <!-- Step 4: Zero-shot -->
                <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l" data-unload="fade-right">
                    <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                        <div class="bringer-parallax-media">
                            <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio-school-access/image-3.jpg" alt="Zero-shot" width="960" height="960">
                        </div>
                    </div>
                    <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                        <span class="bringer-label">Этап 04</span>
                        <h4>Zero-shot: одно фото на сотрудника</h4>
                        <p>Для каждого сотрудника загрузили одно эталонное фото в базу. При проходе система строит эмбеддинг лица из кадра и сравнивает с базой по косинусному расстоянию. Порог подобрали на тестовой неделе: 0.82  баланс между ложными срабатываниями и пропусками. Новый челове добавляется за минуту без переобучения нейросети.</p>
                    </div>
                    <div class="stg-col-3"></div>
                </div>
                <!-- Step 5: Integration -->
                <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                    <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                        <div class="bringer-parallax-media">
                            <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio-school-access/image-4.jpg" alt="Интеграция" width="960" height="960">
                        </div>
                    </div>
                    <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                        <span class="bringer-label">Этап 05</span>
                        <h4>Интеграция: от кадра до турникета</h4>
                        <p>Собрали пайплайн: RTSP → YOLOE → zero-shot match → API. При совпадении запись в PostgreSQL, сигнал на реле турникета и уведомление в Telegram-чат охраны. При отказе фото «незнакомца» уходит дежурному. Веб-панель показывает ленту проходов в реальном времени.</p>
                    </div>
                </div>
            </section>

            <section data-padding="top">
                <div class="stg-row stg-bottom-gap">
                    <div class="stg-col-6">
                        <h2 data-appear="fade-up" data-unload="fade-left">Сложности на объекте</h2>
                    </div>
                </div>
                <div class="stg-row stg-bottom-gap-l" data-appear="fade-up" data-delay="100" data-unload="fade-right">
                    <div class="stg-col-9 stg-offset-3 stg-tp-col-10 stg-tp-offset-2">
                        <p class="bringer-large-text">Самое капризное - свет: утром солнце бьёт в стекло, вечером - тени. Пришлось подкрутить WDR на камере и добавить нормализацию яркости перед инференсом. Второй вызов - родители в кадре: YOLOE их видит, но zero-shot честно отвечает «unknown» и не пускает. Третий - задержка сети: пока RTSP шёл через Wi‑Fi, были артефакты; после перехода на PoE всё стабилизировалось.</p>
                    </div>
                </div>
                <div class="stg-row" data-appear="fade-left" data-unload="fade-left">
                    <div class="stg-col-9">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio-school-access/img1.jpg" alt="Проблема и решение" width="1200" height="1200">
                    </div>
                </div>
            </section>

            <section data-padding="top">
                <div class="stg-row stg-bottom-gap">
                    <div class="stg-col-6">
                        <h2 data-appear="fade-up" data-unload="fade-left">Запуск</h2>
                    </div>
                </div>
                <div class="stg-row stg-bottom-gap-l" data-appear="fade-up" data-delay="100" data-unload="fade-right">
                    <div class="stg-col-3">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio-school-access/img2.jpg" alt="Доступ разрешён" width="1200" height="1200">
                    </div>
                    <div class="stg-col-8 stg-tp-col-10 stg-tp-offset-2">
                        <p class="bringer-large-text">Пилотный режим был три дня на тестовой группе из 12 сотрудников. Потом - полная база из 147 человек. Первый автоматический пропуск случился в 08:01 - система детектировала человека по лицу и успешно отработала дальнейшие все процедуры. Охранник сначала не поверил, пока не увидел запись в журнале. Сейчас очередей у журнала нет, а мы до сих пор получаем благодарности от директора.</p>
                    </div>
                </div>

                @include("link-content",['link_href'=>'/form', 'link_title1'=>'Нужна похожая система?', 'link_title2'=>'рассчитаем бесплатно'])
                <div class="stg-row stg-bottom-gap-l" data-appear="fade-up" data-delay="100" data-unload="fade-right">
                    <div class="stg-col-10 stg-tp-offset-10">
                    </div>
                    <div class="stg-col-2">
                        <p><img class="align-right" src="/img/camera-security.svg"></p>
                    </div>
                </div>
            </section>

        </div>

        @include("footer")
    </main>

    @include('protect')
    @include('backlight')
    @include('scripts')
    </body>
    </html>
@endsection
