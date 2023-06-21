@extends('layout')
@section('title', 'Акссесуары')
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
    background: #FFC0CB; /* Цвет фона ячеек */
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
    <title>Таблица "Сотрудники"</title>
</head>
<body>
    @auth
        @if(Auth::user()->isAdmin())
    <div class="container-fluid">
    <a class="navbar-brand" href="/form3">
        Заполнение
</a> @endif
@endauth
<br><br>
    <a class="navbar-brand" href="/tov">
        Таблица Акссесуары
</a>
</div>

<table border=2>
        <thead><th>Фото</th> <th>Модель</th> <th>Цена</th> <th>Номер названия</th> <th>Тип</th><th>Интерфейс</th><th>Описание</th><th>Гарантия</th></thead>
    
   <tr> <td><img src="{{$el->image}}" width="100" height="100"></td>
   <td>{{$el->model}}</td>
      <td>{{$el->price}}</td>
      <td>{{$el->nazv_id}}</td>
      <td>{{$el->tip}}</td>
      <td>{{$el->interf}}</td>
      <td>{{$el->opis}}</td>
      <td>{{$el->garant}}</td>
    </tr>
</table>
</body>
@endsection