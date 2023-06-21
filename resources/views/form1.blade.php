@extends('layout')

@section('title', 'Форма для таблицы "Сотрудники"')

@section('main')
<form action=" " method="post">
  @csrf
  
  <div class="form-group">
    <label for="fam">Введите Фамилию</label>
    <input type="text" name="fam"   id="fam" class="form-control">
  </div>

  <div class="form-group">
    <label for="im">Введите имя</label>
    <input type="text" name="im"  id="im" class="form-control">
  </div>

  <div class="form-group">
    <label for="otch">Введите отчество</label>
    <input type="text" name="otch" id="otch" class="form-control">
  </div>

  <div class="form-group">
    <label for="graj">Введите гражданство</label>
    <input type="text" name="graj"  id="graj" class="form-control">
  </div>

  <div class="form-group">
    <label for="staj">Введите стаж</label>
    <input type="text" name="staj"  id="staj" class="form-control">
  </div>

  <div class="form-group">
    <label for="kod_otd">Введите код отдела</label>
    <input type="text" name="kod_otd"  id="kod_otd" class="form-control">
  </div>

  <div class="form-group">
    <label for="spec">Введите должность</label>
    <input type="text" name="spec"  id="spec" class="form-control">
  </div>

  <div class="form-group">
    <label for="zarp">Введите зарплату</label>
    <input type="text" name="zarp"  id="zarp" class="form-control">
  </div>
  <div class="form-group">
    <label for="tel">Введите телефон</label>
    <input type="text" name="tel"  id="tel" class="form-control">
  </div>
  <button type="submit" class="btn btn-success">Отправить</button>
  
</form>
<div class="container-fluid">
<a class="navbar-brand" href="/sotr">
        Таблица
</a>
</div>
@endsection