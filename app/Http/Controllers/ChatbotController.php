<?php

namespace App\Http\Controllers;

use App\Services\KazakhCultureContextService;
use App\Services\OpenRouterService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ChatbotController extends Controller
{
    private OpenRouterService $aiService;
    private KazakhCultureContextService $contextService;

    /**
     * Конструктор контроллера
     */
    public function __construct()
    {
        $this->aiService = new OpenRouterService(env('OPENROUTER_API_KEY', ''));
        $this->contextService = new KazakhCultureContextService();
    }

    /**
     * Отображение страницы чат-бота
     */
    public function index()
    {
        return view('chatbot.index');
    }

    /**
     * Обработка запроса к чат-боту
     */
    public function query(Request $request)
    {
        $query = $request->input('query');
        
        if (empty($query)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Запрос не может быть пустым'
            ], 400);
        }

        try {
            // Получаем системный промпт с данными о категориях и элементах
            $systemPrompt = $this->contextService->getSystemPrompt();
            
            // Отправляем запрос нейросети
            $aiResponse = $this->aiService->query($systemPrompt, $query);
            
            // Возвращаем ответ без дополнительной обработки
            return response()->json([
                'status' => 'success',
                'response' => $aiResponse
            ]);
        } catch (\Exception $e) {
            Log::error('Chatbot error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return response()->json([
                'status' => 'error',
                'message' => 'Произошла ошибка при обработке запроса: ' . $e->getMessage()
            ], 500);
        }
    }
} 