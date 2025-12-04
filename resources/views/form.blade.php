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
            <p >заполните форму или просто <a href='https://t.me/pro_7lab'>отправьте голосовое <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 240.1 240.1">
                    <linearGradient id="Oval_1_" gradientUnits="userSpaceOnUse" x1="-838.041" y1="660.581" x2="-838.041" y2="660.3427" gradientTransform="matrix(1000 0 0 -1000 838161 660581)">
                        <stop offset="0" style="stop-color:#2AABEE"/>
                        <stop offset="1" style="stop-color:#229ED9"/>
                    </linearGradient>
                    <circle fill-rule="evenodd" clip-rule="evenodd" fill="url(#Oval_1_)" cx="120.1" cy="120.1" r="120.1"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M54.3,118.8c35-15.2,58.3-25.3,70-30.2 c33.3-13.9,40.3-16.3,44.8-16.4c1,0,3.2,0.2,4.7,1.4c1.2,1,1.5,2.3,1.7,3.3s0.4,3.1,0.2,4.7c-1.8,19-9.6,65.1-13.6,86.3 c-1.7,9-5,12-8.2,12.3c-7,0.6-12.3-4.6-19-9c-10.6-6.9-16.5-11.2-26.8-18c-11.9-7.8-4.2-12.1,2.6-19.1c1.8-1.8,32.5-29.8,33.1-32.3 c0.1-0.3,0.1-1.5-0.6-2.1c-0.7-0.6-1.7-0.4-2.5-0.2c-1.1,0.2-17.9,11.4-50.6,33.5c-4.8,3.3-9.1,4.9-13,4.8 c-4.3-0.1-12.5-2.4-18.7-4.4c-7.5-2.4-13.5-3.7-13-7.9C45.7,123.3,48.7,121.1,54.3,118.8z"/>
                    </svg> </a>, чтобы мы более подробно смогли понять, что Вам необходимо реализовать.</p>
                    <script src="https://forms.yandex.ru/_static/embed.js"></script>
            <div class="frame-form-container">
                <iframe name="frame-form" id="frame-form" src="https://forms.yandex.ru/u/66eb0c44068ff0525407e602/?iframe=1" frameborder="0" name="ya-form-66eb0c44068ff0525407e602" style="width:100%"></iframe>
                <div class="frame-form-container-footer"></div>
                <style>
                    #bringer-footer{
                        display: none;
                    }
                    .frame-form-container{
                        position: relative;
                    }
                    .frame-form-container-footer{
                        background: #08090d;
                        position: absolute;
                        height: 62px;
                        width: 100%;
                        bottom: 0px;
                    }
                </style>


            </div>
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
