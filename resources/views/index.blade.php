@php

    function getMonth():string  {
        $months=['в январе', 'в феврале', 'в марте', 'в апреле', 'в мае', 'в июне', 'в июле', 'в августе', 'в сентябре', 'в октябре', 'в ноябре', 'в декабре'];
        return $months[date('n')-1];
    }
    function getSale():string  {
        $data=["11"=>25];
        $result=$data[date('n')]??30;
        return $result."%";
    }
    $sale=getSale();
    $month=getMonth();
@endphp
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
        <!-- Hero Section -->
        <section>
            <div class="bringer-hero-block bringer-hero-type01">
                <!-- Main Line -->
                <div class="stg-row stg-bottom-gap-l stg-m-bottom-gap-l">
                    <div class="stg-col-9 stg-tp-col-8 stg-m-col-12">
                        <!-- Title -->
                        <h1 class="bringer-page-title" data-split-appear="fade-up" data-split-unload="fade-up">
                            <a href="#page01" title="API, e-commerce, support, telegram боты, сайты">Решения</a> для бизнеса
                            <a href="./e-commerce" title="Разработка E-commerce, интернет магазина">E-com</a>,
                            <a href="./telegram-bot" title="Разработка Telegram ботов" style="color:#fff">telegram боты</a>,
                            <a href="./api" title="Разработка API">API</a>, <a href="./it-sharing" title="Тех. поддержка и сопровождение проектов" style="color:#fff">web support</a></h1>
                    </div>
                    <div class="stg-col-3 stg-tp-col-4 stg-m-col-12">
                        <!-- Social Proof -->
                        <div class="bringer-hero-social-proof">
                            <div data-stagger-appear="fade-up" data-stagger-delay="100" data-stagger-unload="fade-up">
                                <img src="img/home/social-proof01.jpg" alt="Client 01">
                                <img src="img/home/social-proof02.jpg" alt="Client 02">
                                <img src="img/home/social-proof03.jpg" alt="Client 03">
                                @if(in_array(date('d.m'),['11.11','10.11']))
                                    @php $sale='65%'; @endphp
                                    <a href="/form" title="Только 11.11: Скидка {{$sale}}. Заказать сайт.">-{{$sale}}</a>
                                </div>
                                <p data-appear="fade-up" data-unload="fade-up" data-delay="100" title="Гарантия лучшей цены. Скидка {{$sale}} только 11.11">
                                    Скидка {{$sale}} только 11.11
                                </p>
                                @else
                                    <a href="/form" title="Гарантия лучшей цены. Скидка {{$sale}}. Заказать сайт.">-{{$sale}}</a>
                                </div>
                                <p data-appear="fade-up" data-unload="fade-up" data-delay="100" title="Гарантия лучшей цены. Скидка {{$sale}}">
                                    Скидка {{$month}} {{$sale}}
                                </p>
                                @endif




                        </div>
                    </div>
                </div><!-- .stg-row -->

                <!-- Masked Media Container -->
                <div class="bringer-hero-media-wrap bringer-masked-bottom-right bringer-masked-block stg-bottom-gap-l" data-appear="zoom-out" data-unload="zoom-out">
                    <!-- Masked Media -->
                    <div class="bringer-masked-media bringer-masked-media bringer-parallax-media">
                        <video src="./video/intro.mp4" id="main_video" class="data-poster" poster="/img/home/home01-hero.jpg" loop muted autoplay playsinline></video>
                    </div>
                    <!-- Content -->
                    <div class="bringer-masked-content at-bottom-right">
                        <a href="#page01" class="bringer-square-button" data-appear="fade-left">
                            <span class="bringer-icon bringer-icon-arrow-down"></span>
                        </a>
                    </div>
                </div>

                <!-- Additional Information Line -->
                <div class="stg-row stg-valign-bottom">
                    <div class="stg-col-3 stg-tp-col-3 stg-m-col-6" data-appear="fade-up" data-delay="200" data-unload="fade-up">
                        <div class="bringer-counter bringer-small-counter" data-delay="3000">
                            <div><h3>AI</h3></div>
                            <div class="bringer-counter-label">Применяем в разработке ИИ. Запускаем сайты быстрее других! </div>
                        </div><!-- .bringer-counter -->
                    </div>
                    <div class="stg-col-3 stg-tp-col-3 stg-m-col-6" data-appear="fade-up" data-delay="300" data-unload="fade-up">
                        <div class="bringer-counter bringer-small-counter" data-delay="3000">
                            <div><h3>12 лет</h3></div>
                            <div class="bringer-counter-label">Безупречного опыта в разработке web решений для бизнеса!&nbsp;&nbsp;&nbsp;</div>
                        </div><!-- .bringer-counter -->
                    </div>
                    <div class="stg-col-6 stg-tp-col-6 stg-m-col-12 stg-m-top-gap" data-appear="fade-up" data-delay="400" data-unload="fade-up">
                        <p class="bringer-large-text">Мы действительно любим свое дело!<br>Наше ремесло это создавать современные приложения с уникальным дизайном.</p>
                    </div>
                </div><!-- .stg-row -->
            </div><!-- .bringer-hero-block -->
        </section>

        <!-- Section: Steps -->
        <section class="backlight-top" id="page01">
            <video id="StepsVideo" data-video-src="./video/main_video_01.mp4" autoplay loop muted playsinline></video>
            <div class="stg-bottom-gap-l">
                <h2 data-appear="fade-up" data-unload="fade-up">Что мы делаем?</h2>
            </div>
            <!-- Step 01 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap stg-m-col-12" data-appear="fade-right">
                    <div>
                        <a href="/telegram-bot" title="Создать Telegram бота">
                            <video data-video-src="./video/telegram-bot.mp4" width="960" height="960" muted loop autoplay playsinline onmouseover="this.play();"></video>
                        </a>
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6 stg-m-col-12" data-appear="fade-left" data-delay="100">
                    <span class="bringer-label">Telegram-bot </span>
                    <a href="/telegram-bot" title="Создать Telegram бота"><h4>Telegram-боты</h4></a>
                    <p><span class="bringer-highlight">Мы</span> разрабатываем Telegram-ботов.</p>
                    <p>Представьте бизнес-помощника, который круглосуточно, в режиме 24/7, отвечает на вопросы, принимает платежи и записывает клиентов на приём.</p>
                    <p>Современные боты обладают широким функционалом: они способны демонстрировать витрину товаров, формировать корзину заказов, обрабатывать платежи, а также делать рассылки и напоминания. Они грамотно взаимодействуют с клиентами, отвечая на их вопросы, и выполняют множество других задач.</p>
                    <p>Поручив рутинные бизнес-задачи ботам, вы сможете оптимизировать расходы и сэкономить на найме новых сотрудников. <a href="/telegram-bot" class="bringer-arrow-link" title="Создать Telegram бота">Подробнее здесь</a></p>
                </div>
            </div>
            <!-- Step 02 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-bottom-gap-xl stg-top-gap-xl" data-unload="fade-right">
                <div class="stg-col-3  stg-tp-col-6 stg-m-col-12 stg-m-bottom-gap" data-appear="fade-left">
                    <div>
                        <a href="/e-commerce" title="Создать интернет магазин">
                            <video data-video-src="./video/service01.mp4" width="960" height="960" muted autoplay playsinline onmouseover="this.play();" ></video>
                        </a>
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6 stg-m-col-12" data-appear="fade-right" data-delay="100">
                    <span class="bringer-label">e-commerce priority</span>
                    <a href="/e-commerce" title="Создать интернет магазин"><h4>Интернет-магазины</h4></a>
                    <p><span class="bringer-highlight">Мы</span> запускаем современные интернет магазины под ключ.</p>
                    <p>А это значит прорабатываем дизайн, навигацию, архитектуру, эквайринг, базы данных, сервер, торговый каталог, админку, личный кабинет. Закрываем абсолютно все технические вопросы!</p>
                    <p><span class="bringer-highlight">Вы</span> получаете готовую бизнес площадку.
                        <a href="/e-commerce" class="bringer-arrow-link" title="Создать интернет магазин">Подробнее здесь</a></p>
                </div>
                <div class="stg-col-3"><!-- Empty Column --></div>
            </div>
            <!-- Step 03 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-right">
                <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap stg-m-col-12" data-appear="fade-right">
                    <div>
                        <a href="/landing-page" title="Создать сайт визитку">
                            <video data-video-src="./video/service05.mp4" width="960" height="960" muted playsinline onmouseover="this.play();"></video>
                        </a>
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6 stg-m-col-12" data-appear="fade-right" data-delay="100">
                    <span class="bringer-label">Landing Page</span>
                    <a href="/landing-page" title="Создать сайт визитку"><h4>Сайты визитки</h4></a>
                    <p><span class="bringer-highlight">Мы</span> создаем сайты визитки.</p>
                    <p>Подбираем готовые шаблоны, наполняем контентом, регистрируем хостинг, домен, настраиваем почту, загружаем все на сервер.</p>
                    <p><span class="bringer-highlight">Вы</span> получаете в кратчайший срок свою интернет резиденцию. <a href="/landing-page" class="bringer-arrow-link" title="Создать сайт визитку">Подробнее здесь</a>
                    </p>
                </div>
            </div>
        </section>

        <!-- Section: About Us -->
        <section class="backlight-bottom divider-top">
            <div class="stg-row stg-large-gap stg-valign-middle stg-tp-column-reverse">
                <div class="stg-col-6" data-appear="fade-right" data-unload="fade-left">
                    <h3>Мы - увлеченная команда дизайнеров и разработчиков</h3>
                    <p class="bringer-large-text">Команда, которая верит в силу творчества. </p>
                    <p>Мы специализируемся на оказании помощи предприятиям любого размера в достижении их целей. Мы верим, что креативность - это ключ к успеху, и стремимся помочь полностью раскрыть потенциал проекта.</p>
                </div>
                <div class="stg-col-6 stg-tp-bottom-gap-l stg-m-bottom-gap" data-unload="fade-right" data-appear="fade-left">
                    <div class="bringer-parallax-media">
                        <video data-video-src="./video/main-team.mp4" width="960" height="960" class="data-poster" poster="img/home/about03.jpg" loop muted autoplay playsinline></video>
                    </div>
                </div>
            </div><!-- .stg-row -->
        </section>

        <!-- Section: Portfolio Carousel -->
        <section id="ourPortfolio" class="is-fullwidth is-stretched">
            <!-- Section Title -->
            <div class="stg-row bringer-section-title is-boxed">
                <div class="stg-col-8 stg-offset-2">
                    <div class="align-center">
                        <h2 data-appear="fade-up" data-unload="fade-up">Наши работы</h2>
                        <p class="bringer-large-text" data-appear="fade-up" data-unload="fade-up" data-delay="100">Мы гордимся своими проектами и всегда готовы решать новые задачи. Взгляните на некоторые из наших последних работ:</p>
                    </div>
                </div>
            </div>
            <!-- Portfolio Carousel -->
            <div class="swiper bringer-carousel stg-bottom-gap-l" data-appear="fade-up" data-unload="fade-up" data-delay="200" data-count="4" data-m-count="1.5">
                <div class="swiper-wrapper">
                    <!-- Card Item 01 -->
                    <div class="bringer-block bringer-portfolio-card swiper-slide">
                        <div class="bringer-portfolio-card-image">
                            <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio01.jpg" alt="" width="1200" height="1200" alt="E-commerce для Art of Tea. Разработка интернет магазина.">
                        </div>
                        <div class="bringer-portfolio-card-footer">
                            <div class="bringer-portfolio-card-title">
                                <span class="bringer-meta">E-com</span>
                                <h6>Art of Tea</h6>
                            </div>
                            <span class="bringer-icon bringer-icon-explore"></span>
                        </div>
                        <a href="/project-art-of-tea"></a>
                    </div><!-- .bringer-portfolio-card -->
                    <!-- Card Item 02 -->
                    <div class="bringer-block bringer-portfolio-card swiper-slide">
                        <div class="bringer-portfolio-card-image">
                            <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio05.jpg" alt="" width="1200" height="1200" alt="Сайт визитка для Vasiliev Groove. Разработка интернет магазина.">
                        </div>
                        <div class="bringer-portfolio-card-footer">
                            <div class="bringer-portfolio-card-title">
                                <span class="bringer-meta">Landing page</span>
                                <h6>Vasiliev Groove</h6>
                            </div>
                            <span class="bringer-icon bringer-icon-explore"></span>
                        </div>
                        <a href="/project_vasiliev_groove_landing"></a>
                    </div><!-- .bringer-portfolio-card -->

                    <!-- Card Item 02 -->
                    <div class="bringer-block bringer-portfolio-card swiper-slide">
                        <div class="bringer-portfolio-card-image">
                            <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio02.jpg" alt="" width="1200" height="1200" alt="Корпоративный портал для химического холдинга">
                        </div>
                        <div class="bringer-portfolio-card-footer">
                            <div class="bringer-portfolio-card-title">
                                <span class="bringer-meta">Corporate portal</span>
                                <h6>Корпоративный портал</h6>
                            </div>
                            <span class="bringer-icon bringer-icon-explore"></span>
                        </div>
                        <a href="/project-corportal"></a>
                    </div><!-- .bringer-portfolio-card -->

                    <!-- Card Item 02 -->
                    <div class="bringer-block bringer-portfolio-card swiper-slide">
                        <div class="bringer-portfolio-card-image">
                            <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio03.jpg" alt="" width="1200" height="1200" alt="Разработка интернет магазина одежды.">
                        </div>
                        <div class="bringer-portfolio-card-footer">
                            <div class="bringer-portfolio-card-title">
                                <span class="bringer-meta">E-com</span>
                                <h6>Интернет магазин одежды</h6>
                            </div>
                            <span class="bringer-icon bringer-icon-explore"></span>
                        </div>
                        <a href="/e-commerce"></a>
                    </div><!-- .bringer-portfolio-card -->
                    <!-- Card Item 02 -->
                    <div class="bringer-block bringer-portfolio-card swiper-slide">
                        <div class="bringer-portfolio-card-image">
                            <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio02__.jpg" alt="" width="1200" height="1200" alt="E-commerce. Разработка интернет магазина катриджей.">
                        </div>
                        <div class="bringer-portfolio-card-footer">
                            <div class="bringer-portfolio-card-title">
                                <span class="bringer-meta">E-com</span>
                                <h6>Тонер маркет - магазин катриджей</h6>
                            </div>
                            <span class="bringer-icon bringer-icon-explore"></span>
                        </div>
                        <a href="/e-commerce"></a>
                    </div><!-- .bringer-portfolio-card -->

                    <!-- Card Item 02 -->
                    <div class="bringer-block bringer-portfolio-card swiper-slide">
                        <div class="bringer-portfolio-card-image">
                            <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio04.jpg" alt="" width="1200" height="1200" alt="Разработка сайта визитки для Burton.team">
                        </div>
                        <div class="bringer-portfolio-card-footer">
                            <div class="bringer-portfolio-card-title">
                                <span class="bringer-meta">Landing page</span>
                                <h6>Burton.team</h6>
                            </div>
                            <span class="bringer-icon bringer-icon-explore"></span>
                        </div>
                        <a href="/project-landing-page"></a>
                    </div><!-- .bringer-portfolio-card -->




                </div>
                <!-- Pagination -->
                <div class="swiper-pagination bringer-dots"></div>
            </div><!-- .bringer-portfolio-carousel -->
        </section>


        <!-- Section: CTA -->
        <section data-padding="bottom">
            <div class="bringer-masked-cta bringer-masked-block" data-unload="fade-down">
                <form action="mail-short.php" method="post" data-fill-error="Пожалуйста заполните форму" class="bringer-contact-form is-short bringer-masked-media" data-appear="fade-up">
                    <div class="bringer-form-content bringer-cta-form">
                        <div class="bringer-cta-form-content" data-appear="fade-up" data-delay="100">
                            <div class="bringer-cta-title">Пишите свою почту. Далее работать будем мы!</div>
                            <input type="email" id="subscribe_email" name="subscribe_email" placeholder="@" required>
                        </div>
                        <div class="bringer-cta-form-button" data-appear="fade-up" data-delay="200">
                            <div id="button_submit"></div>
                            <!--AntiSPAM-->
                            <script type="text/javascript">
                                document.getElementById("button_submit").innerHTML='<button type="submit" title="Отправить запрос"><span class="bringer-icon bringer-icon-arrow-submit"></span> </button>';
                            </script>
                            <!--AntiSPAM END-->
                        </div>
                        <div class="bringer-contact-form__response"></div>
                    </div>
                    <span class="bringer-form-spinner"></span>
                </form>
                <div class="bringer-masked-cta-content bringer-masked-content at-top-right">
                    <p class="bringer-large-text" data-appear="fade-down">Пора создать свою цифровую резиденцию ✨</p>
                </div>
            </div>
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
