@extends('layouts.app')

@section('content')
<div class="support">
    <h1>Свяжитесь с нами</h1>
    <p>Если у вас есть вопросы, предложения или проблемы, свяжитесь с нами через форму ниже.</p>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <form action="{{ route('support.submit') }}" method="POST">
        @csrf
        <div>
            <label for="name">Ваше имя:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Ваш Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="message">Сообщение:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit">Отправить</button>
    </form>
</div>
<div class="faq">
    <h2>Часто задаваемые вопросы</h2>
    <div>
        <h3>Как часто обновляются новости?</h3>
        <p>Новости публикуются ежедневно, сразу после выхода новых материалов.</p>
    </div>
    <div>
        <h3>Можно ли предложить свою статью?</h3>
        <p>Да, отправьте ваше предложение через форму обратной связи.</p>
    </div>
    <div>
        <h3>Как связаться с поддержкой?</h3>
        <p>Вы можете отправить нам сообщение через форму выше или написать на наш Email.</p>
    </div>
</div>
<div class="contact">
    <h2>Наши контакты</h2>
    <p><strong>Email:</strong> <a href="mailto:Nurzhole@gmail.com"><i class="fas fa-envelope"></i> Nurzhole@gmail.com</a></p>
    <p><strong>Телефон:</strong> <a href="tel:+77473695738"><i class="fas fa-phone"></i> +7 747 369 5738</a></p>

    <div class="social-links">
        <a href="https://github.com/Nurzholtoni" target="_blank">GitHub</a>
        <a href="https://t.me/nurzholtoni" target="_blank">Telegram</a>
        <a href="https://nurzholtoni" target="_blank">Instagram</a>
    </div>
</div>
<div class="report-issue">
    <h2>Сообщить об ошибке</h2>
    <p>Если вы нашли ошибку или проблему на сайте, пожалуйста, сообщите нам. Это поможет сделать сайт лучше!</p>
    <a href="{{ route('support.report') }}">Сообщить об ошибке</a>
</div>
@endsection
