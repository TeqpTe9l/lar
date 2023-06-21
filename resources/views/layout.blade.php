<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Panda</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <header>
        <div>
            <h1><a href="/">PANDA</a></h1>
            <span>@yield('title')</span>
        </div>
        <a href="/" @checked(Request::is('/'))>Каталог</a>
        <a href="/contact" @checked(Request::is('contact'))>Контакты</a>
         <a href="/podr" @checked(Request::is('podr'))>О нас</a>
         <a href="/cart" @checked(Request::is('cart'))>Корзина</a>
         <a href="/index" @checked(Request::is('index'))>Информация</a>
         <a href="/sotr" @checked(Request::is('sotr'))>Сотрудники</a>
   <a href="/part" @checked(Request::is('part'))>Поставщики</a>
   <a href="/kat" @checked(Request::is('kat'))>Мониторы</a>
    <a href="/tov" @checked(Request::is('tov'))>Акссесуары</a>
       <a href="/dashboard" @checked(Request::is('/dashboard'))>Вход</a>
<a href="/register" @checked(Request::is('/register'))>Регистрация</a>
    </header>
<div class body style="background-color: #FFC0CB" "pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
   </div>
      
      <div class="container"> @yield('main_1')</div>
      <div class="container"> @yield('main_content')</div>

    <main>
        @yield('main')
    </main>
<style> 
   html { height: 100%; }
   body {
    margin: 0; /* Убираем отступы */
    height: 100%; /* Высота страницы */
    background: url(/img/fono.jpg); /* Параметры фона */
    background-size: cover; /* Фон занимает всю доступную площадь */
   } 
  </style>
   
</body>

</html>