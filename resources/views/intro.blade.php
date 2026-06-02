<!-- Intro -->
<style>
    /* Включаем плавную прокрутку для всей страницы при клике на любые якоря */
    html {
        scroll-behavior: smooth;
    }

    .iconScroll {
        position: absolute;
        border-radius: 30px;
        width: 30px;
        top: 60%;
        left: 50%;
        margin-left: -15px; /* Половина ширины для точного центрирования */
        z-index: 10001;     /* Выносим ссылку поверх видео, чтобы клик работал */
        display: block;
        animation: floatAnimation 3s ease-in-out infinite; /* Ваша анимация */
    }

    /* Картинка внутри ссылки подстраивается под размеры контейнера */
    .iconScroll img {
        width: 100%;
        display: block;
    }

    @keyframes floatAnimation {
        0% {
            transform: translateY(0); /* Исходное положение вверху */
        }
        50% {
            transform: translateY(10px); /* Смещение вниз на 30 пикселей в середине цикла */
        }
        100% {
            transform: translateY(0); /* Возврат в исходное положение вверху */
        }
    }

    /* Intro */
    body {
        overflow-y: scroll;
        min-height: 200vh; /* Странице нужна высота, чтобы было куда скроллить */
    }

    /* Контейнер-обертка на весь экран */
    .video-wrapper {
        position: fixed;
        inset: 0;
        width: 100%;
        height: 100%;
        z-index: 10000;
        transition: visibility 0.3s ease;
        background-color: var(--bringer-s-body-bg);
        will-change: opacity; /* Оптимизация производительности при скролле */
    }

    /* Ваше исходное видео */
    #introVideo {
        border-radius: unset;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Логотип строго по центру поверх видео */
    .video-wrapper::after {
        color: #fff;
        text-align: center;
        font-size: 1em;
        content: 'Лаборатория AI-инженерии для бизнеса';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 50%;
        height: 250px;
        max-width: 400px;
        background: url('/img/logo-7lab.svg') center/contain no-repeat;
        pointer-events: none;
        animation: fadeInLogo 3s ease forwards;
    }

    /* Настройка анимации появления */
    @keyframes fadeInLogo {
        from { opacity: 0; }
        to { opacity: 1; }
    }
</style>
<div class="video-wrapper">
    <!-- Иконка обернута в ссылку-якорь -->
    <a href="#main-content" class="iconScroll">
        <img src="/img/icon-scroll.png" alt="Scroll Down" onclick="document.documentElement.scrollTop=30+document.documentElement.scrollTop">
    </a>
    <video id="introVideo" class="bg-video" autoplay muted playsinline loop preload="metadata">
        <source src="/video/project-video5.mp4" type="video/mp4" media="(min-width: 769px)">
        <source src="/video/project-video5-mobile.mp4" type="video/mp4" media="(max-width: 768px)">
    </video>
</div>

<script>
    const videoWrapper = document.querySelector('.video-wrapper');
    const maxScroll = 100; // Дистанция скролла в пикселях, за которую видео полностью исчезнет

    // Плавное исчезновение при скролле
    window.addEventListener('scroll', () => {
        const scrollTop = window.scrollY || document.documentElement.scrollTop;

        // Вычисляем прозрачность (от 1 до 0)
        let opacity = 1 - (scrollTop / maxScroll);

        // Ограничиваем значения в диапазоне [0, 1]
        if (opacity < 0) opacity = 0;
        if (opacity > 1) opacity = 1;

        videoWrapper.style.opacity = opacity;

        // Полностью отключаем видимость и интерактивность, когда видео прозрачно
        if (opacity === 0) {
            videoWrapper.style.visibility = 'hidden';
            videoWrapper.style.pointerEvents = 'none';
        } else {
            videoWrapper.style.visibility = 'visible';
            videoWrapper.style.pointerEvents = 'auto';
        }
    });
</script>
