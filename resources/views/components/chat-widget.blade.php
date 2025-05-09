<div class="fixed bottom-4 right-4 z-50 chat-widget" x-data="chatWidgetData()">
    <!-- Кнопка открытия чата -->
    <button 
        @click="isOpen = !isOpen" 
        class="w-16 h-16 bg-yellow-400 hover:bg-yellow-500 rounded-full flex items-center justify-center shadow-lg transition-all duration-300"
        :class="{ 'rotate-45': isOpen }"
    >
        <svg x-show="!isOpen" class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
        </svg>
        <svg x-show="isOpen" class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>

    <!-- Окно чата -->
    <div 
        x-show="isOpen" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-y-10"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform translate-y-10"
        class="absolute bottom-20 right-0 w-80 sm:w-96 bg-[#3b1f1f] rounded-lg shadow-2xl overflow-hidden"
    >
        <!-- Заголовок -->
        <div class="bg-black bg-opacity-40 px-4 py-3 flex justify-between items-center">
            <h3 class="text-lg font-semibold text-yellow-400">Помощник по казахской культуре</h3>
            <button @click="isOpen = false" class="text-gray-400 hover:text-white">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Сообщения -->
        <div id="chat-widget-messages" class="h-80 overflow-y-auto p-4 text-white" x-ref="messagesContainer">
            <template x-if="messages.length === 0">
                <div class="message bot">
                    <div class="message-content bg-gray-700 text-white p-3 rounded-lg inline-block max-w-xs prose prose-invert prose-xs">
                        Сәлем! Қазақ мәдениеті туралы сұрақтарыңыз болса көмектесемін. Чем могу помочь?
                    </div>
                </div>
            </template>
            
            <template x-for="(message, index) in messages" :key="index">
                <div :class="{ 'text-right': message.isUser, 'my-2': true }">
                    <div 
                        :class="{
                            'message-content p-3 rounded-lg inline-block max-w-xs': true,
                            'bg-yellow-400 text-black': message.isUser,
                            'bg-gray-700 text-white prose prose-invert prose-xs': !message.isUser
                        }" 
                        x-html="message.content">
                    </div>
                </div>
            </template>
            
            <div x-show="isLoading" class="message bot my-2">
                <div class="message-content bg-gray-700 text-white p-3 rounded-lg inline-block max-w-xs">
                    <div class="flex space-x-1">
                        <div class="w-2 h-2 rounded-full bg-gray-300 animate-bounce"></div>
                        <div class="w-2 h-2 rounded-full bg-gray-300 animate-bounce" style="animation-delay: 0.1s"></div>
                        <div class="w-2 h-2 rounded-full bg-gray-300 animate-bounce" style="animation-delay: 0.2s"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ввод сообщения -->
        <div class="p-3 border-t border-gray-700">
            <div class="flex">
                <input
                    type="text"
                    x-model="userInput"
                    @keydown.enter="sendMessage()"
                    class="flex-1 px-3 py-2 bg-gray-800 border border-gray-700 rounded-l-lg text-white focus:outline-none"
                    placeholder="Напишите ваш вопрос..."
                >
                <button
                    @click="sendMessage()"
                    class="px-4 py-2 bg-yellow-400 text-black font-medium rounded-r-lg hover:bg-yellow-500 focus:outline-none transition"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                    </svg>
                </button>
            </div>
            <div class="text-xs text-gray-400 mt-2 text-center">
                <a href="{{ route('chatbot.index') }}" class="hover:text-yellow-300">Открыть полную версию чата</a>
            </div>
        </div>
    </div>
</div>

