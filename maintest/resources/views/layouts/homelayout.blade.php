<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('res/libs/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('res/libs/fontawesome-free-6.1.2-web/css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('res/css/style.css') }}">
    </head>
    <body class="antialiased">
        <div class="ToTop">
            <span><img data-goto=".page-section-1" class="menu-link" src="{{ asset('res/image/icon/To-top-ico.svg') }}" alt="to top image"></span>
        </div>
        <section class="header">
            <div class="header__mobile-menu">
            <ul>
                <li class="menu-link" data-goto=".page-section-1"><a href="#"></a>{{ __('msg.menu.home') }}</li>
                <li class="menu-link" data-goto=".page-section-2"><a href="#"></a>{{ __('msg.menu.about') }}</li>
                <li class="menu-link" data-goto=".page-section-3"><a href="#"></a>{{ __('msg.menu.service') }}</li>
                <li class="menu-link" data-goto=".page-section-4"><a href="#"></a>{{ __('msg.menu.project') }}</li>
                <li class="menu-link" data-goto=".page-section-5"><a href="#"></a>{{ __('msg.menu.contact') }}</li>
            </ul>
            </div>
            <div class="header__lang">
            <div class="header__lang-itm">
                <a href="">ru</a>
            </div>
            <div class="header__lang-delimetr"></div>
            <div class="header__lang-itm">
                <a href="">kz</a>
            </div>
            </div>
            <div class="header__sub">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__sub_cont">
                            <div class="header__sub_email">
                                <a href="#">www.delphi7.ap55@gmail.com</a>
                            </div>
                            <div class="header__sub-phone">
                                <div class="header__sub-phone-itm">
                                    <i class="fa-solid fa-mobile-screen"></i>
                                    <a href="tel:+77083316859">+7 (708)- 331- 68- 59</a>
                                </div>
                                <div class="header__sub-phone-itm">
                                    <i class="fa-solid fa-mobile-screen"></i>
                                    <a href="tel:+77083316859">+7 (708)- 331- 68- 59</a>
                                </div>
                            </div>
                            <div class="header__login">
                                @if (Route::has('login'))
                                    <div class="header__login-link">
                                        @auth
                                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                        @else
                                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="hrader__cont">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 header__block">
                        <div class="header__logo">
                            <a href="#">WebMechanic</a>
                        </div>
                        <div class="header__menu">
                            <ul>
                                <li class="menu-link" data-goto=".page-section-1"><a href="#"></a>{{ __('msg.menu.home') }}</li>
                                <li class="menu-link" data-goto=".page-section-2"><a href="#"></a>{{ __('msg.menu.about') }}</li>
                                <li class="menu-link" data-goto=".page-section-3"><a href="#"></a>{{ __('msg.menu.service') }}</li>
                                <li class="menu-link" data-goto=".page-section-4"><a href="#"></a>{{ __('msg.menu.project') }}</li>
                                <li class="menu-link" data-goto=".page-section-5"><a href="#"></a>{{ __('msg.menu.contact') }}</li>
                            </ul>
                        </div>
                        <div class="header__whatsapp">
                            <div class="header__whatsapp-itm">
                                <i class="fa-brands fa-square-whatsapp"></i>
                                <a href="https://wa.me/+77083316859">+7 (708)- 331- 68- 59</a>
                            </div>
                            <div class="header__whatsapp-itm">
                                <i class="fa-brands fa-square-whatsapp"></i>
                                <a href="https://wa.me/+77083316859">+7 (708)- 331- 68- 59</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="header__mobile-cont">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 header__mobile-block">
                        <div class="header__logo">
                            <a href="#">WebMechanic</a>
                        </div>
                        <div class="header__mobile-btn">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        @yield('content')
        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer__copyroght">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="footer__copyroght-cont">
                                            <span>© 2022, «WebMechanic»</span>
                                            <span>© Все права защищены Pervushin S.V.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="manager-popup">
        <div class="manager-popup__cont">
            <div class="manager-popup__submit-form">
                <div class="manager-popup-close">
                    <img src="{{ asset('res/image/icon/close.png') }}" alt="manager popup icon close">
                </div>
                <form action="#">
                    <p>{{ __('msg.contact.label1') }}</p>
                    <div class="manager-popup__submit-form-group">
                        <i class="fa-regular fa-envelope"></i>
                        <input required type="email" name="email" placeholder="{{ __('msg.contact.p_holder1') }}">
                    </div>
                    <p>{{ __('msg.contact.label2') }}<</p>
                    <div class="manager-popup__submit-form-group">
                        <i class="fa-solid fa-mobile-screen"></i>
                        <input class="phone" required type="text" name="phone" placeholder="{{ __('msg.contact.p_holder2') }}">
                    </div>
                    <div class="manager-popup__submit-form-text">
                        <span>{{ __('msg.contact.msg_holder') }}</span>
                        <textarea required name="message"  ></textarea>
                    </div>
                    <button type="submit" class="btn-all">{{ __('msg.contact.btn_txt') }}</button>
                </form>
            </div>
        </div>
        </div>


        <script src="{{ asset('res/libs/jquery/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('res/libs/jquery/jquery.maskedinput.min.js') }}"></script>
        <script src="{{ asset('res/libs/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('res/libs/slick/slick.min.js') }}"></script>
        <script src="{{ asset('res/js/main.js') }}"></script>
    </body>
</html>