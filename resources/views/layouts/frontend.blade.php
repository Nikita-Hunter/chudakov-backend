<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_descr', 'Начное шоу профессора Чудакова')">
    <meta name="keywords" content="@yield('meta_key', 'Профессор Чудаков, научное шоу')">
    <meta property="og:title" content="@yield('meta_title', 'Профессор Чудаков')">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:image" content="{{ asset('/assets/img/meta_img.jpg') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/img/favicon/favicon-16x16.png"') }}">
    <link rel="manifest" href="{{ asset('/assets/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('/assets/img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#ffffff">
    <meta name="author" content="Мочалов Никита Андреевич">
    <title>{{  config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/style/main-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/style/libs/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/style/libs/hystmodal.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/style/libs/swiper.min.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script defer src="{{ asset('/assets/js/libs/fslightbox.js') }}"></script>
    <script defer src="{{ asset('/assets/js/libs/imask.js') }}"></script>
    <script defer src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script defer src="{{ asset('/assets/js/libs/hystmodal.min.js') }}"></script>
    <script defer src="{{ asset('/assets/js/libs/swiper.min.js') }}"></script>
    <script defer src="{{ asset('/assets/js/libs/accordion.min.js') }}"></script>
    <script defer src="{{ asset('/assets/js/libs/gsap.min.js') }}"></script>
    <script defer src="{{ asset('/assets/js/app.js') }}"></script>
    <!-- <link rel="stylesheet" media="screen and (min-width: 601px)" href="desktop.css"> -->
    @livewireStyles
</head>
<body class="app-body" role="doc-index">
<div class="app-body__layout">
    <header id="header-top" aria-label="Шапка сайта" role="menubar" class="app-body__header-top header-top">
        <div class="header-top__container container">
            <div class="header-top__inner">
                <a role="link" href="{{ route('frontend.home') }}" class="header-top__logo">
                    <img role="img" src="{{ asset('/assets/img/logo.png') }}" height="67" alt="Логотип сайта" class="header-top__logo-brand">
                </a>
                @if(\Illuminate\Support\Facades\Route::is('frontend.home'))
                    <nav role="navigation" class="header-top__navbar">
                        <ul role="listbox" class="header-top__navbar-list">
                            <li role="listitem" class="header-top__navbar-item">
                                <a role="link" name="Почему мы?" href="#about" class="header-top__navbar-link">
                                    Почему мы?
                                </a>
                            </li>
                            <li role="listitem" class="header-top__navbar-item">
                                <a name="Шоу - программы" role="link" href="#show" class="header-top__navbar-link">
                                    Шоу - программы
                                </a>
                            </li>
                            <li role="listitem" class="header-top__navbar-item">
                                <a role="link" href="#feedback" class="header-top__navbar-link">
                                    Отзывы
                                </a>
                            </li>
                            <li role="listitem" class="header-top__navbar-item">
                                <a role="link" href="#faq" class="header-top__navbar-link">
                                    Вопрос-Ответ
                                </a>
                            </li>
                            <li role="listitem" class="header-top__navbar-item">
                                <a role="link" href="#contact" class="header-top__navbar-link">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </nav>
                @endif
                <ul role="listbox" class="header-top__contact">
                    <li role="listitem" class="header-top__contact-item">
                        <a role="link" href="tel:+79047769944" class="header-top__contact-phone">
                            <i class='bx bx-phone' ></i>
                            +7 (904) 776-99-44
                        </a>
                    </li>
                    <li role="listitem" class="header-top__contact-item">
                        <button role="button" data-button="modal" data-hystmodal="#myModal" data-modal="contact-form" class="button button--primary">Заказать звонок</button>
                    </li>
                </ul>
                <button class="menu-btn">
                    <i class='bx bx-menu-alt-right' ></i>
                </button>
            </div>
        </div>
    </header>
    <main aria-label="Контент" role="main" class="app-body__main-content main-content">
        @yield('content')
    </main>
    <footer aria-label="Подвал сайта" role="banner" class="app-body__footer footer" id="contact">
        <div class="footer__container container">
            <div class="footer__inner">
                <div class="footer__row-block">
                    <div class="footer__col-block">
                        <a href="{{ route('frontend.home') }}" class="footer__logo logo">
                            <img src="{{ asset('/assets/img/logo.png') }}" height="107" alt="" class="logo__brand">
                        </a>
                        <div class="footer__secondary-text">Научное шоу и аниматоры. Праздники</div>
                    </div>
                    <div class="footer__col-block">
                        <ul role="listbox" class="footer__contact">
                            <li role="listitem" class="footer__contact-item">
                                <a role="link" href="tel:+79047769944" class="footer__contact-phone">
                                    <i class='bx bx-phone' ></i>
                                    +7 (904) 776-99-44
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="footer__container container">
                <a href="https://vk.com/nikitaswmochalov" target="_blank" class="developer-link">Разработка сайта</a>
            </div>
        </div>
    </footer>
    <div class="hystmodal modal-viewport" id="myModal" aria-hidden="true">
        <div class="hystmodal__wrap modal-viewport__wrapper">
            <div class="hystmodal__window modal-viewport__window" role="dialog" aria-modal="true"  style="width: 22.5313rem;">
                <button class="modal-viewport__close" data-hystclose>
                    <i class='bx bx-x'></i>
                </button>
                <livewire:contact-form />
            </div>
        </div>
    </div>
    <a href="#" class="button-up">
        <i class='bx bx-chevron-up'></i>
    </a>
</div>
@livewireScripts
</body>
</html>
