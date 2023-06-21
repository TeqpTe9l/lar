@extends('layout')
@section('title', 'Главная')
@section('main')  

<title>Редактирование</title>
<form action=" {{route('kat-update-1',$el->id)}}" method="post">
  @csrf
  <div class="form-group">
    <label for="image">Введите картинку</label>
    <input type="text" name="image" value="{{$el->image}}" id="image" class="form-control">
  </div> 
  <div class="form-group">
    <label for="model">Введите модель</label>
    <input type="text" name="model" value="{{$el->model}}"  id="model" class="form-control">
  </div>

  <div class="form-group">
    <label for="price">Введите Цену</label>
    <input type="text" name="price" value="{{$el->price}}" id="price" class="form-control">
  </div>

  <div class="form-group">
    <label for="diagon">Введите диагональ</label>
    <input type="text" name="diagon" value="{{$el->diagon}}" id="diagon" class="form-control">
  </div>

  <div class="form-group">
    <label for="razr">Введите разрешение</label>
    <input type="text" name="razr" value="{{$el->razr}}" id="razr" class="form-control">
  </div>

  <div class="form-group">
    <label for="matr">Введите матрицу</label>
    <input type="text" name="matr" value="{{$el->matr}}" id="matr" class="form-control">
  </div>

  <div class="form-group">
    <label for="chast">Введите частоту </label>
    <input type="text" name="chast" value="{{$el->chast}}" id="chast" class="form-control">
  </div>

  <div class="form-group">
    <label for="id_bran">Введите номер бренда</label>
    <input type="text" name="id_bran" value="{{$el->id_bran}}" id="id_bran" class="form-control">
  </div>

  <div class="form-group">
    <label for="tip">Введите тип</label>
    <input type="text" name="tip" value="{{$el->tip}}" id="tip" class="form-control">
  </div>
  <button type="submit" class="btn btn-success">Обновить</button>
  
</form>
<div class="container-fluid">
<a class="navbar-brand" href="/kat">
        Вернуться на таблицу Мониторы
</a>
</div>
@endsection