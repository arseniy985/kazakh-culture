@extends('layouts.app')

@section('content')
<section class="min-h-screen bg-[#3b1f1f] py-12 px-6 text-white">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-extrabold text-yellow-400 text-center mb-8">Казахская культура - Чат-бот</h1>
        
        <p class="text-center text-lg text-gray-300 max-w-2xl mx-auto mb-10">
            Задавайте вопросы о казахской культуре, традициях, играх, кухне и других аспектах культуры Казахстана.
            Наш чат-бот с удовольствием поможет вам узнать больше о богатом культурном наследии казахского народа.
        </p>

        <div class="bg-white bg-opacity-10 rounded-lg p-6 shadow-lg">
            <div id="chat-messages" class="mb-6 h-96 overflow-y-auto p-4 bg-black bg-opacity-30 rounded-lg">
                <div class="message bot">
                    <div class="message-content bg-gray-700 text-white p-3 rounded-lg inline-block max-w-md prose prose-invert prose-sm">
                        Сәлем! Мен қазақ мәдениеті туралы сұрақтарыңызға жауап беруге дайынмын. Қандай сұрағыңыз бар?
                    </div>
                </div>
            </div>
            
            <div class="flex">
                <input type="text" id="user-input" 
                      class="flex-1 p-3 rounded-l-lg focus:outline-none text-gray-800" 
                      placeholder="Напишите ваш вопрос..."
                      autofocus>
                <button id="send-button" 
                        class="bg-yellow-400 text-black font-semibold px-6 py-3 rounded-r-lg hover:bg-yellow-500 transition">
                    Отправить
                </button>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const chatMessages = document.getElementById('chat-messages');
    const userInput = document.getElementById('user-input');
    const sendButton = document.getElementById('send-button');
    
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
            breaks: true,           // Переносы строк в markdown преобразуются в <br>
            gfm: true,              // GitHub Flavored Markdown
            headerIds: false,       // Отключаем генерацию id для заголовков
            mangle: false,          // Отключаем экранирование email адресов
            sanitize: false,        // Разрешаем HTML 
            silent: true            // Не выводим ошибки в консоль
        });
    }
    
    // Функция для прокрутки чата вниз
    function scrollToBottom() {
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
    
    // Функция для извлечения ссылок из ответа нейросети
    function extractLinks(text) {
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
    }
    
    // Функция для рендеринга Markdown
    function renderMarkdown(text) {
        // Проверяем доступность функции marked
        if (typeof marked !== 'undefined') {
            return marked.parse(text);
        } else {
            console.error('Markdown parser not available');
            return text;
        }
    }
    
    // Функция для добавления сообщения
    function addMessage(content, isUser = false) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `message ${isUser ? 'user' : 'bot'} my-2 ${isUser ? 'text-right' : ''}`;
        
        const messageContent = document.createElement('div');
        messageContent.className = `message-content ${isUser ? 'bg-yellow-400 text-black' : 'bg-gray-700 text-white'} p-3 rounded-lg inline-block max-w-md ${isUser ? '' : 'prose prose-invert prose-sm'}`;
        
        if (isUser) {
            messageContent.textContent = content;
        } else {
            // Обрабатываем ответ нейросети и извлекаем ссылки
            const { text, links } = extractLinks(content);
            
            // Преобразуем Markdown в HTML
            const markdownHtml = renderMarkdown(text);
            
            // Базовый контент из Markdown
            messageContent.innerHTML = markdownHtml;
            
            // Если есть ссылки, добавляем их
            if (links.length > 0) {
                const linksContainer = document.createElement('div');
                linksContainer.className = 'mt-3 border-t border-gray-600 pt-2';
                linksContainer.innerHTML = '<div class="font-semibold mb-1">Дополнительная информация:</div>';
                
                const linksList = document.createElement('ul');
                linksList.className = 'list-disc pl-5 space-y-1';
                
                links.forEach(link => {
                    const listItem = document.createElement('li');
                    listItem.innerHTML = `<a href="${link.url}" class="text-blue-300 hover:underline" target="_blank">${link.title}</a>`;
                    linksList.appendChild(listItem);
                });
                
                linksContainer.appendChild(linksList);
                messageContent.appendChild(linksContainer);
            }
        }
        
        messageDiv.appendChild(messageContent);
        chatMessages.appendChild(messageDiv);
        scrollToBottom();
    }

    // Функция для отправки сообщения
    function sendMessage() {
        const message = userInput.value.trim();
        if (!message) return;
        
        // Добавляем сообщение пользователя
        addMessage(message, true);
        userInput.value = '';
        
        // Индикатор загрузки
        const loadingDiv = document.createElement('div');
        loadingDiv.className = 'message bot my-2';
        loadingDiv.innerHTML = '<div class="message-content bg-gray-700 text-white p-3 rounded-lg inline-block">Печатает...</div>';
        chatMessages.appendChild(loadingDiv);
        scrollToBottom();
        
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
            // Удаляем индикатор загрузки
            chatMessages.removeChild(loadingDiv);
            
            if (data.status === 'success') {
                // Добавляем ответ от нейросети
                addMessage(data.response);
            } else {
                addMessage('Извините, произошла ошибка при обработке вашего запроса. Пожалуйста, попробуйте еще раз.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            // Удаляем индикатор загрузки
            chatMessages.removeChild(loadingDiv);
            addMessage('Извините, произошла ошибка при обработке вашего запроса. Пожалуйста, попробуйте еще раз.');
        });
    }
    
    // Обработчики событий
    sendButton.addEventListener('click', sendMessage);
    
    userInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });
    
    // Инициализация
    scrollToBottom();
});
</script>
@endpush
@endsection 