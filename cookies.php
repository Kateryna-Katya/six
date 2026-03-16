<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Искусство создания AI-ассистентов</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMiAzMiIgZmlsbD0ibm9uZSI+PGNpcmNsZSBjeD0iMTYiIGN5PSIxNiIgcj0iMTQiIHN0cm9rZT0iIzAwZmY5ZCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2Utb3BhY2l0eT0iMC4zIi8+PGNpcmNsZSBjeD0iMTYiIGN5PSIxNiIgcj0iOSIgc3Ryb2tlPSIjMDBmZjlkIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1kYXNoYXJyYXk9IjQgMiIvPjxjaXJjbGUgY3g9IjE2IiBjeT0iMTYiIHI9IjQiIGZpbGw9IiMwMGZmOWQiPjxhbmltYXRlIGF0dHJpYnV0ZU5hbWU9Im9wYWNpdHkiIHZhbHVlcz0iMTswLjQ7MSIgZHVyPSIycyIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiIC8+PC9jaXJjbGU+PC9zdmc+">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Outfit:wght@500;700&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/lucide@latest"></script>
   
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>
            
            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link active">Главная</a></li>
                    <li><a href="./#learning" class="nav__link">Обучение</a></li>
                    <li><a href="./#tech" class="nav__link">Технологии</a></li>
                    <li><a href="./#cases" class="nav__link">Кейсы</a></li>
                    <li><a href="./#blog" class="nav__link">Блог</a></li>
                </ul>
            </nav>
            
            <a href="./#contact" class="btn btn--outline header__btn">
                <span>Связаться</span>
            </a>
            
            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>

    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="hero__badge">Legal Documents</span>
            <h1 class="section-title">Политика использования файлов cookie</h1>

            <div class="legal-content">
                <p class="lead-text">
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                    взаимодействия с нашим блогом, обеспечить корректную работу инструментов разработки и
                    анализировать активность пользователей, мы используем файлы cookie.
                </p>

                <h2>Что такое файлы cookie?</h2>
                <p>
                    Файл cookie — это небольшой фрагмент данных, который веб-сайт сохраняет на вашем устройстве, когда вы его посещаете. Это позволяет платформе 
                    <strong><?= $domainTitle ?></strong> "помнить" ваши предпочтения в настройках AI-интерфейсов и региональные параметры (Германия) в течение определенного времени.
                </p>

                <h2>Какие типы файлов cookie мы используем?</h2>
                <p>
                    Мы классифицируем файлы cookie, используемые на <strong><?= $fullDomain ?></strong>, по следующим категориям:
                </p>
                <ul class="legal-list">
                    <li>
                        <strong>Строго необходимые:</strong> Критически важны для функционирования систем аутентификации в чат-ботах. Позволяют безопасно перемещаться по страницам <strong><?= $domainTitle ?></strong>.
                    </li>
                    <li>
                        <strong>Аналитические:</strong> Сбор анонимной информации о том, как пользователи взаимодействуют с AI-ассистентами и какие статьи блога наиболее востребованы.
                    </li>
                    <li>
                        <strong>Функциональные:</strong> Позволяют запоминать ваш выбор для персонализированного опыта в рамках обучения разработке ботов.
                    </li>
                    <li>
                        <strong>Маркетинговые:</strong> Используются для показа предложений по новым AI-инструментам, соответствующим вашим интересам.
                    </li>
                </ul>

                <h2>Зачем мы используем файлы cookie?</h2>
                <ul class="legal-list">
                    <li>Обеспечение стабильной работы передовой цифровой инфраструктуры.</li>
                    <li>Анализ поведения для оптимизации алгоритмов AI-ассистентов.</li>
                    <li>Персонализация контента для пользователей в Европе (ЕС).</li>
                    <li>Предоставление релевантных стратегий роста на базе инноваций.</li>
                </ul>

                <h2>Ваш выбор и управление</h2>
                <p>
                    Вы имеете полный контроль над файлами cookie. Вы можете в любой момент изменить свои настройки в браузере. Однако, обратите внимание: отключение строго необходимых cookie может ограничить доступ к демо-версиям ботов.
                </p>

                <div class="contact-info-block">
                    <h2>Контактная информация</h2>
                    <p>
                        Если у вас возникли вопросы касательно политики использования cookie на <strong><?= $domainTitle ?></strong>, свяжитесь с нами:
                    </p>
                    <ul class="contact-data">
                        <li><strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>" class="text-accent">hello@<?= $fullDomain ?></a></li>
                        <li><strong>Телефон:</strong> <a href="tel:+493037516204" class="text-accent">+49 30 3751 6204</a></li>
                        <li><strong>Адрес:</strong> Friedrichstraße 176, 10117 Berlin, Germany</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo logo--footer">
                    <span class="logo__dot"></span>
                    <span class="logo__text"><?= $domainTitle ?></span>
                </a>
                <p class="footer__description">
                    Технологии нового поколения для создания умных ботов и AI-инфраструктуры. Переосмыслите подход к разработке.
                </p>
            </div>
            
            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="#hero">Главная</a></li>
                    <li><a href="#learning">Обучение</a></li>
                    <li><a href="#tech">Технологии</a></li>
                    <li><a href="#cases">Кейсы</a></li>
                </ul>
            </div>
            
            <div class="footer__col">
                <h4 class="footer__title">Юридическая информация</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>
            
            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact-info">
                    <li>
                        <i data-lucide="map-pin"></i>
                        <span>Friedrichstraße 176, 10117 Berlin, Germany</span>
                    </li>
                    <li>
                        <i data-lucide="phone"></i>
                        <a href="tel:+493037516204">+49 30 3751 6204</a>
                    </li>
                    <li>
                        <i data-lucide="mail"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="container footer__bottom">
            <p>&copy; 2026 <?= $domainTitle ?>. Все права защищены. Платформа уже доступна в Европе.</p>
        </div>
    </footer>
    <div id="cookie-popup" class="cookie-popup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button id="accept-cookies" class="btn btn--outline btn--sm">Принять</button>
        </div>
    </div>
    <div class="mobile-menu">
        <nav class="mobile-nav">
            <a href="./#hero" class="mobile-nav__link">Главная</a>
            <a href="./#learning" class="mobile-nav__link">Обучение</a>
            <a href="./#tech" class="mobile-nav__link">Технологии</a>
            <a href="./#cases" class="mobile-nav__link">Кейсы</a>
            <a href="./#blog" class="mobile-nav__link">Блог</a>
            <a href="./#contact" class="mobile-nav__link btn btn--outline">Связаться</a>
        </nav>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js"></script>
    
    <script src="script.js"></script>
</body>
</html>