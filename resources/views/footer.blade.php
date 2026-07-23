<!-- Footer -->
<footer id="bringer-footer" data-appear="fade-up" data-unload="fade-down">
    <!-- Footer Widgets Area -->
    <div class="bringer-footer-widgets">
        <div class="stg-container">
            <div class="stg-row" data-stagger-appear="fade-left" data-stagger-delay="100">
                <div class="stg-col-5 stg-tp-col-12 stg-tp-bottom-gap-l">
                    <div class="bringer-info-widget">
                        <a href="./" class="bringer-logo footer-logo">
                            @if(App\Helpers\Helper::isDefProject())
                                <img class="footer-logo" src="img/logo-7lab_gray.svg" alt="bringer." width="106" alt="7lab.pro - Разработка сайта, интернет магазина, сайта визитики.">
                            @else
                                <img class="footer-logo" src="img/logo.png" alt="bringer." width="176" height="48">
                            @endif
                        </a>
                        <div class="bringer-info-description">Мы - команда увлеченных инженеров, разработчиков и дизайнеров, которые верят в силу креативности. Создаем it решения для бизнеса. Помогаем с автоматизацией процессов.
                        </div>
                    </div>
                </div>
                @include('footer-menu')
            </div><!-- .stg-row -->
        </div><!-- .stg-container -->
    </div><!-- .bringer-footer-widgets -->

    <!-- Footer Copyright Line -->
    <div class="bringer-footer-line stg-container">
        <div id="footer-text" class="stg-row">
            <div class="bringer-toggles-item--title stg-col-5 stg-m-col-6">
                    <div class="bringer-label">&copy;
                        7ЛАБ.ПРО
                        <span class="bringer-accent">.</span>
                    </div>
                <div class="stg-m-bottom-gap">2013 - {{date("Y")}}</div>
            </div>
        </div>
    </div><!-- bringer-footer-line -->
    <div class=" stg-container">
        <div class="stg-row">
            <div class="stg-col-12" style="opacity: 0.4; user-select: none; align-items: center; font-size: 12px; padding-bottom: 10px">
                <a href="./privacy">Политика конфиденциальности, г. Москва ИП 772370484120</a>
            </div>
        </div>
    </div>
</footer>
@if(!isset($_COOKIE['cookies-info']))
<div id="cookies-info">
    <div class="cookies-info-container">
        <a class="cookies-info-container-close"></a>
        Для корректной работы сайта мы используем <a href="https://browser.yandex.ru/help/ru/personal-data-protection/cookies.html?ysclid=m1s620d1jl584340576" target="_blank">cookie</a>.
        <br>Продолжая работу с сайтом Вы даете свое право на их использование и принимаете условия <a href="/privacy">политики обработки персональных данных</a>.

    </div>
</div>
@endif
