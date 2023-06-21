@extends('layout')

@section('title', 'Таблица "Сотрудники"')

@section('main')

<form action=" {{route('sotr-update-1',$el->id)}}" method="post">
  @csrf
  
  <div class="form-group">
    <label for="fam">Введите Фамилию</label>
    <input type="text" name="fam" value="{{$el->fam}}"  id="fam" class="form-control">
  </div>

  <div class="form-group">
    <label for="im">Введите имя</label>
    <input type="text" name="im" value="{{$el->im}}" id="im" class="form-control">
  </div>

  <div class="form-group">
    <label for="otch">Введите отчество</label>
    <input type="text" name="otch" value="{{$el->otch}}" id="otch" class="form-control">
  </div>

  <div class="form-group">
    <label for="graj">Введите гражданство</label>
    <input type="text" name="graj" value="{{$el->graj}}" id="graj" class="form-control">
  </div>

  <div class="form-group">
    <label for="staj">Введите стаж</label>
    <input type="text" name="staj" value="{{$el->staj}}" id="staj" class="form-control">
  </div>

  <div class="form-group">
    <label for="kod_otd">Введите код отдела</label>
    <input type="text" name="kod_otd" value="{{$el->kod_otd}}" id="kod_otd" class="form-control">
  </div>

  <div class="form-group">
    <label for="spec">Введите должность</label>
    <input type="text" name="spec" value="{{$el->spec}}" id="spec" class="form-control">
  </div>

  <div class="form-group">
    <label for="zarp">Введите зарплату</label>
    <input type="text" name="zarp" value="{{$el->zarp}}" id="zarp" class="form-control">
  </div>
  <div class="form-group">
    <label for="tel">Введите телефон</label>
    <input type="text" name="tel" value="{{$el->tel}}" id="tel" class="form-control">
  </div>
  <button type="submit" class="btn btn-success">Обновить</button>
  
</form>
<div class="container-fluid">
<a class="navbar-brand" href="/sotr">
         Вернуться на Таблица "Сотрудники"
</a>
</div>
@endsection