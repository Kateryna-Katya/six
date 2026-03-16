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
            <span class="hero__badge">Privacy & Security</span>
            <h1 class="section-title">Политика обработки персональных данных</h1>

            <div class="legal-content">
                <div class="policy-intro">
                    <h2>1. Общие положения</h2>
                    <p>
                        Настоящая политика обработки персональных данных определяет порядок и условия обработки информации, предпринимаемые платформой 
                        <strong><?= $domainTitle ?></strong> (далее — «Оператор»), для обеспечения безопасности передовой цифровой инфраструктуры.
                    </p>
                    <p>
                        1.1. Оператор ставит своей важнейшей целью соблюдение прав и свобод человека при обработке его данных, включая защиту прав на неприкосновенность частной жизни и личную тайну в эпоху AI-технологий.
                    </p>
                    <p>
                        1.2. Настоящая Политика применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта <strong><?= $fullDomain ?></strong>.
                    </p>
                </div>

                <div class="policy-section">
                    <h2>2. Основные понятия</h2>
                    <ul class="terminology-list">
                        <li>
                            <strong>Веб-сайт</strong> — совокупность графических материалов и кода <strong><?= $fullDomain ?></strong>, обеспечивающая доступ к контенту о ботах.
                        </li>
                        <li><strong>Пользователь</strong> — любой посетитель, желающий оценить перспективы проекта или получить знания в области нейросетей.</li>
                        <li>
                            <strong>Персональные данные</strong> — любая информация, относящаяся прямо или косвенно к Пользователю (имя, email, телефон).
                        </li>
                        <li>
                            <strong>Обработка данных</strong> — любое действие, совершаемое с данными (сбор, запись, хранение в облачной инфраструктуре).
                        </li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h2>3. Данные, которые мы обрабатываем</h2>
                    <div class="data-grid">
                        <div class="legal-card legal-card--small">
                            <div class="legal-card__icon">
                                <i data-lucide="shield-check"></i>
                            </div>
                            <div class="legal-card__info">
                                <strong>Личные данные:</strong>
                                <p>ФИО, Email, номер мобильного телефона (Германия и другие страны ЕС).</p>
                            </div>
                        </div>
                        <div class="legal-card legal-card--small">
                            <div class="legal-card__icon">
                                <i data-lucide="cookie"></i>
                            </div>
                            <div class="legal-card__info">
                                <strong>Технические данные:</strong>
                                <p>Анонимные файлы Cookies, IP-адрес, тип браузера и данные об использовании AI-инструментов.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="policy-section">
                    <h2>4. Цели обработки данных</h2>
                    <ul class="legal-list">
                        <li>Идентификация Пользователя для предоставления доступа к закрытым материалам блога.</li>
                        <li>Установление обратной связи, включая отправку уведомлений о новых методологиях.</li>
                        <li>Обеспечение экспертной поддержки на всех этапах взаимодействия с платформой.</li>
                        <li>Улучшение качества работы алгоритмов и контента для пользователей в Европе.</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h2>5. Правовые основания</h2>
                    <p>
                        Оператор обрабатывает персональные данные только в случае их заполнения Пользователем через формы на сайте <strong><?= $fullDomain ?></strong>. 
                        Мы используем технологии нового поколения для шифрования данных, обеспечивая быстрый и лёгкий старт без рисков для вашей безопасности.
                    </p>
                </div>

                <div class="policy-section contact-footer-policy">
                    <div class="contact-extra">
                        <h2>6. Вопросы и отзывы</h2>
                        <p>Если у вас возникли вопросы касательно обработки данных, вы можете направить запрос на наш официальный адрес:</p>
                        <a href="mailto:support@<?= $fullDomain ?>" class="contact-link">support@<?= $fullDomain ?></a>
                    </div>
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