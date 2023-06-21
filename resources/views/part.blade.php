@extends('layout')

@section('title', 'Таблица "Поставщики"')

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
  </div>
  {{$elements->links()}}
<div class="part_pag">
    <ul>
</ul>
</div>
<body>
@auth
        @if(Auth::user()->isAdmin())
  <div class="container-fluid">
    <a class="navbar-brand" href="/form">
        Заполнение
</a>


  </div>
  @endif
    @endauth
<table border=2>
        <thead><th>Код сотрудника</th>  <th>Код товара</th> <th>Страна</th><th>Вес</th><th>Сумма</th></thead>
    @foreach($elements as $el)
   <tr> <td>{{$el->kod_podr}}</td>  
      <td>{{$el->kod_tov}}</td>
      <td>{{$el->strana}}</td>
      <td>{{$el->ves}}</td>
      <td>{{$el->sum}}</td>
      <td> <a href="{{ route('one-part',$el->id)}}"><button class="btn btn-warning">Детали</button></a></td>
       @auth
        @if(Auth::user()->isAdmin())<td> <a href="{{ route('part-update',$el->id)}}"><button class="btn btn-warning">Изменить</button></a></td>
                 <td> <a href="{{ route('part-delete',$el->id)}}"><button class="btn btn-danger">Удалить</button></a></td>
     @endif
    @endauth
  </tr>
    
    @endforeach
</table>
@endsection