<?php

namespace App\Services;

interface AIServiceInterface
{
    /**
     * Отправляет запрос к AI сервису и получает ответ
     *
     * @param string $context Контекст/системный промпт для нейросети
     * @param string $text Текст запроса пользователя
     * @param mixed $model Модель нейросети
     * @return string Ответ от нейросети
     */
    public function query(string $context, string $text, mixed $model = null): string;
} 