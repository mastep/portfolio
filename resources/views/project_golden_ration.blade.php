@extends('head')
@section('title', 'NFT - Golden Ratio Art & Tea Room')
@section('meta-description', 'Рассказываем о e-com для Golden Ratio Art & Tea Room')
@section('meta-keywords', 'сайт, ecom, разработка интернет-магазина')
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
                        <h1 class="bringer-post-title" data-appear="fade-up" data-unload="fade-left">Ecom NFT Gallery</h1>
                    </div>

                    <div class="stg-col-6 stg-tp-col-9 stg-tp-offset-3 align-right" data-appear="fade-up" data-delay="100" data-unload="fade-right">
                        <p>Сайт golden-ratio.nl является официальной платформой для галереи Golden Ratio Art & Tea Room, открывшейся в Гааге в октябре 2025 года.
                            Разработка сайта была направлена на создание цифрового пространства, которое отражает уникальную концепцию галереи: сочетание балтийского и европейского искусства.</p>
                    </div>
                </div>
                <div class="stg-row stg-bottom-gap-l stg-tp-bottom-gap">
                    @include("link-content",['link_href'=>'https://golden-ratio.nl/', 'link_title1'=>'Открыть сайт', 'link_title2'=>''])
                </div>

                <!-- Slider -->
                <div class="bringer-slider-wrapper stg-bottom-gap" data-appear="fade-up" data-delay="200" data-unload="fade-up">
                    <div class="" data-autoplay="12000" data-duration="300" data-effect="slide">
                        <div >

                            <div >
                                <img src="img/portfolio/portfolio_golden_ration/slide1.jpg" width="1920" height="1080">
                            </div>

                        </div>
                    </div><!-- .bringer-slider -->
                </div>

                <!-- Meta -->
                <div class="bringer-hero-info-line" data-stagger-appear="fade-up" data-delay="200" data-stager-delay="100" data-unload="fade-up">
                    <div class="bringer-meta">
                        Client: <span>Golden Ratio Art & Tea Room</span>
                    </div>
                    <div class="bringer-meta">
                        Service: <span>E-com</span>
                    </div>
                    <div class="bringer-meta">
                        Date: <span>Dec '2025</span>
                    </div>
                </div><!-- .bringer-hero-info-line -->
            </section>




            <section class="backlight-both">
                <!-- Section Title -->
                <div class="stg-row stg-bottom-gap-l">
                    <div class="stg-col-7">
                        <h2 data-split-appear="fade-up" data-unload="fade-up">Акценты проекта</h2>
                    </div>
                    <div class="stg-col-5"></div>
                </div>
                <!-- Details 01 Row -->
                <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                    <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                        <div class="bringer-parallax-media">
                            <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio_golden_ration/img1.jpg" alt="Ecom 01" width="960" height="960">
                        </div>
                    </div>
                    <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                        <span class="bringer-label">360°</span>
                        <h4>Virtual Tour</h4>
                        <p>
                            Интеграция панорамного тура позволяет посетителям совершить полноценную прогулку по залам галереи «Golden Ratio Art & Tea Room», не выходя из дома. Эта технология обеспечивает эффект присутствия и позволяет рассмотреть экспозицию в деталях.
                        </p>
                    </div>
                </div>
                <!-- Details 02 Row -->
                <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l" data-unload="fade-right">
                    <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                        <div class="bringer-parallax-media">
                            <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio_golden_ration/img2.jpg" alt="Ecom 02" width="960" height="960">
                        </div>
                    </div>
                    <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                        <span class="bringer-label">Token</span>
                        <h4>NFT</h4>
                        <p>Галерея поддерживает работу с цифровыми активами, позволяя коллекционерам приобретать произведения искусства в формате NFT. Это подчеркивает статус галереи как инновационного пространства, объединяющего физический и цифровой миры.</p>
                    </div>
                    <div class="stg-col-3"><!-- Empty Column --></div>
                </div>
                <!-- Details 03 Row -->
                <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                    <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                        <div class="bringer-parallax-media">
                            <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio_golden_ration/img3.jpg" alt="Ecom 03" width="960" height="960">
                        </div>
                    </div>
                    <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                        <span class="bringer-label">Interface</span>
                        <h4>Фильтрация произведений</h4>
                        <p>Для удобства навигации реализована система фильтров, которая позволяет быстро находить произведения конкретных мастеров, таких как Valdis Buss, Janis Pauluks или Karlis Silins</p>
                    </div>
                </div>
                <!-- Details 04 Row -->
                <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l" data-unload="fade-right">
                    <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                        <div class="bringer-parallax-media">
                            <img class="bringer-lazy" src="img/null.png" data-src="img/portfolio/portfolio_golden_ration/img4.jpg" alt="Ecom 04" width="960" height="960">
                        </div>
                    </div>
                    <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                        <span class="bringer-label">Make an offer</span>
                        <h4>Цена по запросу</h4>
                        <p>Для обеспечения эксклюзивности и конфиденциальности сделок внедрен функционал индивидуальных запросов стоимости. Это позволяет галерее выстраивать персональную коммуникацию с каждым заинтересованным коллекционером.</p>
                    </div>
                    <div class="stg-col-3"><!-- Empty Column --></div>
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
