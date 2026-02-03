@extends('head')
@section('html', 'itemscope itemtype=https://schema.org/FAQPage')
@section('title', 'FAQ - часто задаваемые вопросы')
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

                    <div class="stg-row stg-bottom-gap stg-valign-middle stg-m-bottom-gap-l" data-unload="fade-left">
                        <h1 class="stg-bottom-gap-xl" data-appear="fade-up" data-unload="fade-left">FAQ</h1>
                        <div class="stg-col-12" data-appear="fade-right" data-delay="100">

                            <div class="faq-container">
                                <!-- Вопрос 1: Про сроки и процесс -->
                                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="stg-bottom-gap-xl">
                                    <h2 itemprop="name">Сколько времени занимает разработка корпоративного сайта?</h2>
                                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <p>Срок разработки индивидуального бизнес-решения составляет от 4 до 12 недель. Процесс разбит на этапы: проектирование интерфейсов (UX/UI), верстка, программирование функционала и тестирование. Точный график фиксируется в договоре после анализа ТЗ.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Вопрос 2: Про стек технологий -->
                                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="stg-bottom-gap-xl">
                                    <h2 itemprop="name">Какие технологии использует студия для веб-разработки?</h2>
                                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <p>Мы специализируемся на создании высоконагруженных систем, используя современный стек: PHP (Laravel), JavaScript и популярные CMS для e-commerce (Bitrix, WordPress). Это гарантирует быструю скорость загрузки и легкость масштабирования проекта.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Вопрос 3: Про стоимость и прозрачность -->
                                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="stg-bottom-gap-xl">
                                    <h2 itemprop="name">Из чего складывается стоимость разработки сайта?</h2>
                                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <p>Цена проекта в формируется на основе трудозатрат специалистов. Основные факторы: сложность уникального дизайна, объем функционала (интеграции с 1С, CRM, платежными системами) и количество контентных страниц. Мы предоставляем детальную смету до начала работ.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Вопрос 4: Про поддержку -->
                                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="stg-bottom-gap-xl">
                                    <h2 itemprop="name">Предоставляет ли техническую поддержку после запуска сайта?</h2>
                                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <p>Да, мы обеспечиваем гарантийное обслуживание и регулярную техподдержку. В услуги входит мониторинг доступности 24/7, установка обновлений безопасности, резервное копирование и доработка нового функционала по запросу клиента.</p>
                                        </div>
                                    </div>
                                </div>


                                <!-- Вопрос 5: Про адаптивность и SEO-фундамент -->
                                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="stg-bottom-gap-xl">
                                    <h2 itemprop="name">Будет ли сайт адаптирован под мобильные устройства и SEO-требования?</h2>
                                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <p>Все проекты 7lab по умолчанию имеют 100% адаптивную верстку и проходят базовую SEO-оптимизацию. Мы настраиваем корректную индексацию, микроразметку, высокую скорость загрузки по Google PageSpeed и чистый код, что обеспечивает быстрый рост позиций в поисковых системах.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Вопрос 6: Про интеграции и API -->
                                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="stg-bottom-gap-xl">
                                    <h2 itemprop="name">Возможно ли интегрировать сайт с CRM, 1С и внешними сервисами?</h2>
                                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <p>Мы настраиваем бесшовную интеграцию сайтов с любыми внешними системами через API. В перечень работ входит синхронизация остатков и заказов с 1С, подключение CRM (Bitrix24, amoCRM), интеграция платежных шлюзов, служб доставки и сервисов сквозной аналитики.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Вопрос 7: Про уникальность дизайна -->
                                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="stg-bottom-gap-xl">
                                    <h2 itemprop="name">Вы работаете по готовым шаблонам или создаете индивидуальный дизайн?</h2>
                                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <p>По договоренности. Зависит от сроков запуска проекта. Мы можем разработать уникальный дизайн-шаблон с нуля или интегрировать готовый.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Вопрос 8: Про право собственности -->
                                <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="stg-bottom-gap-xl">
                                    <h2 itemprop="name">Кому будут принадлежать права на сайт и исходный код после завершения работ?</h2>
                                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <div itemprop="text">
                                            <p>После полной оплаты проекта все исключительные права на исходный код, дизайн-макеты и контент передаются клиенту. Мы предоставляем полный доступ к репозиторию и административной панели, гарантируя юридическую чистоту и независимость вашего бизнеса.</p>
                                        </div>
                                    </div>
                                </div>


                            </div>



                        </div>



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
