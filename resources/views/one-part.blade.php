@extends('layout')
@section('title', 'Таблица "Поставщики')
@section('main') 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     
  <style>
   table { 
    width: 100%; /* Ширина таблицы */
    border: 4px double black; /* Рамка вокруг таблицы */
    border-collapse: collapse; /* Отображать только одинарные линии */
   }
   th { 
    text-align: left; /* Выравнивание по левому краю */
    background: #ccc; /* Цвет фона ячеек */
    padding: 5px; /* Поля вокруг содержимого ячеек */
    border: 1px solid black; /* Граница вокруг ячеек */
   }
   td { 
    padding: 5px; /* Поля вокруг содержимого ячеек */
    border: 1px solid black; /* Граница вокруг ячеек */
   }
  </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблица "Поставщики"</title>
</head>
<body>
  @auth
        @if(Auth::user()->isAdmin())
    <div class="container-fluid">
    <a class="navbar-brand" href="/form">
        Заполнение
</a> 
@endif
@endauth<br><br>
<a class="navbar-brand" href="/part">
        Таблица Поставщики
  </a>
</div>

<table border=2>
        <thead><th>Код сотрудника</th> <th>Фамилия сотрудника</th> <th>Код товара</th> <th>Город</th> <th>Адрес</th><th>Страна</th><th>Вес</th><th>Сумма</th></thead>
       
   <tr> 
    <td>{{$el->kod_podr}}</td>
     <td>{{$el->fam_sotr}}</td>
      <td>{{$el->kod_tov}}</td>
      <td>{{$el->gorod}}</td>
      <td>{{$el->adres}}</td>
      <td>{{$el->strana}}</td>
      <td>{{$el->ves}}</td>
      <td>{{$el->sum}}</td>
  </tr>
</table>
</body>
@endsection
