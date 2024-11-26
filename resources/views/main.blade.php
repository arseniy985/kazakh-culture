<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости Барселоны</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        /* Основные стили */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        header {
            background-color: #004aad;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        header nav a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 15px;
        }
        .news {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #004aad;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
        }
        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
<!-- Header -->
<header>
    <h1>Блог Барселоны</h1>
    <nav>
        <a href="{{ route('main') }}">Main</a>
        <a href="{{ route('about') }}">About Me</a>
        <a href="{{ route('support') }}">Support</a>
        <a href="{{ route('products') }}">Products</a>
        <a href="{{ route('profile') }}">Profile</a>
    </nav>
</header>
<div class="barcelona-info">
    <div class="team-logo">
        <img src="/images/barcelona.jpeg" alt="Барселона" />

    </div>
    <div class="team-details">
        <h1>Барселона - блоги</h1>
        <p><strong>Страна:</strong> <span>🇪🇸 Барселона, Испания</span></p>
        <p><strong>Тренер:</strong> <span>🇩🇪 Ханс-Дитер Флик</span></p>
        <div class="match-score">
            <div class="score">
                <span>1</span>
                <span>-</span>
                <span>0</span>
            </div>
            <div class="match-details">
                <p>🇪🇸 Реал Сосьедад <span>0</span> - 🇪🇸 Барселона <span>1</span></p>
                <small>10 ноября 23:00 | Испания. Ла Лига (завершен)</small>
            </div>
        </div>
        <div class="next-match">
            <p>🇪🇸 Сельта - 🇪🇸 Барселона</p>
            <small>23 ноября 23:00 | Испания. Ла Лига</small>
        </div>
    </div>
</div>


</body>
</html>
<div class="container">
    <h2 class="text-center">Новости Барселоны</h2>
    <div class="news-row">
        <div style="display: flex; justify-content: space-between;">
            <!-- Новости Барселоны -->
            <div style="width: 100%;">
                <!-- Твой текущий контент с новостями -->
                <div class="news-item">
                    <img src="/images/images.jpeg" alt="Барселона" class="news-image">
                    <div class="news-content">
                        <h3>Победа Барселоны</h3>
                        <p>Барселона одержала победу над Реалом. Подробнее об этом в нашем блоге!</p>
                        <a href="https://www.fcbarcelona.com/en/" target="_blank" class="read-more">Читать далее</a>
                    </div>
                </div>

                <!-- Вторая новость -->
                <div class="news-item">
                    <img src="/images/images2.jpeg" alt="Барселона" class="news-image">
                    <div class="news-content">
                        <h3>Возвращение Месси</h3>
                        <p>Лео Месси может вернуться в Барселону в следующем сезоне. Следите за новостями!</p>
                        <a href="https://www.fcbarcelona.com/en/" target="_blank" class="read-more">Читать далее</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Статистика -->
        <div style="width: 30%; margin-left: 20px; background-color: #f9f9f9; padding: 15px; border: 1px solid #ddd; border-radius: 5px; align-self: flex-start;">
            <h3 style="text-align: center; color: #1e7e34;">СТАТИСТИКА</h3>
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                <thead>
                <tr>
                    <th style="border-bottom: 2px solid #ddd; padding: 8px;">Команда</th>
                    <th style="border-bottom: 2px solid #ddd; padding: 8px;">M</th>
                    <th style="border-bottom: 2px solid #ddd; padding: 8px;">О</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="https://www.fcbarcelona.com/en/" target="_blank" style="text-decoration: none; color: inherit;">Барселона</a></td>
                    <td>13</td>
                    <td>33</td>
                </tr>
                <tr>
                    <td><a href="https://shop.realmadrid.com/en-gb" target="_blank" style="text-decoration: none; color: inherit;">Реал Мадрид</a></td>
                    <td>12</td>
                    <td>27</td>
                </tr>
                <tr>
                    <td><a href="https://en.atleticodemadrid.com/" target="_blank" style="text-decoration: none; color: inherit;">Атлетико Мадрид</a></td>
                    <td>13</td>
                    <td>26</td>
                </tr>
                <tr>
                    <td>Вильярреал</td>
                    <td>12</td>
                    <td>24</td>
                </tr>
                <tr>
                    <td>Осасуна</td>
                    <td>13</td>
                    <td>21</td>
                </tr>
                <tr>
                    <td>Атлетик</td>
                    <td>13</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Бетис</td>
                    <td>13</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Реал Сосьедад</td>
                    <td>13</td>
                    <td>18</td>
                </tr>
                <tr>
                    <td>Мальорка</td>
                    <td>13</td>
                    <td>18</td>
                </tr>
                <tr>
                    <td>Жирона</td>
                    <td>13</td>
                    <td>18</td>
                </tr>
                <tr>
                    <td>Сельта</td>
                    <td>13</td>
                    <td>17</td>
                </tr>
                <tr>
                    <td>Райо Вальекано</td>
                    <td>12</td>
                    <td>16</td>
                </tr>
                <tr>
                    <td>Севилья</td>
                    <td>13</td>
                    <td>15</td>
                </tr>
                <tr>
                    <td>Леганес</td>
                    <td>13</td>
                    <td>14</td>
                </tr>
                <tr>
                    <td>Алавес</td>
                    <td>13</td>
                    <td>13</td>
                </tr>
                <tr>
                    <td>Лас-Пальмас</td>
                    <td>13</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td>Хетафе</td>
                    <td>13</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td>Эспаньол</td>
                    <td>12</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Вальядолид</td>
                    <td>13</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>Валенсия</td>
                    <td>11</td>
                    <td>7</td>
                </tr>
                </tbody>
            </table>
            <a href="https://www.sports.ru/football/tournament/la-liga/table/" target="_blank" style="text-decoration: none; display: block; margin-top: 10px; text-align: center; color: #007bff;">Полная таблица ➜</a>
        </div>
    </div>






    <div class="container">
        <h2>Новости Барселоны</h2>

    </div>
    <footer>
        <div>
            <div>
                <h3>Блог Барселоны</h3>
                <p>Все права защищены &copy; 2024</p>
            </div>
            <div>
                <!-- Социальные сети -->
                <a href="https://www.facebook.com/fcbarcelona/" target="_blank">
                    <img src="/images/facebook.jpeg" alt="Facebook" style="width: 20px; height: 20px;">
                </a>
                <a href="https://twitter.com/fcbarcelona" target="_blank">
                    <img src="/images/twitter.jpeg" alt="Twitter" style="width: 20px; height: 20px;">
                </a>
                <a href="https://www.instagram.com/fcbarcelona/" target="_blank">
                    <img src="/images/instagram.jpeg" alt="Instagram" style="width: 20px; height: 20px;">
                </a>
            </div>
            <div style="margin-top: 10px;">
                <!-- Контактная информация -->
                <p>
                    <strong>Email:</strong>
                    <a href="mailto:Nurzhole@gmail.com" style="color: white; text-decoration: none;">
                        Nurzhole@gmail.com
                    </a>
                </p>
                <p>
                    <strong>Телефон:</strong>
                    <a href="tel:+77473695738" style="color: white; text-decoration: none;">
                        +7 747 369 5738
                    </a>
                </p>
            </div>
        </div>
    </footer>

    </body>
    </html>


