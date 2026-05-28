<!-- Intro -->
<div class="video-wrapper">
    <video id="introVideo"
           class="bg-video"
           autoplay
           muted
           playsinline
           preload="auto" class="bg-video">
        <source src="./video/project-video5.mp4" type="video/mp4">
    </video>

</div>

<script>
    const video = document.getElementById('introVideo');
    const videoWrapper = document.querySelector('.video-wrapper');

    // Функция, которая скрывает плеер
    function hideVideo() {
        videoWrapper.classList.add('is-hidden');
        clearTimeout(videoTimeout); // Отменяем таймер, если видео закончилось раньше
    }

    // 1. Скрытие по окончании видео
    video.addEventListener('ended', hideVideo);

    // 2. Скрытие ровно через 8 секунд (8000 миллисекунд)
    const videoTimeout = setTimeout(hideVideo, 8000);
</script>
