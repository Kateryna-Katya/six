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
            <span class="hero__badge">Payment & Refunds</span>
            <h1 class="section-title">Политика возврата средств</h1>
            
            <div class="legal-content">
                <div class="legal-block agreement">
                    <p>
                        Мы стремимся к максимальной прозрачности во взаимоотношениях с нашими клиентами. 
                        В <strong><?= $domainTitle ?></strong> предусмотрена четкая процедура возврата средств, 
                        основанная на качестве предоставляемых услуг и защите прав потребителей в ЕС.
                    </p>
                </div>

                <h2>Условие оформления возврата</h2>
                <div class="data-grid">
                    <div class="legal-card legal-card--small">
                        <div class="legal-card__icon">
                            <i data-lucide="file-text"></i>
                        </div>
                        <div class="legal-card__info">
                            <strong>Несоответствие программе</strong>
                            <p>Если содержание материалов по AI-ботам существенно отличается от заявленного на <strong><?= $domainTitle ?></strong>.</p>
                        </div>
                    </div>
                    <div class="legal-card legal-card--small">
                        <div class="legal-card__icon">
                            <i data-lucide="settings-2"></i>
                        </div>
                        <div class="legal-card__info">
                            <strong>Технические проблемы</strong>
                            <p>Критические ошибки на платформе <strong><?= $fullDomain ?></strong>, которые не были устранены в разумные сроки.</p>
                        </div>
                    </div>
                    <div class="legal-card legal-card--small">
                        <div class="legal-card__icon">
                            <i data-lucide="timer"></i>
                        </div>
                        <div class="legal-card__info">
                            <strong>Период охлаждения</strong>
                            <p>Отказ в течение 14 дней с момента оплаты при условии минимального использования материалов блога.</p>
                        </div>
                    </div>
                </div>

                <div class="contact-extra" style="margin: 40px 0;">
                    <h2>Процедура запроса на возврат</h2>
                    <p>Чтобы инициировать процедуру на платформе <strong><?= $domainTitle ?></strong>, выполните следующие шаги:</p>
                    <div class="steps-list">
                        <div class="step-item"><span>1</span> Письмо на <a href="mailto:hello@<?= $fullDomain ?>" class="text-accent">hello@<?= $fullDomain ?></a></div>
                        <div class="step-item"><span>2</span> Тема письма: «Запрос на возврат средств»</div>
                        <div class="step-item"><span>3</span> Данные: ФИО, Email, Название программы обучения</div>
                        <div class="step-item"><span>4</span> Подробное описание причины запроса</div>
                    </div>
                </div>

                <h2>Сроки и способ возврата</h2>
                <p>
                    После одобрения вашего запроса, возврат денежных средств будет
                    произведен в течение <strong>7–14 рабочих дней</strong>. Средства возвращаются
                    тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления
                    зависит от регламента вашего банка в Германии или стране вашего пребывания в Европе.
                </p>

                <div class="legal-block risk-warning" style="margin-top: 40px;">
                    <h2>Исключения и ограничения</h2>
                    <ul class="legal-list">
                        <li>Запрос подан по истечении 14 календарных дней с момента оплаты.</li>
                        <li>Вы уже просмотрели или использовали более 50% материалов программы.</li>
                        <li>Технические проблемы на стороне пользователя (софт, соединение).</li>
                        <li>Нарушение условий Пользовательского соглашения <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="contact-info-block">
                    <h2>Свяжитесь с нами</h2>
                    <p>По всем вопросам, связанным с возвратом средств, обращайтесь в нашу службу поддержки:</p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="btn btn--outline" style="margin-top: 20px;">
                        <span>hello@<?= $fullDomain ?></span>
                    </a>
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