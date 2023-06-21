@extends('layout')

@section('title', 'Контакты')

@section('main')


<div class="textBox">
                <h2 class="tal">Адрес офиса выдачи товаров</h2>

                <p>
                    108811, г. Москва, Бизнес парк Румянцево, корпус В, 16 подъезд, 5й этаж, офис 520в
                </p>
                <p>
                    Въезд на территорию&nbsp;<a href="https://bprum.ru/contacts/" target="_blank">Бизнес парка Румянцево</a>&nbsp;бесплатно - 3 часа, парковка возле корпуса бесплатно - 1 час.
                </p>
                <p>
                    ВНИМАНИЕ. В Бизнес парке пропускная система.
                </p>
                <p>
                    Если Вы решили забрать товар самостоятельно, то Вам необходимо заказать ПРОПУСК, позвонив по телефону 8 (495) 789-41-47. Пожалуйста, сделайте это заранее, чтобы сэкономить свое время. Также Вам потребуется документ, удостоверяющий личность.
                </p>
                <h2 class="tal"> Время работы</h2>
                <p>
                    <b>Выдача товаров:</b><br>
                    по будням с 10:00 до 18:00
                </p>
                <p>
                    <b>Прием заказов по телефону:</b><br>
                    Пн-Пт с 10:00 до 19:00 (по московскому времени) <br>
                   </p>
                <p>
                    Прием заказов на сайте КРУГЛОСУТОЧНО.<br>
                </p>


                <p>
                    <b>Телефоны для связи</b><br>
                    <a href="tel:84957894147">8 (495) 789-41-47</a>
                </p>

                <p>
                    <b>E-mail</b><br>
                    <p ="natavgust2610@gmail.com">panda@shops.ru</p>
                </p>
               

                <div id="contactsPageMap" class="contactsPageMap">
                    <iframe src="https://yandex.ru/map-widget/v1/?lang=ru_RU&amp;scroll=true&amp;um=constructor%3Ab2842078cf9915a3c4c78e051db148e4a64d8c2b57dacdf2fcb166cd1518e135" allowfullscreen="true" style="display: block;" width="100%" height="379px" frameborder="0"></iframe>
                </div>

                <h2 class="tal"> Наши реквизиты:</h2>
                <p>
                    ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "БРАНДШОП" <br>
                    ОГРН 1197746385616<br>
                    ИНН/КПП 9729285657/775101001<br>
                    ОКПО 40213332<br>
                    Расчетный счет: 40702810238000139300<br>
                    в ПАО Сбербанк<br>
                    БИК 044525225,<br>
                    Корреспондентский счет: 30101810400000000225.<br>
                    Адрес: 108811, Москва г, Киевское шоссе 22-й (п Московский) км, домовладение 4, строение 2, офис 520В<br>
                </p>

            </div>
            <div class body style="background-color: #FFC0CB" "pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    
      
      <div class="container"> @yield('main_1')</div>
      <div class="container"> @yield('main_content')</div>
</div>

        @endsection
        <div class body style="background-color: #FFC0CB" "pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    
      
      <div class="container"> @yield('main_1')</div>
      <div class="container"> @yield('main_content')</div>
</div>