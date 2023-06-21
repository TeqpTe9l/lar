@extends('layout')
@section('title', 'Главная')
@section('main')                
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panda</title>
    
</head>
<body>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<div class="about_page-text">
    <div class="desktop-layout">
        <h1 class="h1 gradient-text"> <font size="7" color="#4B0082" face="Arial">Panda&nbsp;— это крупнейшая в&nbsp;России оптовая компания, созданная в&nbsp;2000&nbsp;году </font></h1>
        <p>
          <font size="6" color="black" face="Arial"> <p class="text-justify"> Мы продаём товары для дома, работы и отдыха. Наши клиенты: мелкие и крупные оптовики, торговые сети и простые розничные покупатели. За 22 года существования Panda они полюбили нас за привлекательные цены, эксклюзивные предложения и удобство в работе.</p></font>
        </p>
          <div class="verse">
        <p> <font size="5" color="black" face="Arial"> Мы также выполняем индивидуальные b2b-заказы.
<br>
— Более 10 000 товаров для дома и бизнеса.
<br>
— 3 000 выполненных индивидуальных проектов.
<br>
— 250 опытных сотрудников.
<br>
— 3 500 м² площади производства.
<br>
— Более 60 000 довольных клиентов по всей России.
<br>
— Десятки побед в профессиональных конкурсах регионального, федерального и международного масштаба.</p>
    </div>
<img src="/img/images.jpeg" width="400" height="200">
</div>
</div>
<div class="row" > 
                    <div class="col-lg-4">
                        <div class="single-features-ads first" >
                            <img src="img/glav/dost.jpg" alt="">
                            <h4><font size="9" color="#4B0082" face="Arial">Бесплатная доставка</font></h4>
                            <p>
    Интервал доставки —
     с 9 до 22 часов
    <br>
    На примерку у вас будет
     15 минут
     <br>
    Бонусы списываются только на сумму
    фактического выкупа, 
    остальные бонусы вернутся на ваш счет <br>
    Если вы отказались от заказа 
    или выкупили его часть, 
    промокоды не восстанавливаются<br>
    Если после примерки вы отказались от заказа,<br>
     понадобится оплатить доставку курьеру
    
</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads second">
                            <img src="img/glav/coin.jpg" alt="">
                            <h4><font size="9" color="#4B0082" face="Arial">Возврат товара </font> </h4>
                            <p>Мы надеемся,
                                 что вы останетесь довольны покупкой,
                                  но, если понадобится, 
                                  заказ можно полностью или частично вернуть в течение 14 дней со дня получения. <br>

Не пользуйтесь изделием,
 которое планируете вернуть — оно должно оставаться новым*,
  сохраните все вшитые ярлыки и этикетки, а также чеки, 
подтверждающие покупку в нашем магазине. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads">
                            <img src="img/glav/chat.jpg" alt="">
                            <h4><font size="9" color="#4B0082" face="Arial">Онлайн поддержка 24/7 </font></h4>
                            <p>Мы выделяем каждому клиенту персонального менеджера. Быстро отвечаем на звонки в любое время, помогаем решать экстренные проблемы с оформлением заказа и получением товара. </p>
                        </div>
                    </div>
                </div>
</body>
</html>




@endsection