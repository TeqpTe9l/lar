
@extends('layout')
@section('title', 'Сотрудники')
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
    <a class="navbar-brand" href="/form1">
        Заполнение
</a> 
@endif
@endauth<br><br>
    <a class="navbar-brand" href="/sotr">
        Таблица Сотрудники
</a>
</div>

<table border=2>
        <thead><th>Фамилия</th> <th>Имя</th> <th>Отчество</th> <th>Гражданство</th> <th>Стаж</th><th>Код отдела</th><th>Должность</th><th>Зарплата</th><th>Телефон</th></thead>
    
   <tr> <td>{{$el->fam}}</td>
     <td>{{$el->im}}</td>
      <td>{{$el->otch}}</td>
      <td>{{$el->graj}}</td>
      <td>{{$el->staj}}</td>
      <td>{{$el->kod_otd}}</td>
      <td>{{$el->spec}}</td>
      <td>{{$el->zarp}}</td>
       <td>{{$el->tel}}</td>
    </tr>
</table>
</body>
@endsection