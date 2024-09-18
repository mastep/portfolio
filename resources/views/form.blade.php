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
        <section style="background: #FFFFFF; padding: 30px; border-radius:30px">

            <h1 class="bringer-page-title" data-split-appear="fade-up" data-split-unload="fade-up" style="color:#1e2128">Расчет проекта</h1>
            <p style="color:#d3b574">заполните форму, чтобы мы более подробно смогли понять, что Вам необходимо реализовать.</p>
                    <script src="https://forms.yandex.ru/_static/embed.js"></script><iframe src="https://forms.yandex.ru/u/66eb0c44068ff0525407e602/?iframe=1" frameborder="0" name="ya-form-66eb0c44068ff0525407e602" style="width:100%"></iframe>
        </section>

        <section>

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
