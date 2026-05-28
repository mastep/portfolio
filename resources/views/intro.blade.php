<!-- Intro -->
<div class="video-wrapper">
    <video id="introVideo"
           class="bg-video"
           autoplay
           muted
           playsinline
           preload="auto">
        <source src="./video/project-video5.mp4" type="video/mp4">
    </video>

</div>

<script defer>
    const video = document.getElementById('introVideo');
    const bringer_header = document.getElementById('bringer-header');
    const bringer_main = document.getElementById('bringer-main');
    const videoWrapper = document.querySelector('.video-wrapper');

    // Функция, которая скрывает плеер
    function hideVideo() {
        videoWrapper.classList.add('is-hidden');
        bringer_header.style.display = 'block';
        bringer_main.style.display = 'block';
        clearTimeout(videoTimeout); // Отменяем таймер, если видео закончилось раньше
    }

    // 1. Скрытие по окончании видео
    video.addEventListener('ended', hideVideo);

    // 2. Скрытие ровно через 8 секунд (8000 миллисекунд)
    const videoTimeout = setTimeout(hideVideo, 8000);
</script>

<style>
    /*Intro*/
    body {
        overflow-y: scroll;
    }
    #bringer-header, #bringer-main {
        display: none;
    }
    /* Контейнер-обертка на весь экран */
    .video-wrapper {
        position: fixed;
        inset: 0;
        width: 100%;
        height: 100%;
        z-index: 10100;
        transition: opacity 0.6s ease;
        background-color:var(--bringer-s-body-bg);
    }

    /* Ваше исходное видео */
    #introVideo {
        border-radius: unset;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: opacity 3s ease;
    }

    /* Логотип строго по центру поверх видео */
    .video-wrapper::after {
        color:#fff;
        text-align: center;
        font-size: 1.2em;
        content: 'Экспертная инженерия цифрового стиля';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

        /* Размеры вашего логотипа */
        width: 50%;
        height: 250px;
        max-width: 400px;

        /* Путь к картинке логотипа */
        background: url('/img/logo-7lab.svg') center/contain no-repeat;

        /* Чтобы клики проходили сквозь логотип к видео (если нужно) */
        pointer-events: none;
        animation: fadeInLogo 3s ease forwards;
    }
    /* Настройка анимации появления */
    @keyframes fadeInLogo {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .video-wrapper.is-hidden {
        opacity: 0;
        pointer-events: none;
        transition: opacity 3s ease;
    }
</style>
