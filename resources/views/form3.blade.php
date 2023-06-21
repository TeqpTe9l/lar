@extends('layout')
@section('title', 'Форма для Акссесуаров')
@section('main') 
<form action=" " method="post">
  @csrf
  
   <div class="form-group">
    <label for="image">Введите картинку</label>
    <input type="text" name="image"  id="image" class="form-control">
  </div>
  <div class="form-group">
    <label for="model">Введите модель</label>   
     <input type="text" name="model"   id="model" class="form-control">
  </div>

 

  <div class="form-group">
    <label for="price">Введите цену</label>
    <input type="text" name="price" id="price" class="form-control">
  </div>

  <div class="form-group">
    <label for="nazv_id">Введите номер названия модели </label>
    <input type="text" name="nazv_id"  id="nazv_id" class="form-control">
  </div>

  <div class="form-group">
    <label for="tip">Введите тип</label>
    <input type="text" name="tip"  id="tip" class="form-control">
  </div>

  <div class="form-group">
    <label for="interf">Введите интерфейс</label>
    <input type="text" name="interf"  id="interf" class="form-control">
  </div>

  <div class="form-group">
    <label for="opis">Введите описание</label>
    <input type="text" name="opis"  id="opis" class="form-control">
  </div>

  <div class="form-group">
    <label for="garant">Введите гарантию</label>
    <input type="text" name="garant"  id="garant" class="form-control">
  </div>
  <button type="submit" class="btn btn-success">Отправить</button>
  
</form>
<div class="container-fluid">
<a class="navbar-brand" href="/tov">
        Таблица
</a>
</div>
@endsection