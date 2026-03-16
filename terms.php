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
            <span class="hero__badge">Terms & Conditions</span>
            <h1 class="section-title">Условия использования</h1>

            <div class="legal-content">
                <div class="legal-block agreement">
                    <p>
                        Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                        представляют собой юридически обязывающий договор между вами (далее — «Пользователь») и администрацией 
                        проекта. Используя наш ресурс, вы подтверждаете свое полное согласие с данными правилами.
                    </p>
                </div>

                <div class="policy-section">
                    <h2>1. Предмет Соглашения</h2>
                    <p>
                        Платформа предоставляет Пользователю доступ к передовой цифровой инфраструктуре, включая: 
                        инновационные материалы по разработке ботов, экспертные статьи в блоге и инструменты для 
                        построения карьеры, которая работает на вас. Настоящее Соглашение регулирует все аспекты 
                        взаимодействия с сайтом <strong><?= $fullDomain ?></strong>.
                    </p>
                </div>

                <div class="policy-section">
                    <h2>2. Обязанности и права Пользователя</h2>
                    <p>При использовании материалов <strong><?= $domainTitle ?></strong> запрещается:</p>
                    <ul class="legal-list">
                        <li>Публиковать информацию, которая нарушает законодательство ЕС или права третьих лиц.</li>
                        <li>Предпринимать попытки взлома или дестабилизации работы платформы года.</li>
                        <li>Использовать автоматизированные скрипты для парсинга контента без письменного разрешения.</li>
                        <li>Предоставлять ложные данные при запросе на бесплатную консультацию.</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <div class="legal-card legal-card--small">
                        <div class="legal-card__icon">
                            <i data-lucide="copyright"></i>
                        </div>
                        <div class="legal-card__info">
                            <strong>3. Интеллектуальная собственность</strong>
                            <p>
                                Весь контент на <strong><?= $fullDomain ?></strong> (тексты, уникальный код, графика) является собственностью проекта. 
                                Вам предоставляется ограниченная лицензия для личного использования в целях саморазвития. 
                                Переосмыслите подход к контенту: копирование материалов без ссылки на источник запрещено.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="policy-section">
                    <div class="legal-block risk-warning">
                        <h2>4. Ограничение ответственности</h2>
                        <p>
                            Все AI-инструменты для реальных задач предоставляются по принципу <strong>«как есть» (as is)</strong>. 
                            <strong><?= $domainTitle ?></strong> не несет ответственности за любые прямые или косвенные убытки, 
                            возникшие в результате использования методологий, представленных в блоге.
                        </p>
                    </div>
                </div>

                <div class="policy-section">
                    <h2>5. Изменения и разрешение споров</h2>
                    <p>
                        Мы оставляем за собой право изменять Условия в любое время для соответствия новым законам Европы. 
                        Все споры решаются путем конструктивных переговоров. В случае недостижения согласия, спор подлежит 
                        рассмотрению согласно юрисдикции по месту регистрации Компании в Германии.
                    </p>
                </div>

                <div class="contact-info-block">
                    <h2>Контактная информация</h2>
                    <p>Если у вас возникли вопросы, связанные с настоящими Условиями, пожалуйста, свяжитесь с нашей поддержкой:</p>
                    <ul class="contact-data">
                        <li><strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>" class="text-accent">hello@<?= $fullDomain ?></a></li>
                        <li><strong>Телефон:</strong> <a href="tel:+493037516204" class="text-accent">+49 30 3751 6204</a></li>
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