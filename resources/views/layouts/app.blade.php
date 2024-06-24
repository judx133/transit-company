<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <title>Грузоперевозки Омск</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="body" style="zoom: 75%">
<div id="app">
    <div class="container-header">
        <div class="header fl jc-sb">
            <div class="logotype fl ai-c fd-col">
                <img src="/img/svg/logo.svg" class="logotypesvg" alt="logotype">
                <a href="/" class="logo-text">Грузоперевозки</a>
            </div>
            <div class="header-hyperlinks fl gap-5">
                <a href="#services" class="header-text">Услуги</a>
                <a href="/prices" class="header-text">Цены</a>
            </div>
            <div class="header-icons fl jc-sb">
                <div class="header-logo-orders fl fd-col ai-c">
                    <img src="/img/svg/order.svg" class="icon" alt="Orders">
                    <a href="/requ" class="header-text">Заказы</a>
                </div>
            </div>
        </div>
    </div>
    <div>
        <hr class="hr-header">
    </div>
    <main class="py-4">
        @yield('content')
    </main>
    <footer>
        <div>
            <div class="container-footer">
                <div class="footer fl jc-sb">
                    <div class="logotype fl ai-c fd-col">
                        <img src="/img/svg/logo.svg" class="logotypesvg" alt="logotype">
                        <a href="/" class="logo-text">Грузоперевозки</a>
                    </div>
                    <div class="header-hyperlinks fl gap-5">
                        <a href="#services" class="header-text">Услуги</a>
                        <a href="#" class="header-text">Цены</a>
                    </div>
                    <div class="header-icons fl jc-sb">
                        <div class="header-logo-orders fl fd-col ai-c">
                            <img src="/img/svg/order.svg" class="icon" alt="Orders">
                            <a href="/requ" class="header-text">Заказы</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
