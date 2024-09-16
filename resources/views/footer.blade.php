<!-- Footer -->
<footer id="bringer-footer" data-appear="fade-up" data-unload="fade-down">
    <!-- Footer Widgets Area -->
    <div class="bringer-footer-widgets">
        <div class="stg-container">
            <div class="stg-row" data-stagger-appear="fade-left" data-stagger-delay="100">
                <div class="stg-col-5 stg-tp-col-12 stg-tp-bottom-gap-l">
                    <div class="bringer-info-widget">
                        <a href="./" class="bringer-logo footer-logo">
                            <img class="footer-logo" src="img/logo.png" alt="bringer." width="176" height="48">
                        </a>
                        <div class="bringer-info-description">Мы - команда увлеченных разработчиков и дизайнеров, которые верят в силу креативности. Мы помогаем творческим людям создать сильную онлайн-аудиторию, которая демонстрирует их работы и рассказывает историю.</div>
                    </div>
                </div>
                @include('footer-menu')
            </div><!-- .stg-row -->
        </div><!-- .stg-container -->
    </div><!-- .bringer-footer-widgets -->

    <!-- Footer Copyright Line -->
    <div class="bringer-footer-line stg-container">
        <div id="footer-text" class="stg-row">
            <div class="bringer-toggles-item--title stg-col-3">
                <div class="bringer-label align-center">&copy; 2012 - @php echo date('Y');@endphp<span class="bringer-accent">.</span></div>
                <div class="align-center"><img width="20" src="/img/logo-min-white.png"></div></div>
        </div>
    </div><!-- bringer-footer-line -->
</footer>
