<!-- Intro -->
<div class="video-wrapper">
    <img class="iconScroll" src="/img/icon-scroll.png">
    <video id="introVideo" class="bg-video" autoplay muted playsinline loop preload="metadata">
        <source src="/video/project-video5.mp4" type="video/mp4">
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

<style>
    .iconScroll{
        position: absolute;
        width: 40px;
        border-radius: 30px;
        background-color: #fff;
        margin-left: auto;
        width: 30px;
        top:60%;
        left: 50%;
        margin-left: -30px;
        animation: floatAnimation 2s ease-in-out infinite;

    }

    @keyframes floatAnimation {
        0% {
            transform: translateY(0); /* Исходное положение вверху */
        }
        50% {
            transform: translateY(30px); /* Смещение вниз на 50 пикселей в середине цикла */
        }
        100% {
            transform: translateY(0); /* Возврат в исходное положение вверху */
        }
    }
    /*Intro*/
    body {
        overflow-y: scroll;
    }
    /* Контейнер-обертка на весь экран */
    .video-wrapper {
        position: fixed;
        inset: 0;
        width: 100%;
        height: 100%;
        z-index: 10000;
        /* Убрали transition для opacity, чтобы скролл не "тормозил" */
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
        content: 'Иженерная лаборатория цифровых решений';
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
