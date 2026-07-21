<!--AI VOICE-->
<button title="Поговорить с ИИ через микрофон" type="button" class="voice-stage" id="voiceStage" aria-label="Начать говорить">
    <span class="voice-stage__rings" aria-hidden="true">
        <span class="voice-stage__ring"></span>
        <span class="voice-stage__ring voice-stage__ring--delay"></span>
    </span>

    <div class="voice-stage__icon--mic voice-stage__icon">
        <div class="ai-voice-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M12 14a3 3 0 0 0 3-3V6a3 3 0 1 0-6 0v5a3 3 0 0 0 3 3Z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M19 11a7 7 0 0 1-14 0" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            <path d="M12 18v3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
        </svg>
    </div>

    <svg class="voice-stage__icon voice-stage__icon--loading" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2.2" opacity="0.25"/>
        <path d="M21 12a9 9 0 0 0-9-9" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
    </svg>
</button>

<style>
    /* 1. БАЗОВАЯ КНОПКА (КРУГ) */
    button.voice-stage {
        width: 52px;
        height: 52px;
        position: fixed;
        z-index: 9999;
        appearance: none;
        -webkit-appearance: none;
        border: none;
        outline: none;
        border-radius: 50% !important;
        display: grid !important;
        place-items: center;
        cursor: pointer;
        color: #fff;
        background: #3f6ee9 !important;
        padding: 0 !important;
        overflow: visible;

        right: 30px;
        bottom: 100px;
        margin: 0;
        transition: all .5s ease-in-out;
    }

    body.intro-screen button.voice-stage{
        z-index: 100000;
        right:50%;
        margin-right: -24px;
    }


    button.voice-stage:not(.is-recording):not(.is-loading)::before{
        content: 'AI';
        font-size: 18px;
        width: 300px;
        position: absolute;
    }

    button.voice-stage.is-ai::before{
        content: '' !important;
    }


    button.voice-stage:not(.is-recording):not(.is-loading)::after{
        content: 'Поговорить';
        bottom:-15px;
        font-size: 12px;
        position: absolute;
    }

    button.voice-stage:hover {
        transform: scale(1.05);
        box-shadow:
            0 16px 36px rgba(15, 76, 180, 0.45),
            inset 0 1px 0 rgba(255, 255, 255, 0.3);
    }

    /* 2. СОСТОЯНИЯ КНОПКИ (ЦВЕТА И АНИМАЦИИ) */
    button.voice-stage.is-recording {
        border-color: #FFFFFF;
        background: linear-gradient(145deg, #e11d48, #be123c) !important;
        animation: mic-pulse 1.4s ease-out infinite;
    }

    button.voice-stage.is-loading {
        background: linear-gradient(145deg, #64748b, #475569) !important;
        cursor: default;
        pointer-events: none;
    }

    button.voice-stage.is-ai {
        background: linear-gradient(145deg, #0ea5e9, #6366f1) !important;
        cursor: default;
        pointer-events: none;
    }

    /* 3. УПРАВЛЕНИЕ ОТОБРАЖЕНИЕМ ИКОНОК (ИКОНКИ МЕНЬШЕ КРУГА) */
    .voice-stage__icon {
        grid-area: 1 / 1;
        width: 45%;  /* Иконка занимает 45% от размера кнопки */
        height: 45%;
        display: none;
        justify-content: center;
        align-items: center;
    }

    /* Показываем контейнер микрофона во всех состояниях, кроме загрузки и ИИ */
    button.voice-stage:not(.is-loading) .voice-stage__icon--mic {
        display: flex;
    }

    /* ЛОГИКА ПЕРЕКЛЮЧЕНИЯ ИКОНОК */
    /* По умолчанию (БЕЗ класса записи): линии видны, микрофон скрыт */
    button.voice-stage:not(.is-recording) .ai-voice-icon {
        display: flex;
    }
    button.voice-stage:not(.is-recording) .voice-stage__icon--mic svg {
        display: none;
    }

    /* При записи (С классом .is-recording): микрофон виден, линии скрыты */
    button.voice-stage.is-recording .ai-voice-icon {
        display: none;
    }
    button.voice-stage.is-recording .voice-stage__icon--mic svg {
        display: block;
    }

    /* Спиннер загрузки */
    button.voice-stage.is-loading .voice-stage__icon--loading {
        display: block;
        animation: spin 0.85s linear infinite;
    }

    .voice-stage__icon svg {
        width: 100%;
        height: 100%;
    }

    /* 4. АНИМАЦИЯ ГОЛОСОВЫХ ВОЛН (ДЕФОЛТНОЕ СОСТОЯНИЕ) */
    .ai-voice-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5.5px;
        width: 100%;
        height: 100%;
    }

    .ai-voice-icon::before,
    .ai-voice-icon::after,
    .ai-voice-icon span {
        content: '';
        width: 3px;
        height: 40%;
        border-radius: 2px;
        background: #ffffff;
        animation: voiceWave 1.2s ease-in-out infinite;
    }

    .ai-voice-icon::before { animation-delay: 0.1s; }
    .ai-voice-icon span:nth-child(1) { height: 70%; animation-delay: 0.3s; }
    .ai-voice-icon span:nth-child(2) { height: 95%; animation-delay: 0.6s; }
    .ai-voice-icon span:nth-child(3) { height: 60%; animation-delay: 0.2s; }
    .ai-voice-icon::after { animation-delay: 0.4s; }

    /* 5. ЭФФЕКТЫ ДЛЯ СОСТОЯНИЯ AI (КОЛЬЦА ВОКРУГ) */
    .voice-stage__rings {
        display: none;
        position: absolute;
        inset: 0;
        pointer-events: none;
        z-index: 0;
    }

    button.voice-stage.is-ai .voice-stage__rings {
        display: block;
    }

    .voice-stage__ring {
        position: absolute;
        inset: 0;
        border-radius: 50%;
        border: 2px solid rgba(99, 102, 241, 0.45);
        animation: ai-ripple 1.8s ease-out infinite;
    }

    .voice-stage__ring--delay {
        animation-delay: 0.9s;
    }

    /* KEYFRAMES */
    @keyframes mic-pulse {
        0% { box-shadow: 0 0 0 0 rgba(225, 29, 72, 0.45), 0 12px 28px rgba(190, 18, 60, 0.4); }
        70% { box-shadow: 0 0 0 18px rgba(225, 29, 72, 0), 0 12px 28px rgba(190, 18, 60, 0.4); }
        100% { box-shadow: 0 0 0 0 rgba(225, 29, 72, 0), 0 12px 28px rgba(190, 18, 60, 0.4); }
    }

    @keyframes ai-ripple {
        0% { transform: scale(1); opacity: 0.8; }
        100% { transform: scale(1.5); opacity: 0; }
    }

    @keyframes spin {
        to { transform: rotate(360deg); }
    }

    @keyframes voiceWave {
        0%, 100% { transform: scaleY(0.4); }
        50% { transform: scaleY(1); }
    }
</style>



<script>const voiceStage = document.getElementById('voiceStage');

    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    if (!SpeechRecognition) {
        alert("Ваш браузер не поддерживает распознавание речи. Используйте Chrome или Яндекс.Браузер.");
    }

    const recognition = new SpeechRecognition();
    recognition.lang = 'ru-RU';
    recognition.interimResults = false;

    let isRecording = false;
    let isBusy = false;
    let wasHelloAudio=false;

    // СОСТОЯНИЕ СЕССИИ — читается из Laravel-сессии при рендере страницы
    let isNewUserSession = true;

    const csrfToken = '{{ csrf_token() }}';
    const aiFetchHeaders = {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': csrfToken,
        'X-Requested-With': 'XMLHttpRequest'
    };

    const wakeupPromise = fetch('/ai/wakeup', {
        method: 'POST',
        headers: aiFetchHeaders,
        credentials: 'same-origin'
    })
        .then(res => res.json())
        .then(data => {
            if(isNewUserSession){
                isNewUserSession = !!data.is_new_session;
            }

            console.log('Ollama прогрета. Новая сессия:', isNewUserSession);
            return data;
        })
        .catch(err => {
            console.error('Ошибка прогрева:', err);
            isNewUserSession = false;
        });

    // УПРАВЛЕНИЕ ЗВУКОМ (Web Audio API Очередь)
    let audioCtx = null;
    let mp3Queue = [];        // Очередь AudioBuffer для последовательного воспроизведения
    let isAudioPlaying = false;
    let currentSource = null; // Хранилище текущего аудиоузла для возможности остановки

    /**
     * Инициализация контекста Web Audio API
     */
    function initAudioContext() {
        if (!audioCtx) {
            audioCtx = new (window.AudioContext || window.webkitAudioContext)();
        }
        if (audioCtx.state === 'suspended') {
            audioCtx.resume();
        }
    }

    /**
     * УПРАВЛЕНИЕ ИНТЕРФЕЙСОМ КНОПКИ (UI кубики)
     */
    function showMic() {
        voiceStage.classList.remove('is-recording', 'is-loading', 'is-ai');
        voiceStage.setAttribute('aria-label', 'Начать говорить');
        isBusy = false;
    }

    function showRecording() {
        voiceStage.classList.remove('is-loading', 'is-ai');
        voiceStage.classList.add('is-recording');
        voiceStage.setAttribute('aria-label', 'Говорите...');
    }

    function showLoading() {
        voiceStage.classList.remove('is-recording', 'is-ai');
        voiceStage.classList.add('is-loading');
        voiceStage.setAttribute('aria-label', 'Обработка запроса...');
    }

    function showAi() {
        voiceStage.classList.remove('is-recording', 'is-loading');
        voiceStage.classList.add('is-ai');
        voiceStage.setAttribute('aria-label', 'Ассистент отвечает');
    }

    /**
     * Добавление аудио (URL файла или бинарного чанка) в очередь Web Audio API
     */
    async function enqueueAudioChunk(source) {
        initAudioContext();
        try {
            let arrayBuffer;
            if (typeof source === 'string') {
                // Если передан URL (для статичного mp3 приветствия)
                wasHelloAudio=true;
                const response = await fetch(source);
                arrayBuffer = await response.arrayBuffer();
            } else {
                // Если передан ArrayBuffer (для динамических чанков из стрима)
                arrayBuffer = source;
            }

            // Декодируем MP3 структуру в сырой аудио-буфер
            const audioBuffer = await audioCtx.decodeAudioData(arrayBuffer);
            mp3Queue.push(audioBuffer);

            if (!isAudioPlaying) {
                playNextChunk();
            }
        } catch (e) {
            console.error("Ошибка декодирования MP3 данных:", e);
        }
    }

    /**
     * Последовательное воспроизведение чанков из очереди
     */
    function playNextChunk() {
        if (mp3Queue.length === 0) {
            isAudioPlaying = false;

            // ПРОВЕРКА ЗДЕСЬ: Если это была новая сессия и приветствие только что завершилось
            if (wasHelloAudio) {
                console.log("Приветствие завершено. Показ loading");
                wasHelloAudio = false;
                showLoading(); // Включаем статус загрузки (ожидания ответа)
            } else {
                // Если это обычное аудио или приветствие уже было, просто возвращаем микрофон
                showMic();
            }
            return;
        }

        isAudioPlaying = true;
        showAi(); // Включаем пульсацию ИИ на кнопке

        const buffer = mp3Queue.shift();
        currentSource = audioCtx.createBufferSource();
        currentSource.buffer = buffer;
        currentSource.connect(audioCtx.destination);

        // Бесшовный переход к следующему звуку строго по окончании текущего
        currentSource.onended = () => {
            playNextChunk();
        };

        currentSource.start(0);
    }

    /**
     * Экстренная остановка ИИ (если пользователь перебил бота кликом)
     */
    function stopAllAudio() {
        mp3Queue = [];
        isAudioPlaying = false;
        if (currentSource) {
            try { currentSource.stop(); } catch(e){}
            currentSource = null;
        }
    }



    /**
     * 2. ОБРАБОТКА КЛИКА ПО КНОПКЕ
     */
    voiceStage.addEventListener('click', () => {
        if (isBusy) {
            // Если бот говорит в данный момент, клик сработает как кнопка "Стоп"
            stopAllAudio();
            showMic();
            return;
        }

        if (!isRecording) {
            initAudioContext();
            try {
                recognition.start();
            } catch (e) {
                console.error("Не удалось запустить распознавание:", e);
            }
        } else {
            recognition.stop();
        }
    });

    // События записи голоса
    recognition.onstart = () => {
        isRecording = true;
        showRecording();
    };

    recognition.onend = () => {
        isRecording = false;
        if (!isBusy) showMic();
    };

    recognition.onerror = (event) => {
        console.error("Ошибка распознавания речи браузером:", event.error);
        showMic();
    };

    /**
     * 3.ОБРАБОТКА РЕЗУЛЬТАТА И ОТПРАВКА НА СЕРВЕР
     */
    recognition.onresult = async (event) => {
        const resultText = event.results[0][0].transcript;
        if (!resultText.trim()) return;

        isBusy = true;
        showLoading(); // Включаем спиннер загрузки


        try {
            if(isNewUserSession){
                enqueueAudioChunk('/audio/defaultAIspeech.mp3');
                isNewUserSession=false;
            }
            const response = await fetch('/ai/chat', {
                method: 'POST',
                headers: aiFetchHeaders,
                credentials: 'same-origin',
                body: JSON.stringify({ prompt: resultText })
            });

            if (!response.ok) throw new Error("Ошибка бэкенда");

            const reader = response.body.getReader();

            // Потоковое чтение MP3-чанков от Laravel по мере их генерации
            while (true) {
                const { done, value } = await reader.read();
                if (done) break; // Стрим ответа полностью завершен

                // Отправляем в очередь — он дождётся, пока доиграет стартовое приветствие
                const chunkBuffer = value.buffer.slice(value.byteOffset, value.byteOffset + value.byteLength);

                await enqueueAudioChunk(chunkBuffer);
            }

        } catch (error) {
            console.error("Критическая ошибка чата:", error);
            // Если сервер упал, но приветствие играет — даем ему закончить. Иначе возвращаем микрофон.
            if (!isAudioPlaying) showMic();
        }
    };
</script>
