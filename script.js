/**
 * PROJECT: <?= $domainTitle ?>
 * ROLE: AI Web Assistant
 * STACK: GSAP, ScrollTrigger, Lucide Icons, Vanilla-Tilt
 */

// 1. Регистрация плагина
gsap.registerPlugin(ScrollTrigger);



document.addEventListener('DOMContentLoaded', () => {
    
    // --- ИНИЦИАЛИЗАЦИЯ ИКОНОК ---
    lucide.createIcons();

    // --- МОБИЛЬНОЕ МЕНЮ ---
    const burger = document.querySelector('.burger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-nav__link');

    const toggleMenu = () => {
        burger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    };

    if (burger) {
        burger.addEventListener('click', toggleMenu);
    }
    mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // --- COOKIE POPUP ---
    const cookiePopup = document.getElementById('cookie-popup');
    const acceptBtn = document.getElementById('accept-cookies');

    if (cookiePopup && !localStorage.getItem('cookiesAccepted')) {
        setTimeout(() => cookiePopup.classList.add('active'), 2000);
    }

    if (acceptBtn) {
        acceptBtn.addEventListener('click', () => {
            localStorage.setItem('cookiesAccepted', 'true');
            cookiePopup.classList.remove('active');
        });
    }

    // --- ВАЛИДАЦИЯ ФОРМЫ ---
    const phoneInput = document.getElementById('phone-input');
    const contactForm = document.getElementById('ai-form');
    const formStatus = document.getElementById('form-status');
    const captchaQuestion = document.getElementById('captcha-question');
    const captchaInput = document.getElementById('captcha-answer');

    // Только цифры в телефоне
    if (phoneInput) {
        phoneInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/\D/g, '');
        });
    }

    // Простая капча
    let correctAnswer = 0;
    if (captchaQuestion) {
        const n1 = Math.floor(Math.random() * 10);
        const n2 = Math.floor(Math.random() * 5);
        correctAnswer = n1 + n2;
        captchaQuestion.innerText = `${n1} + ${n2} =`;
    }

    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const userAnswer = parseInt(captchaInput.value);

            if (userAnswer !== correctAnswer) {
                formStatus.innerText = "Ошибка капчи!";
                formStatus.className = "form-status error";
                return;
            }

            formStatus.innerText = "Отправка данных...";
            formStatus.className = "form-status success";

            setTimeout(() => {
                formStatus.innerText = "Успешно! Мы свяжемся с вами в ближайшее время.";
                contactForm.reset();
            }, 1500);
        });
    }

    // ==========================================
    // --- АНИМАЦИИ GSAP (ГЛАВНЫЙ БЛОК) ---
    // ==========================================

    // Устанавливаем начальные состояния (вместо CSS), чтобы избежать "невидимости"
    gsap.set('.tilt-card, .blog__card, .timeline__item', { opacity: 0, y: 50 });
    gsap.set('.hero__content > *', { opacity: 0, y: 30 });

    // 1. АНИМАЦИЯ HERO (Сразу при загрузке)
    const heroTl = gsap.timeline({ delay: 0.5 });
    heroTl
        .to('.hero__bg-glow', { opacity: 1, duration: 2 })
        .to('.neural-svg', { opacity: 1, scale: 1, duration: 1 }, "-=1.5")
        .to('.neural-path', { strokeDashoffset: 0, duration: 2, stagger: 0.1 }, "-=1")
        .to('.neural-node', { opacity: 1, scale: 1, stagger: 0.05 }, "-=1.5")
        .to('.hero__content > *', { opacity: 1, y: 0, stagger: 0.2, duration: 0.8 }, "-=1");

    // 2. АНИМАЦИЯ СЕКЦИИ LEARNING (Карточки)
    ScrollTrigger.batch(".tilt-card", {
        start: "top 92%",
        onEnter: batch => gsap.to(batch, { opacity: 1, y: 0, stagger: 0.2, overwrite: true }),
        once: true
    });

    // 3. АНИМАЦИЯ ТЕХНОЛОГИЙ (Заголовок)
    gsap.from('.tech .section-header', {
        scrollTrigger: {
            trigger: '.tech',
            start: "top 80%",
        },
        opacity: 0,
        y: 30,
        duration: 1
    });

    // 4. АНИМАЦИЯ ТАЙМЛАЙНА
    // Линия
    gsap.to('.timeline__line', {
        scrollTrigger: {
            trigger: '.timeline',
            start: "top 70%",
            end: "bottom 80%",
            scrub: 1
        },
        height: '100%',
        ease: 'none'
    });

    // Элементы таймлайна по очереди
    document.querySelectorAll('.timeline__item').forEach((item) => {
        gsap.to(item, {
            scrollTrigger: {
                trigger: item,
                start: "top 85%",
            },
            opacity: 1,
            y: 0,
            duration: 0.8
        });
    });

    // 5. АНИМАЦИЯ БЛОГА
    ScrollTrigger.batch(".blog__card", {
        start: "top 90%",
        onEnter: batch => gsap.to(batch, { opacity: 1, y: 0, stagger: 0.15, overwrite: true }),
        once: true
    });

    // Фикс для корректного пересчета при скролл-снапе
    window.addEventListener('load', () => {
        ScrollTrigger.refresh();
    });
});