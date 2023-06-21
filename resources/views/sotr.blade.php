@extends('layout')

@section('title', 'Таблица "Сотрудники"')

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
    <!-- Datatable plugin CSS file -->

</head>
</div>
{{$elements->links()}}
<div class="sotr_pag">
    <ul>
</ul>
</div>
<body>
     @auth
        @if(Auth::user()->isAdmin())  
    <div class="container-fluid">
    <a class="navbar-brand" href="/form1">
        Заполнение
</a>
</div>
@endif
    @endauth
<table border=2>
        <thead><th>Фамилия</th> <th>Гражданство</th> <th>Стаж</th><th>Должность</th></thead>
    @foreach($elements as $el)
   <tr> <td>{{$el->fam}}</td>

      <td>{{$el->graj}}</td>
      <td>{{$el->staj}}</td>

      <td>{{$el->spec}}</td>
      <td> <a href="{{ route('one-sotr',$el->id)}}"><button class="btn btn-warning">Детали</button></a></td>
           @auth
        @if(Auth::user()->isAdmin())      <td> <a href="{{ route('sotr-update',$el->id)}}"><button class="btn btn-warning">Изменить</button></a></td>
    <td> <a href="{{ route('sotr-delete',$el->id)}}"><button class="btn btn-danger">Удалить</button></a></td>
           
@endif
    @endauth
</tr>
    @endforeach
</table>
</body>
@endsection