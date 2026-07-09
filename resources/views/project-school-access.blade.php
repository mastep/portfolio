@extends('head')
@section('title', 'Система компьютерного зрения для частной школы | 7LAB.PRO')
@section('meta-description', 'Проект: безопасная система распознавания лиц в частной школе на базе YOLOE и zero-shot. Этапы внедрения - от серверной инфраструктуры до запуска камеры у входа.')
@section('meta-keywords', 'YOLOE, zero-shot, распознавание лиц, безопасность школы, computer vision, IP-камера, контроль доступа')
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
                        <h1 class="bringer-post-title" data-appear="fade-up" data-unload="fade-left">Безопасный доступ по лицу / YOLOE</h1>
                    </div>

                    <div class="stg-col-6 stg-tp-col-9 stg-tp-offset-3 align-justify" data-appear="fade-up" data-delay="100" data-unload="fade-left">
                        <p>Уже сегодня компьютерное зрение  позволяет вывести безопасность объектов на новый уровень. На примере частной школы мы покажем, как можно модернизировать существующую систему видеонаблюдения без кардинальной замены инфраструктуры.
                        </p>
                        <p>Внешне всё остаётся привычным: входная группа и камеры. Внутри начинает работать интеллектуальная система на базе YOLOE: обнаружение объектов, zero-shot распознавание, сопоставление с базой сотрудников и защищённый журнал событий. Ниже мы подробно расскажем, из каких этапов состоит внедрение такого решения - от проектирования архитектуры до запуска в промышленную эксплуатацию.</p>
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
                        Date: <span>2026</span>
                    </div>
                </div>
            </section>

            <!-- Section: The Challenge -->
            <section data-padding="top" class="backlight-top">
                <div class="stg-row stg-bottom-gap-l">
                    <div class="stg-col-6 stg-tp-bottom-gap" data-appear="fade-right" data-unload="fade-left">
                        <h2>Безопасность без компромиссов</h2>
                    </div>
                    <div class="stg-col-6 stg-tp-col-10 stg-tp-offset-2" data-appear="fade-left" data-unload="fade-right">
                        <p class="bringer-large-text">Представьте систему контроля доступа, в которой сотрудникам больше не нужны пропуска, а охране — бумажные списки. Камера автоматически обнаруживает человека, интеллектуальная система на базе YOLOE выделяет лицо, создаёт его цифровой отпечаток (эмбеддинг) и сравнивает его с защищённой базой школы. Благодаря zero-shot-подходу решение не требует длительного обучения модели под каждого нового сотрудника, а обработка данных может выполняться полностью локально — без передачи биометрической информации в облачные сервисы. Это позволяет повысить скорость прохода, снизить влияние человеческого фактора и сохранить полный контроль над безопасностью данных.</p>
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
                        <h2 data-split-appear="fade-up" data-unload="fade-up">Этапы внедрения</h2>
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
                        <h4>Сервер: защищённый фундамент</h4>
                        <p>Развернём VPS с GPU для инференса - 8 vCPU, 16 GB RAM. Установим Ubuntu 22.04, Docker, настроим firewall и VPN для удалённого администрирования. Поднимем PostgreSQL для журнала проходов, Redis для кэша эмбеддингов и FastAPI как единую точку входа. Весь стек запустим одной командой <b>docker compose up -d</b> - на объекте останется только подключить камеру. Доступ к серверу будет только по зашифрованным каналам, а журнал событий - с аудитом каждого действия.</p>
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
                        <h4>Камера у входа: первый рубеж безопасности</h4>
                        <p>Установим IP-камеру с RTSP-потоком над стеклянными дверями - угол обзора захватит лицо до того, как человек дотянется до ручки. Протянем PoE-кабель, настроим экспозицию под утренний контровой свет и WDR для стабильной картинки в любых условиях. Поток пойдёт на сервер через <b>rtsp-ingest</b>: 25 fps, задержка до детектора менее 50 мс. Камера станет незаметным, но надёжным сторожем периметра.</p>
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
                        <h4>YOLOE: инновационная детекция без дообучения</h4>
                        <p>YOLOE будет находить в кадре людей и лица - даже в очках и при разном освещении. Модель не потребует переобучения под конкретную школу: используем встроенные классы детекции и вынесем распознавание личности на отдельный zero-shot модуль. На выходе получим bounding box, crop лица и метаданные кадра для журнала. Это позволит быстро адаптировать систему к новым условиям без остановки работы объекта.</p>
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
                        <h4>Zero-shot: одно фото - полный контроль</h4>
                        <p>Для каждого сотрудника загрузим одно эталонное фото в зашифрованную базу. При проходе система построит эмбеддинг лица из кадра и сравнит его с базой по косинусному расстоянию. Порог подберём на тестовой неделе: 0.82 - баланс между ложными срабатываниями и пропусками. Нового человека можно будет добавить за минуту без переобучения нейросети. Посторонние лица система автоматически отметит как «unknown» и не пропустит.</p>
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
                        <p>Соберём пайплайн: RTSP → YOLOE → zero-shot match → API. При совпадении - запись в PostgreSQL, сигнал на реле турникета и мгновенное уведомление в Telegram-чат охраны. При отказе фото «незнакомца» уйдёт дежурному для проверки. Веб-панель покажет ленту проходов в реальном времени. Каждое событие будет зафиксировано с меткой времени, фото и результатом проверки - полная прозрачность для администрации.</p>
                    </div>
                </div>
            </section>

            <section data-padding="top">
                <div class="stg-row stg-bottom-gap">
                    <div class="stg-col-6">
                        <h2 data-appear="fade-up" data-unload="fade-left">Инновации в защите периметра</h2>
                    </div>
                </div>
                <div class="stg-row stg-bottom-gap-l" data-appear="fade-up" data-delay="100" data-unload="fade-right">
                    <div class="stg-col-9 stg-offset-3 stg-tp-col-10 stg-tp-offset-2">
                        <p class="bringer-large-text">Система объединит несколько технологических прорывов в одном решении. <strong>Zero-shot распознавание</strong> избавит от необходимости собирать тысячи фотографий для обучения - достаточно одного снимка на человека. <strong>Локальный инференс</strong> гарантирует, что биометрия останется на территории школы и не попадёт к третьим лицам. <strong>Мгновенная реакция</strong> - менее 50 мс от кадра до решения - не даст злоумышленнику воспользоваться паузой в работе охраны. А <strong>умная фильтрация</strong> отличит сотрудника от родителя в кадре: YOLOE увидит обоих, но zero-shot честно ответит «unknown» на незнакомое лицо.</p>
                    </div>
                </div>
                <div class="stg-row" data-appear="fade-left" data-unload="fade-left">
                    <div class="stg-col-9">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio-school-access/img1.jpg" alt="Инновации безопасности" width="1200" height="1200">
                    </div>
                </div>
            </section>

            <section data-padding="top">
                <div class="stg-row stg-bottom-gap">
                    <div class="stg-col-6">
                        <h2 data-appear="fade-up" data-unload="fade-left">Перспективы после запуска</h2>
                    </div>
                </div>
                <div class="stg-row stg-bottom-gap-l" data-appear="fade-up" data-delay="100" data-unload="fade-right">
                    <div class="stg-col-3">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio-school-access/img2.jpg" alt="Доступ разрешён" width="1200" height="1200">
                    </div>
                    <div class="stg-col-8 stg-tp-col-10 stg-tp-offset-2">
                        <p class="bringer-large-text">Пилотный режим пройдёт три дня на тестовой группе из 12 сотрудников, затем система масштабируется на полную базу из 147 человек. Первый автоматический пропуск случится в 08:01 - детекция по лицу и полный цикл проверки без участия охранника. Очереди у журнала исчезнут, а директор получит инструмент, который работает круглосуточно, не устаёт и не пропускает незнакомцев. В перспективе добавим аналитику посещаемости, интеграцию с системой пожарной безопасности и расширение на дополнительные входы - школа станет эталоном умной безопасности в образовании.</p>
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
