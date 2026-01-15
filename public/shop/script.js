// Конфигурация видео для разных разрешений экрана
const VIDEO_CONFIG = {
    // Видео для десктоп версии (1920px и выше)
    desktop: {
        slide0: 'videos/desktop/slide1.mp4',
        slide1: 'videos/desktop/slide2.mp4',
        slide2: 'videos/desktop/slide3.mp4'
    },
    // Видео для планшетов (768px - 1024px)
    tablet: {
        slide0: 'videos/tablet/slide1.mp4',
        slide1: 'videos/tablet/slide2.mp4',
        slide2: 'videos/tablet/slide3.mp4'
    },
    // Видео для мобильных устройств (до 768px)
    mobile: {
        slide0: 'videos/mobile/slide1.mp4',
        slide1: 'videos/mobile/slide2.mp4',
        slide2: 'videos/mobile/slide3.mp4'
    }
};

// Функция для определения типа устройства
function getDeviceType() {
    const width = window.innerWidth;
    if (width >= 1024) {
        return 'desktop';
    } else if (width >= 768) {
        return 'tablet';
    } else {
        return 'mobile';
    }
}


// Инициализация слайдера
class Slider {
    constructor() {
        this.currentSlide = 0;
        this.slides = document.querySelectorAll('.slide-item');
        this.totalSlides = this.slides.length;
        this.videoTime = 0; // Текущее время видео для синхронизации

        this.init();
    }

    init() {

        // Синхронизируем изображения карусели с изображениями из product-preview
        this.syncCarouselImages();

        // Обработчики для карусели навигации
        document.querySelectorAll('.carousel-item').forEach((item, index) => {
            item.addEventListener('click', () => this.goToSlide(index));
        });



        // Запускаем отслеживание времени видео для синхронизации
        this.startVideoSync();

        // Обработка изменения размера окна
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                const savedTime = this.videoTime;
                // Восстанавливаем время видео после перезагрузки
                setTimeout(() => {
                    this.videoTime = savedTime;
                    this.syncVideoTime();
                }, 100);
            }, 250);
        });
    }

    // Синхронизация изображений карусели с изображениями из product-preview
    syncCarouselImages() {
        this.slides.forEach((slide, index) => {
            const productPreview = slide.querySelector('.product-preview');
            const carouselItem = document.querySelector(`.carousel-item[data-slide="${index}"]`);

            if (productPreview && carouselItem) {
                const carouselImage = carouselItem.querySelector('.carousel-image');
                if (carouselImage && productPreview.src) {
                    carouselImage.src = productPreview.src;
                    carouselImage.alt = productPreview.alt || `Слайд ${index + 1}`;
                }
            }
        });
    }

    // Отслеживание времени текущего видео для синхронизации
    startVideoSync() {
        setInterval(() => {
            const activeSlide = this.slides[this.currentSlide];
            const video = activeSlide.querySelector('.slide-video');
            if (video && !video.paused) {
                this.videoTime = video.currentTime;
            }
        }, 100); // Обновляем каждые 100мс
    }

    // Синхронизация времени видео при переключении слайдов
    syncVideoTime() {
        this.slides.forEach((slide, index) => {
            const video = slide.querySelector('.slide-video');
            if (video) {
                video.currentTime = this.videoTime;
            }
        });
    }

    showSlide(index) {
        // Сохраняем текущее время видео перед переключением
        const currentVideo = this.slides[this.currentSlide].querySelector('.slide-video');
        if (currentVideo) {
            this.videoTime = 0;
        }

        // Скрываем все слайды и их product-info
        this.slides.forEach((slide, i) => {
            slide.classList.remove('active');

        });

        // Показываем текущий слайд
        this.slides[index].classList.add('active');

        // Синхронизируем и запускаем видео нового слайда
        const newVideo = this.slides[index].querySelector('.slide-video');
        if (newVideo) {
            newVideo.currentTime = this.videoTime;
            newVideo.play().catch(e => {
                // Игнорируем ошибки автовоспроизведения
                console.log('Video autoplay prevented:', e);
            });
        }

        // Обновляем карусель навигации
        document.querySelectorAll('.carousel-item').forEach((item, i) => {
            item.classList.toggle('active', i === index);
        });

        // Показываем product-info для текущего слайда сразу
        const currentProductInfo = this.slides[index].querySelector('.product-info');
        if (currentProductInfo) {

        }
    }

    nextSlide() {
        this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
        this.showSlide(this.currentSlide);
    }

    prevSlide() {
        this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
        this.showSlide(this.currentSlide);
    }

    goToSlide(index) {
        this.currentSlide = index;
        this.showSlide(this.currentSlide);
    }

}

// Инициализация бургер-меню
class BurgerMenu {
    constructor() {
        this.burgerBtn = document.getElementById('burgerBtn');
        this.menu = document.getElementById('menu');
        this.isOpen = false;

        this.init();
    }

    init() {
        this.burgerBtn.addEventListener('click', () => this.toggle());

        // Закрываем меню при клике вне его области (для мобильных)
        document.addEventListener('click', (e) => {
            if (this.isOpen &&
                !this.menu.contains(e.target) &&
                !this.burgerBtn.contains(e.target) &&
                window.innerWidth <= 1024) {
                this.close();
            }
        });

        // Закрываем меню при изменении размера окна (если перешли на десктоп)
        window.addEventListener('resize', () => {
            if (window.innerWidth > 1024 && this.isOpen) {
                this.close();
            }
        });
    }

    toggle() {
        if (this.isOpen) {
            this.close();
        } else {
            this.open();
        }
    }

    open() {
        this.menu.classList.add('active');
        this.burgerBtn.classList.add('active');
        this.isOpen = true;
    }

    close() {
        this.menu.classList.remove('active');
        this.burgerBtn.classList.remove('active');
        this.isOpen = false;
    }
}

// Инициализация при загрузке страницы
document.addEventListener('DOMContentLoaded', () => {
    new Slider();
    new BurgerMenu();
});

