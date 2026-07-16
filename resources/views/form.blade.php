@extends('head')
@section('title', 'Заявка на разработку веб-сайта')
@section('meta-description', 'Расчет проекта. Заполните форму, чтобы узнать сроки и стоимость реализации Вашего проекта')
@section('meta-keywords', 'веб-форма, узнать стоимость')
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
    <style>
        .link-form{display: none !important;}
    </style>
</header>

<!-- Page Main -->
<main id="bringer-main">
    <div class="stg-container">
        <section>

            <h1 class="bringer-page-title" data-split-appear="fade-up" data-split-unload="fade-up">Расчет проекта</h1>

        </section>

        <section data-padding="bottom">
            <div class="bringer-masked-cta bringer-masked-block" data-unload="fade-down">
                <form id="formSupport" action="" method="get" target="_blank" data-fill-error="Пожалуйста заполните форму" class="is-short bringer-masked-media" data-appear="fade-up">
                    <div class="bringer-form-content bringer-cta-form">
                        <div class="bringer-cta-form-content" data-appear="fade-up" data-delay="100">
                            <div class="bringer-cta-title">Задай вопрос AI боту</div>
                            <input type="text" id="text" name="text" placeholder="открыть чат..." onclick="(widget)?widget.click():document.getElementById('formSupport').submit();">
                        </div>
                        <div class="bringer-cta-form-button" data-appear="fade-up" data-delay="200">
                            <div id="button_submit"></div>
                            <!--AntiSPAM-->
                            <script type="text/javascript">
                                let widget;
                                document.getElementById("formSupport").action='https://t.me/'+pt+'_bot';
                                const interval = setInterval(() => {
                                    widget = document.querySelector('agent-chat-widget')?.shadowRoot.querySelector('button');

                                }, 500)
                                document.getElementById("button_submit").innerHTML='<button onclick="(widget)?widget.click():document.getElementById(\'formSupport\').submit();" type="button" title="Отправить запрос"><span class="bringer-icon bringer-icon-arrow-submit"></span> </button>';
                            </script>
                            <!--AntiSPAM END-->
                        </div>
                        <div class="bringer-contact-form__response"></div>
                    </div>
                    <span class="bringer-form-spinner"></span>
                </form>
                <div class="bringer-masked-cta-content bringer-masked-content at-top-right">
                    <p class="bringer-large-text" data-appear="fade-down">AI-бот консультант. Поддержка 24/7✨</p>
                </div>
            </div>
            <p><br></p>
            <p><a href="/faq" data-split-appear="fade-up" data-split-unload="fade-up" style="color: #FFFFFF">См. "Вопрос ответ / FAQ"</a></p>
        </section>
    </div><!-- .stg-container -->
    @include("footer")
</main>
@include('protect')
@include('show-message')
@include('backlight')
@include('scripts')

@if (request()->has('done'))

    <script type="text/javascript">
        $(document).ready(function() {
                ModalMessage('.contact-mail-true');
        });
    </script>
@endif
</body>
</html>
@endsection
