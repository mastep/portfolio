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
        /* ИСПРАВЛЕНО: Современное и легкое центрирование вместо margin-left */
        left: 50%;
        z-index: 10001;
        display: block;

        /* ОПТИМИЗАЦИЯ ДЛЯ МОБИЛЬНЫХ: Подсказываем браузеру вынести элемент на GPU */
        will-change: transform;

        /* Ваша анимация */
        animation: floatAnimation 3s ease-in-out infinite;
    }

    /* Картинка внутри ссылки подстраивается под размеры контейнера */
    .iconScroll img {
        width: 100%;
        display: block;
        /* Убираем возможные артефакты размытия при анимации на мобильных */
        backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
    }

    @keyframes floatAnimation {
        0% {
            /* ИСПРАВЛЕНО: Добавлено центрирование (-50%) и translate3d для включения GPU */
            transform: translate3d(-50%, 0, 0);
        }
        50% {
            /* Смещение вниз на 10 пикселей с аппаратным ускорением */
            transform: translate3d(-50%, 10px, 0);
        }
        100% {
            transform: translate3d(-50%, 0, 0);
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
        @php
            $titles = ['Интегрируем ИИ в бизнес и создаем e-com',
  'Внедряем ИИ-агентов в проекты для экономии на найме сотрудников',
  'Создаем AI-ботов и Mini Apps с поддержкой 24/7',
  'Поручаем рутинные бизнес-задачи ИИ-агентам для оптимизации расходов',
  'Автоматизируем общение с клиентами через умных ИИ-ассистентов в Telegram',
  'Сокращаем время обработки лидов в 3 раза силами ИИ-сотрудников',
  'Переводим рутину на ИИ для автоматического ввода данных и отчётов',
  'Превращаем Telegram-канал в прибыльный инструмент продаж с Mini Apps',
  'Обучаем чат-ботов нового поколения на базе знаний вашей компании',
  'Создаем MVP за 5 дней для быстрого старта IT-решений',
  'Запускаем современные интернет-магазины под ключ',
  'Прорабатываем абсолютно все технические вопросы от эквайринга до серверов',
  'Создаем сайты-визитки и интернет-резиденции в кратчайший срок',
  'Разрабатываем надежные API — цифровые мосты между вашими программами',
  'Запускаем корпоративные порталы для автоматизации внутренних процессов',
  'Тестируем гипотезы быстро с помощью оперативной разработки MVP',
  'Масштабируем e-commerce проекты под любые миллионные нагрузки',
  'Подключаем CRM, службы доставки и платежные шлюзы без швов',
  'Оптимизируем веб-ресурсы для достижения максимальной конверсии',
  'Проектируем отказоустойчивую архитектуру для стабильной работы в пик продаж',
  'Предоставляем экспертный опыт в e-commerce без найма в штат',
  'Строим системы, которые работают за вас: продают и обслуживают',
  'Применяем технологии Docker, Kafka, PHP и Laravel для стабильного роста',
  'Снижаем технические риски за счет чистого кода с гарантией',
  'Управляем полным циклом разработки от аналитики до релиза',
  'Гарантируем безопасность данных с Docker и изолированными серверами',
  'Контролируем прозрачный процесс работы на еженедельных демо-стендах',
  'Дарим технический аудит для точного поиска уязвимостей вашего сайта'
            ];
        @endphp
        content: 'Спроси AI-бота или листай вниз и ищи информацию самостоятельно на сайте';
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
    document.body.classList.add('intro-screen');

    window.addEventListener('load', () => {
        if (window.location.hash === '#ourPortfolio') {
            const targetSection = document.getElementById('ourPortfolio');
            if (targetSection) {
                // Небольшая задержка, чтобы дать загрузиться всем элементам шаблона
                setTimeout(() => {
                    targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }, 100);
            }
        }
    });
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
            document.body.classList.remove('intro-screen');
            videoWrapper.style.visibility = 'hidden';
            videoWrapper.style.pointerEvents = 'none';
        } else {
            document.body.classList.add('intro-screen');
            videoWrapper.style.visibility = 'visible';
            videoWrapper.style.pointerEvents = 'auto';
        }
    });
</script>
