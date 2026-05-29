<!-- Intro -->
<div class="video-wrapper">
    <video id="introVideo" class="bg-video" autoplay muted playsinline loop preload="auto">
        <source src="/video/project-video5.mp4" type="video/mp4">
    </video>
</div>

<script>
    const video = document.getElementById('introVideo');
    const bringer_header = document.getElementById('bringer-header');
    const bringer_main = document.getElementById('bringer-main');
    const videoWrapper = document.querySelector('.video-wrapper');
    let videoTimeout;

    function hideVideo() {
        videoWrapper.classList.add('is-hidden');
        bringer_header.style.display = 'block';
        bringer_main.style.display = 'block';
        clearTimeout(videoTimeout);
    }

    // Запускаем таймер только ПОСЛЕ реального старта видео
    video.addEventListener('playing', () => {
        videoTimeout = setTimeout(hideVideo, 4000); // 4 секунды показа
    });

    // Резервный скрыватель на случай, если видео заблокировано браузером или не грузится вообще
    window.addEventListener('load', () => {
        setTimeout(() => {
            if (!videoWrapper.classList.contains('is-hidden')) {
                hideVideo();
            }
        }, 6000); // Скроет интро в любом случае через 6 сек после полной загрузки страницы
    });
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
        z-index: 10000;
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
        font-size: 1em;
        content: 'Экспертная инженерия цифровых решений';
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
        visibility: hidden; /* Заменяет display:none, ждет окончания transition */
        transition: opacity 3s ease, visibility 3s ease;
    }
</style>
