<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('res/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('res/libs/fontawesome-free-6.1.2-web/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('/res/admin/libs/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('res/admin/css/style.css') }}">
    <title>Admin Home</title>
</head>
<body>
    <section class="section-all">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 section-all-sidebar">
                    <div class="section-all__user">
                        <div class="section-all__user-site">
                            <h4>WebMechanic</h4>
                        </div>
                        <div class="section-all__user-name">
                            <div class="section-all__user-ico">
                                <img src="{{ asset('res/admin/img/user-ico.svg') }}" alt="user icon">
                            </div>
                            <h5>{{ Auth::user()->name; }}</h5>
                        </div>
                        <div class="section-all__user-setout">
                            <a class="dwsd" href="logout">Закрыть панель</a>
                        </div>
                        <div class="section-all__user-setout">
                            <a class="dwsd" href="#">На главную</a>
                        </div>
                    </div>
                    <div class="section-all-sidebar-menu">
                        <div class="section-all-sidebar-menu-itm">
                            <div class="section-all-sidebar-menu-list">
                                <ul class="sidebar-menu">
                                    <li class="list-btn-menu"><a href="#">Меню</a><img src="{{ asset('res/admin/img/arrow-ico.svg') }}" alt="icon"></li>
                                    <li><a href="{{ route('resource.index') }}">Все ресурсы</a></li>
                                    <li><a href="{{ route('resource.create') }}">Добавить ресурс</a></li>
                                    <li><a href="#">dddwdwd</a></li>
                                </ul>
                                <ul class="sidebar-menu">
                                    <li class="list-btn-menu"><a href="#">Меню</a><img src="{{ asset('res/admin/img/arrow-ico.svg') }}" alt="icon"></li>
                                    <li><a href="#">Ресурсы</a></li>
                                    <li><a href="#">dddwdwd</a></li>
                                    <li><a href="#">dddwdwd</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 section-all-cont p-0">
                    <div class="section-all-header">
                        <div class="section-all-header-menu">
                            <ul>
                                <li><a target="_blank" href="#">Перейти на сайт</a></li>
                                <li><a href="#">fgfgfg</a></li>
                                <li><a target="_blank" href="#">Перейти на сайт</a></li>
                            </ul>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </section>


    <script src="{{ asset('res/libs/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('res/libs/jquery/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('res/libs/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('res/admin/libs/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('res/admin/libs/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('res/admin/js/admin.js') }}"></script>
</body>
</html>