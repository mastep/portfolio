@extends('head')
@section('title', 'Корпоратив 2.0 - готовое решение для корпоративов')
@section('meta-description', 'Готовое решение превращающее корпоратив в захватывающее интерактивное событие.')
@section('meta-keywords', 'сайт визитка, разработка сайт визитки')
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

            <div class="stg-row stg-no-gap stg-top-gap"  style="overflow: hidden; border-radius: 2em; margin-top:10%; margin-bottom:5%">


                <video src="lotto/lib/videos/team-laughing.mp4" type="video/mp4" style="border-radius:unset;  padding:0;" playsinline loop muted reverce autoplay></video>

                <div class="stg-col-8" style="position: absolute;">
                    <div data-appear="fade-right" data-unload="fade-left">
                        <h1 style="margin: 5% 10% 0 10%">Корпоратив 2.0</h1>
                        <p style=" margin: 3% 10% 0 10%; color:#fff">
                            Готовое решение превращающее корпоратив в захватывающее интерактивное событие.
                            Фото сотрудников, розыгрыши подарков и незабываемые эмоции!
                            <br>
                            Требования к установке: ноутбук, браузер
                            <br><br>
                        <div class="stg-no-gap" style="padding-left: 10%">
                            <a href="lotto/" target="_blank" class="bringer-icon-link">
                                <div class="bringer-icon-wrap" style="background-color: #000;">
                                    <i class="bringer-icon bringer-icon-explore"></i>
                                </div>
                                <div class="bringer-icon-link-content">
                                    <h6>Демо версия
                                    </h6>
                                    <span class="bringer-label" >Рекомендуем см. на ноутбке</span>
                                </div>
                            </a><!-- .bringer-icon-link -->
                        </div>
                        </p>

                    </div>
                </div>
            </div>


            <!-- Section: Page Title -->
            <section>






                <!-- Meta -->
                <div class="bringer-hero-info-line" data-stagger-appear="fade-up" data-delay="200" data-stager-delay="100" data-unload="fade-up">

                </div><!-- .bringer-hero-info-line -->
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
