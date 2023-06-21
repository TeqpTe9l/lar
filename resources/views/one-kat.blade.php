@extends('layout')
@section('title', 'Таблица Мониторы')
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
    <title>Таблица "Мониторы"</title>
</head>
<body>
  @auth
        @if(Auth::user()->isAdmin())
    <div class="container-fluid">
    <a class="navbar-brand" href="/form2">
        Заполнение
</a>
@endif
@endauth
<br><br>
<a class="navbar-brand" href="/kat">
        Таблица Мониторы
  </a>
</div>

<table border=2>
        <thead><th>Фото</th> <th>Модель</th> <th>Цена</th> <th>Диагональ</th> <th>Разрешение</th><th>Матрица</th><th>Частота</th><th>Номер бренда</th><th>Тип</th></thead>
       
   <tr> 
    <td><img src="{{$el->image}}" width="100" height="100"></td>
     <td>{{$el->model}}</td>
      <td>{{$el->price}}</td>
      <td>{{$el->diagon}}</td>
      <td>{{$el->razr}}</td>
      <td>{{$el->matr}}</td>
      <td>{{$el->chast}}</td>
      <td>{{$el->id_bran}}</td>
     <td>{{$el->tip}}</td>
    </tr>
  
</table>

</body>
@endsection