@extends('head')
@section('title', 'Разработка Telegram бота - мощный инструмент автоматизации бизнес-процессов')
@section('meta-description', 'Разработка Telegram бота, автоматизация, бизнес-процессы')
@section('meta-keywords', 'telegram, bot, бот, автоматизация')
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
                        <h1 class="bringer-page-title" data-split-appear="fade-up">Разработка Telegram-бота</h1>
                        <p class="bringer-large-text" data-appear="fade-right" data-delay="100">Telegram-бот — это мощный инструмент для автоматизации бизнес-процессов, создания сервисов и развлечений.</p>
                        <p class="bringer-large-text bringer-tp-normal-text" data-appear="fade-right" data-delay="200">
                            Представьте, что появляется бизнес-помощник, который отвечает, принимает платежи и записывает на приём в режиме 24/7. Невероятно и это все умеет telegram бот!
                        </p>
                        <div class="gap-0">@include("link-content",['link_title1'=>'Нужен telegram бот?',"link_title2"=>'давайте создадим'])</div>

                    </div>
                </div>
                <div class="stg-col-6 stg-tp-bottom-gap-l" data-appear="fade-left" data-unload="fade-right">
                    <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-telegram-bot.jpg" alt="Brainding" width="800" height="1200">
                </div>
            </div>
        </section>

        <!-- Section: Details -->
        <section class="backlight-both">
            <!-- Section Title -->
            <div class="stg-row stg-bottom-gap-l">
                <div class="stg-col-7">
                    <h2 data-split-appear="fade-up" data-unload="fade-up">Преимущества Telegram-бота</h2>
                </div>
                <div class="stg-col-5"></div>
            </div>
            <!-- Details 01 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-telegram-bot1.jpg" alt="API 01" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                    <span class="bringer-label">преимущество 01</span>
                    <h4>Автоматические ответы 24/7</h4>
                    <p>Бот может мгновенно реагировать на стандартные запросы пользователей, ключевые слова или команды (например, "Запишите меня", "/start"), предоставляя заранее подготовленную информацию без участия человека. Это обеспечивает круглосуточную поддержку и экономит время администраторов.</p>
                </div>
            </div>
            <!-- Details 02 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l" data-unload="fade-right">
                <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-telegram-bot2.jpg" alt="API 02" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                    <span class="bringer-label">преимущество 02</span>
                    <h4>Рассылки клиентам</h4>
                    <p>Бот позволяет отправлять новости, рекламные акции, обновления или важные уведомления сегментированной аудитории прямо в личные сообщения, минуя спам-фильтры электронной почты.</p>
                </div>
                <div class="stg-col-3"><!-- Empty Column --></div>
            </div>
            <!-- Details 03 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                <div class="stg-col-3 stg-offset-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-right">
                    <div class="bringer-parallax-media">
                        <video data-video-src="./video/telegram-bot.mp4" width="960" height="960" muted loop autoplay playsinline onmouseover="this.play();"></video>
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-right" data-delay="100">
                    <span class="bringer-label">преимущество 03</span>
                    <h4>Прием платежей</h4>
                    <p>Бот может выступать в роли витрины магазина или платежного терминала. Благодаря интеграции с популярными платежными системами (например, Stripe, ЮKassa), пользователи могут просматривать товары или услуги и оплачивать их прямо в интерфейсе Telegram.</p>
                </div>
            </div>
            <!-- Details 04 Row -->
            <div class="stg-row stg-bottom-gap stg-valign-middle stg-tp-row-reverse stg-m-bottom-gap-l" data-unload="fade-right">
                <div class="stg-col-3 stg-tp-col-6 stg-m-bottom-gap" data-appear="fade-left">
                    <div class="bringer-parallax-media">
                        <img class="bringer-lazy" src="img/null.png" data-src="img/inner-pages/service-telegram-bot4.jpg" alt="API 04" width="960" height="960">
                    </div>
                </div>
                <div class="stg-col-6 stg-tp-col-6" data-appear="fade-left" data-delay="100">
                    <span class="bringer-label">преимущество 04</span>
                    <h4>Интеграция с сервисами</h4>
                    <p>Бот служит мостом между Telegram и другими платформами. Он может обмениваться данными с CRM-системами (например, AmoCRM, Bitrix24), базами данных, Google Таблицами или любыми API, позволяя автоматизировать сложные бизнес-процессы (например, запись на услугу, оформление заказа, получение данных извне).</p>
                </div>
                <div class="stg-col-3"><!-- Empty Column --></div>
            </div>
            @include("link-content",['link_title1'=>'Заказать telegram бота', 'link_title2'=>'отправить заявку'])
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
