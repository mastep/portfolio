<!-- Mobile Header -->
<div class="bringer-mobile-header-inner">
    <a href="./" class="bringer-logo">

        @if(App\Helpers\Helper::isDefProject())
            <img class="logo-mobile" src="img/logo-7lab.svg" width="200">
            <img class="logo-mobile-xs" src="img/logo-7lab.svg" style="max-height: 40px">
        @else
            <img class="logo-mobile" src="img/logo.png" width="200">
            <img class="logo-mobile-xs" src="img/logo-mobile.png">
        @endif

    </a>
    <a href="/form" class="bringer-button  link-form" title="Это бесплатно">Рассчитать проект</a>
    <a href="#" class="bringer-mobile-menu-toggler">
        <i class="bringer-menu-toggler-icon">
            <span></span>
            <span></span>
            <span></span>
        </i>
    </a>
</div>