@once
@push('scripts')
<script>
document.addEventListener('alpine:init', () => {
    // Сначала проверяем и инициализируем marked, если необходимо
    if (typeof marked === 'undefined') {
        console.error('Marked.js не загружен!');
        // Загрузим marked.js динамически, если он не загружен
        const script = document.createElement('script');
        script.src = 'https://cdn.jsdelivr.net/npm/marked@4.3.0/marked.min.js';
        script.onload = function() {
            console.log('Marked.js успешно загружен динамически');
            initMarked();
        };
        document.head.appendChild(script);
    } else {
        initMarked();
    }
    
    function initMarked() {
        // Настройка marked.js для рендеринга Markdown
        marked.setOptions({
            breaks: true,        // Переносы строк в markdown преобразуются в <br>
            gfm: true,           // GitHub Flavored Markdown
            headerIds: false,    // Отключаем генерацию id для заголовков
            mangle: false,       // Отключаем экранирование email адресов
            sanitize: false,     // Разрешаем HTML
            silent: true         // Не выводим ошибки в консоль
        });
    }
    
    Alpine.data('chatWidgetData', () => ({
        isOpen: false,
        messages: [],
        userInput: '',
        isLoading: false,
        
        init() {
            this.$watch('messages', () => {
                this.$nextTick(() => {
                    this.scrollToBottom();
                });
            });
        },
        
        scrollToBottom() {
            const container = this.$refs.messagesContainer;
            if (container) {
                container.scrollTop = container.scrollHeight;
            }
        },
        
        // Функция для извлечения ссылок из ответа нейросети
        extractLinks(text) {
            const categoryRegex = /\[CATEGORY:([\w-]+)\]/g;
            const itemRegex = /\[ITEM:([\w-]+):([\w-]+)\]/g;
            
            const links = [];
            let match;
            
            // Извлекаем категории
            while ((match = categoryRegex.exec(text)) !== null) {
                links.push({
                    type: 'category',
                    slug: match[1],
                    url: `/categories/${match[1]}`,
                    title: `Категория: ${match[1]}`
                });
            }
            
            // Извлекаем записи
            while ((match = itemRegex.exec(text)) !== null) {
                links.push({
                    type: 'item',
                    categorySlug: match[1],
                    itemSlug: match[2],
                    url: `/categories/${match[1]}/${match[2]}`,
                    title: `Запись: ${match[2]}`
                });
            }
            
            // Удаляем теги из текста
            const cleanText = text
                .replace(categoryRegex, '')
                .replace(itemRegex, '')
                .trim();
            
            return {
                text: cleanText,
                links: links
            };
        },
        
        renderMarkdown(text) {
            // Проверяем доступность функции marked
            if (typeof marked !== 'undefined') {
                return marked.parse(text);
            } else {
                console.error('Markdown parser not available');
                return text;
            }
        },
        
        sendMessage() {
            const message = this.userInput.trim();
            if (!message || this.isLoading) return;
            
            // Добавляем сообщение пользователя
            this.messages.push({
                content: message,
                isUser: true
            });
            
            this.userInput = '';
            this.isLoading = true;
            
            // Отправляем запрос на сервер
            fetch('/chatbot/query', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ query: message })
            })
            .then(response => response.json())
            .then(data => {
                this.isLoading = false;
                
                if (data.status === 'success') {
                    // Обрабатываем ответ нейросети и извлекаем ссылки
                    const { text, links } = this.extractLinks(data.response);
                    
                    // Преобразуем Markdown в HTML
                    let content = this.renderMarkdown(text);
                    
                    // Если есть ссылки, добавляем их
                    if (links.length > 0) {
                        content += '<div class="mt-3 border-t border-gray-600 pt-2">';
                        content += '<div class="font-semibold mb-1">Дополнительная информация:</div>';
                        content += '<ul class="list-disc pl-5 space-y-1">';
                        
                        links.forEach(link => {
                            content += `<li><a href="${link.url}" class="text-blue-300 hover:underline" target="_blank">${link.title}</a></li>`;
                        });
                        
                        content += '</ul></div>';
                    }
                    
                    this.messages.push({
                        content: content,
                        isUser: false
                    });
                } else {
                    this.messages.push({
                        content: 'Извините, произошла ошибка при обработке вашего запроса. Пожалуйста, попробуйте еще раз.',
                        isUser: false
                    });
                }
                
                this.scrollToBottom();
            })
            .catch(error => {
                console.error('Error:', error);
                this.isLoading = false;
                
                this.messages.push({
                    content: 'Извините, произошла ошибка при обработке вашего запроса. Пожалуйста, попробуйте еще раз.',
                    isUser: false
                });
                
                this.scrollToBottom();
            });
        }
    }));
});
</script>
@endpush
@endonce 