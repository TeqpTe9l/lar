@extends('layout')
@section('title', 'Главная')
@section('main')  
<form action=" " method="post">
  @csrf
  
  <div class="form-group">
    <label for="image">Введите Картинку</label>
    <input type="text" name="image"   id="image" class="form-control">
  </div>

  <div class="form-group">
    <label for="model">Введите Модель</label>
    <input type="text" name="model"  id="model" class="form-control">
  </div>

  <div class="form-group">
    <label for="price">Введите Цену</label>
    <input type="text" name="price" id="price" class="form-control">
  </div>

  <div class="form-group">
    <label for="diagon">Введите Диагональ</label>
    <input type="text" name="diagon"  id="diagon" class="form-control">
  </div>

  <div class="form-group">
    <label for="razr">Введите Разрешение</label>
    <input type="text" name="razr"  id="razr" class="form-control">
  </div>

  <div class="form-group">
    <label for="matr">Введите Матрицу</label>
    <input type="text" name="matr"  id="matr" class="form-control">
  </div>

  <div class="form-group">
    <label for="chast">Введите частоту</label>
    <input type="text" name="chast"  id="chast" class="form-control">
  </div>

  <div class="form-group">
    <label for="id_bran">Введите номер бренда</label>
    <input type="text" name="id_bran"  id="id_bran" class="form-control">
  </div>
  <div class="form-group">
    <label for="tip">Введите тип</label>
    <input type="text" name="tip"  id="tip" class="form-control">
  </div>
  <button type="submit" class="btn btn-success">Отправить</button>
  
</form>
<div class="container-fluid">
<a class="navbar-brand" href="/kat">
        Таблица
</a>
</div>
@endsection